<?php
// (c) Xavier Nicolay
// Exemple de g�n�ration de devis/facture PDF

require('GuiaRemision.php');

session_start();

$lo = $_SESSION["logo"];

require_once "../model/Configuracion.php";

      $objConf = new Configuracion();

      $query_conf = $objConf->Listar();

      $regConf = $query_conf->fetch_object();

require_once "../model/Pedido.php";

$objPedido = new Pedido();

$query_cli = $objPedido->GetVenta($_GET["id"]);
$reg_cli = $query_cli->fetch_object();


$query_cli2 = $objPedido->GetComprobanteTipo($_GET["id"]);
$reg_cli2 = $query_cli2->fetch_object();

$f = "";

      if ($_SESSION["superadmin"] == "S") {
        $f = $regConf->logo;
      } else {
        $f = $reg_cli->logo;
      }

      $archivo = $f; 
      $trozos = explode(".", $archivo); 
      $extension = end($trozos);


$pdf = new PDF_Invoice( 'P', 'mm', 'A4' );
$pdf->AddPage();
$pdf->addSociete( utf8_decode($reg_cli->razon_social),
                  utf8_decode("$reg_cli->num_sucursal")."\n" .
                  "DIRECCION DE PARTIDA: ".utf8_decode("$reg_cli->direccion")."\n".
                  "TELEFONO DEL PUNTO DE PARTIDA: $reg_cli->telefono_suc\n" .
                  ". $reg_cli->email_suc ","../$f","$extension");
$pdf->fact_dev( "$reg_cli2->tipo_comprobante ", "$reg_cli->serie_comprobante-$reg_cli->num_comprobante" );
$pdf->temporaire( "" );
$pdf->addDate( $reg_cli->fecha);
$pdf->addfecha( $reg_cli->fecha);
//$pdf->addClient("CL01");
//$pdf->addPageNumber("1");

$pdf->addClientAdresse(utf8_decode($reg_cli->nombre),$reg_cli->doc.": ".$reg_cli->num_documento, "DIRECCION DE LLEGADA: ".utf8_decode($reg_cli->direccion_calle)." - ".utf8_decode($reg_cli->direccion_departamento),". ".$reg_cli->email,"Telefono: ".$reg_cli->telefono);
//$pdf->addReglement("Soluciones Innovadoras Per� S.A.C.");
//$pdf->addEcheance("RUC","2147715777");
//$pdf->addNumTVA("Chongoyape, Jos� G�lvez 1368");
//$pdf->addReference("Devis ... du ....");
$cols=array( "CODIGO"    => 33,
             "CANTIDAD"  => 22,
             "DESCRIPCION"     => 105);
$pdf->addCols($cols);
$cols=array( "CODIGO"    => "L",
             "CANTIDAD"  => "L",
             "DESCRIPCION"     => "L");
$pdf->addLineFormat($cols);
$pdf->addLineFormat($cols);

$y    = 70;

$query_ped = $objPedido->ImprimirDetallePedido($_GET["id"]);

        while ($reg = $query_ped->fetch_object()) {

            $line = array( "CODIGO"    => "'$reg->codigo'",
                           "DESCRIPCION"  => utf8_decode("$reg->descripcion"),
                           "CANTIDAD"     => "$reg->cantidad");
            $size = $pdf->addLine( $y, $line );
            $y   += $size + 2;
        }

$query_total = $objPedido->TotalPedido($_GET["id"]);

$reg_total = $query_total->fetch_object();

require_once "../ajax/Letras.php";

 $V=new EnLetras(); 
 $con_letra=strtoupper($V->ValorEnLetras($reg_total->Total,"NUEVOS SOLES")); 
//$pdf->addCadreTVAs("---TRES MILLONES CUATROCIENTOS CINCUENTA Y UN MIL DOSCIENTOS CUARENTA PESOS 00/100 M.N.");
//$pdf->addCadreTVAs("---".$con_letra);


require_once "../model/Configuracion.php";

$objConfiguracion = new Configuracion();


$query_global = $objConfiguracion->Listar();

$reg_igv = $query_global->fetch_object();

//$pdf->addTVAs( $reg_cli->impuesto, $reg_total->Total,"$reg_igv->simbolo_moneda ");
$pdf->addCadreEurosFrancs("$reg_igv->nombre_impuesto"." $reg_cli->impuesto%");
$pdf->Output('Reporte de Venta','I');
?>
