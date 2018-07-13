<?php
$id=$_GET["id"];

require_once "../model/Pedido.php";
$objPedido = new Pedido();

$query_cli = $objPedido->GetComprobanteTipo($_GET["id"]);
$reg_cli = $query_cli->fetch_object();

If($reg_cli->tipo_comprobante=="Factura" || $reg_cli->tipo_comprobante=="FACTURA" || $reg_cli->tipo_comprobante=="FACTURAS" || $reg_cli->tipo_comprobante=="Facturas" )
{
  header('Location: MFactura.php?id='.$id);
}

ElseIf( $reg_cli->tipo_comprobante=="TICKET-BOLETA" || $reg_cli->tipo_comprobante=="TICKET-FACTURA")
{
  header('Location: MTicket.php?id='.$id);
}

ElseIf($reg_cli->tipo_comprobante=="Boleta" || $reg_cli->tipo_comprobante=="BOLETA" || $reg_cli->tipo_comprobante=="BOLETAS" || $reg_cli->tipo_comprobante=="Boleta" )
{
  header('Location: MBoleta.php?id='.$id);
}
Else{
  header('Location: MGuia.php?id='.$id);
}

?>