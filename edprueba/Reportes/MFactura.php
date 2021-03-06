<?php
// (c) Xavier Nicolay
// Exemple de g�n�ration de devis/facture PDF

require('Factura.php');

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
//$pdf->addSociete( utf8_decode($reg_cli->razon_social),
//                  utf8_decode("$reg_cli->num_sucursal")."\n" .
//                  "Direcci�n:".utf8_decode(" $reg_cli->direccion")."\n".
//                  "Tel�fono: ".utf8_decode("$reg_cli->telefono_suc")."\n" .
//                  "email : $reg_cli->email_suc ","../$f","$extension");
$pdf->fact_devM( "FACTURA ", "$reg_cli->serie_comprobante-$reg_cli->num_comprobante" );
//$pdf->temporaire( "" );
//$pdf->addDate( $reg_cli->fecha);
//$pdf->addClient("CL01");
//$pdf->addPageNumber("1");

$pdf->addClientAdresse(utf8_decode($reg_cli->nombre),"Domicilio: ".utf8_decode($reg_cli->direccion_calle)." - ".utf8_decode($reg_cli->direccion_departamento),$reg_cli->doc.": ".$reg_cli->num_documento,"Email: ".$reg_cli->email,"Telefono: ".$reg_cli->telefono);
$pdf->addDatefact( $reg_cli->fecha);
//$pdf->addReglement("Soluciones Innovadoras Per� S.A.C.");
//$pdf->addEcheance("RUC","2147715777");
//$pdf->addNumTVA("Chongoyape, Jos� G�lvez 1368");
//$pdf->addReference("Devis ... du ....");
$cols=array( "CODIGO"    => 25,
             "DESCRIPCION"  => 105,
             "CANTIDAD"     => 20,
             "P.U."      => 20,
             "DSCTO" => 20,
             "SUBTOTAL" => 20 );
$pdf->addColsM($cols);
$cols=array( "CODIGO"    => "C",
             "DESCRIPCION"  => "C",
             "CANTIDAD"     => "C",
             "P.U."      => "C",
             "DSCTO" => "C",
             "SUBTOTAL"          => "C" );
//$pdf->addLineFormat( $cols);
//$pdf->addLineFormat($cols);

$y    = 55;//altura del listado
require_once "../model/Configuracion.php";

$objConfiguracion = new Configuracion();


$query_global = $objConfiguracion->Listar();

$reg_igv = $query_global->fetch_object();

$query_ped = $objPedido->ImprimirDetallePedido($_GET["id"]);

        while ($reg = $query_ped->fetch_object()) {

            $line = array( "CODIGO"    => "'$reg->codigo'",
                           "DESCRIPCION"  => utf8_decode("$reg->descripcion"),
                           "CANTIDAD"     => "$reg->cantidad",
                           "P.U."      => "$reg->precio_venta",
                           "DSCTO" => "$reg->descuento",
                           "SUBTOTAL"          => "$reg->sub_total");
            $size = $pdf->addLineM( $y, $line );
            $y   += $size + 1;
        }
$IgvPorcentaje =$reg_igv->porcentaje_impuesto;
$query_total = $objPedido->TotalPedidoImpuesto($_GET["id"],$IgvPorcentaje);

$reg_total = $query_total->fetch_object();

require_once "../ajax/Letras.php";

 $V=new EnLetras();
 $con_letra=strtoupper($V->ValorEnLetras($reg_total->Total,"NUEVOS SOLES"));
//$pdf->addCadreTVAs("---TRES MILLONES CUATROCIENTOS CINCUENTA Y UN MIL DOSCIENTOS CUARENTA PESOS 00/100 M.N.");
$pdf->addCadreTVAsM("---".$con_letra);



//$pdf->addTVAs( $reg_cli->impuesto, $reg_total->Total,"$reg_igv->simbolo_moneda ");
$pdf->addTVAsM( $reg_total->IgvTotal, $reg_total->Total,"$reg_igv->simbolo_moneda ");
$pdf->addCadreEurosFrancsM("$reg_igv->nombre_impuesto");
$pdf->Output('Reporte de Venta','I');
?>
