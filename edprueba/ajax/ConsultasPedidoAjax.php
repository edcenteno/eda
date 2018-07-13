<?php

	session_start();

require_once "../model/ConsultasCompras.php";

	$objCategoria = new ConsultasPedidos();

	switch ($_GET["op"]) {

		case "listKardexValorizado":
               if ( !isset($_REQUEST['idsucursal'])) $_REQUEST['idsucursal'] = 1;
            //   $idsucursal = $_REQUEST["idsucursal"];

            //$query_Tipo = $objCategoria->ListarKardexValorizado($idsucursal);


            $fecha_desde = $_REQUEST["fecha_desde"];
            $fecha_hasta = $_REQUEST["fecha_hasta"];
            $idsucursal = $_REQUEST["idsucursal"];
            $data = Array();
            $query_Tipo = $objCategoria->ListarKardexValorizado($idsucursal, $fecha_desde, $fecha_hasta);


               $data = Array();
			while ($reg = $query_Tipo->fetch_object()) {
				$data[] = array(
                    "0"=>$reg->sucursal,
                    "1"=>$reg->articulo,
                    "2"=>$reg->descripcion,
                    "3"=>$reg->categoria,
                    "4"=>$reg->totalingreso,
                    "5"=>$reg->valorizadoingreso,
                    "6"=>$reg->totalstock,
                    "7"=>$reg->valorizadostock,
                    "8"=>$reg->totalventa,
                    "9"=>$reg->valorizadoventa,
                    "10"=>$reg->utilidadvalorizada,

                    );
			}
               $results = array(
               "sEcho" => 1,
               "iTotalRecords" => count($data),
               "iTotalDisplayRecords" => count($data),
               "aaData"=>$data);
               echo json_encode($results);

			break;

		case "listStockArticulos":
           if ( !isset($_REQUEST['idsucursal'])) $_REQUEST['idsucursal'] = 1;
          $idsucursal = $_REQUEST["idsucursal"];
          //$data =Array();
          //$query_Tipo = $objCategoria->ListarStockArticulos($idsucursal);


          $fecha_desde = $_REQUEST["fecha_desde"];
          $fecha_hasta = $_REQUEST["fecha_hasta"];
          $idsucursal = $_REQUEST["idsucursal"];
          $data = Array();
          $query_Tipo = $objCategoria->ListarStockArticulos($idsucursal, $fecha_desde, $fecha_hasta);





			while ($reg = $query_Tipo->fetch_object()) {

				$data[] = array(
                    "0"=>$reg->sucursal,
                    "1"=>$reg->articulo,
                    "2"=>$reg->categoria,
                    "3"=>$reg->codigo,
                    "4"=>$reg->descripcion,

                    "5"=>$reg->totalingreso,
                    "6"=>$reg->costounitario,
                    "7"=>$reg->valorizadoingreso,

                    "8"=>$reg->totalstock,
                    "9"=>$reg->precioventa,

                    "10"=>$reg->valorizadostock,
                    "11"=>$reg->precioventa,
                    "12"=>$reg->totalventa,
                    "13"=>$reg->valorizadoventa,
                    "14"=>$reg->utilidadvalorizada,

                    );
			}
               $results = array(
               "sEcho" => 1,
               "iTotalRecords" => count($data),
               "iTotalDisplayRecords" => count($data),
               "aaData"=>$data);
               echo json_encode($results);

			break;

          case "listComprasFechas":

               $fecha_desde = $_REQUEST["fecha_desde"];
               $fecha_hasta = $_REQUEST["fecha_hasta"];
               $idsucursal = $_REQUEST["idsucursal"];
               $data = Array();
               $query_Tipo = $objCategoria->ListarComprasFechas($idsucursal, $fecha_desde, $fecha_hasta);

               while ($reg = $query_Tipo->fetch_object()) {

                    $data[] = array(
                         "0"=>$reg->fecha,
                         "1"=>$reg->sucursal,
                         "2"=>$reg->empleado,
                         "3"=>$reg->proveedor,
                         "4"=>$reg->comprobante,
                         "5"=>$reg->serie,
                         "6"=>$reg->numero,
                         "7"=>$reg->impuesto,
                         "8"=>$reg->subtotal,
                         "9"=>$reg->totalimpuesto,
                         "10"=>$reg->total,
                         "11"=>'<button class="btn btn-success" data-toggle="tooltip" title="Ver Detalle" onclick="cargarDataIngreso('.$reg->idingreso.',\''.$reg->serie.'\',\''.$reg->numero.'\',\''.$reg->impuesto.'\',\''.$reg->total.'\',\''.$reg->idingreso.'\',\''.$reg->proveedor.'\',\''.$reg->comprobante.'\')" ><i class="fa fa-eye"></i> </button>&nbsp'.
                    '<a href="./Reportes/exIngreso.php?id='.$reg->idingreso.'" class="btn btn-primary" data-toggle="tooltip" title="Imprimir" target="blanck" ><i class="fa fa-file-text"></i> </a>'
                    );
               }

               $results = array(
               "sEcho" => 1,
               "iTotalRecords" => count($data),
               "iTotalDisplayRecords" => count($data),
               "aaData"=>$data);
               echo json_encode($results);

               break;

          case "listPedidoFechas":

               $fecha_desde = $_REQUEST["fecha_desde"];
               $fecha_hasta = $_REQUEST["fecha_hasta"];
               $idsucursal = $_REQUEST["idsucursal"];
               $data = Array();
               $query_Tipo = $objCategoria->ListarComprasFechas($idsucursal, $fecha_desde, $fecha_hasta);

               while ($reg = $query_Tipo->fetch_object()) {

                    $data[] = array(
                         "0"=>$reg->fecha,
                         "1"=>$reg->sucursal,
                         "2"=>$reg->empleado,
                         "3"=>$reg->proveedor,
                         "4"=>$reg->comprobante,
                         "5"=>$reg->serie,
                         "6"=>$reg->numero,
                         "7"=>$reg->impuesto,
                         "8"=>$reg->subtotal,
                         "9"=>$reg->totalimpuesto,
                         "10"=>$reg->total,
                         "11"=>'<button class="btn btn-success" data-toggle="tooltip" title="Ver Detalle" onclick="cargarDataIngreso('.$reg->idingreso.',\''.$reg->serie.'\',\''.$reg->numero.'\',\''.$reg->impuesto.'\',\''.$reg->total.'\',\''.$reg->idingreso.'\',\''.$reg->proveedor.'\',\''.$reg->comprobante.'\')" ><i class="fa fa-eye"></i> </button>&nbsp'.
                    '<a href="./Reportes/exIngreso.php?id='.$reg->idingreso.'" class="btn btn-primary" data-toggle="tooltip" title="Imprimir" target="blanck" ><i class="fa fa-file-text"></i> </a>'
                    );
               }

               $results = array(
               "sEcho" => 1,
               "iTotalRecords" => count($data),
               "iTotalDisplayRecords" => count($data),
               "aaData"=>$data);
               echo json_encode($results);

               break;

          case "listComprasDetalladas":

               $fecha_desde = $_REQUEST["fecha_desde"];
               $fecha_hasta = $_REQUEST["fecha_hasta"];
               //if ( !isset($_REQUEST['idsucursal'])) $_REQUEST['idsucursal'] = 1;
               $idsucursal = $_REQUEST["idsucursal"];
               $data = Array();
               $query_Tipo = $objCategoria->ListarComprasDetalladas($idsucursal, $fecha_desde, $fecha_hasta);

               while ($reg = $query_Tipo->fetch_object()) {

                    $data[] = array(
                         "0"=>$reg->fecha,
                         "1"=>$reg->sucursal,
                         "2"=>$reg->empleado,
                         "3"=>$reg->proveedor,
                         "4"=>$reg->comprobante,
                         "5"=>$reg->serie,
                         "6"=>$reg->numero,
                         "7"=>$reg->impuesto,
                         "8"=>$reg->articulo,
                         "9"=>$reg->codigo,
                         "10"=>$reg->serie_art,
                         "11"=>$reg->stock_ingreso,
                         "12"=>$reg->stock_actual,
                         "13"=>$reg->stock_vendido,
                         "14"=>$reg->precio_compra,
                         "15"=>$reg->precio_ventapublico,
                         "16"=>$reg->precio_ventadistribuidor
                    );
               }

               $results = array(
               "sEcho" => 1,
               "iTotalRecords" => count($data),
               "iTotalDisplayRecords" => count($data),
               "aaData"=>$data);
               echo json_encode($results);

               break;

          case "listComprasProveedor":

               $idProveedor = $_REQUEST["idProveedor"];
               $fecha_desde = $_REQUEST["fecha_desde"];
               $fecha_hasta = $_REQUEST["fecha_hasta"];
               // if ( !isset($_REQUEST['idsucursal'])) $_REQUEST['idsucursal'] = 1;
               $idsucursal = $_REQUEST["idsucursal"];
               $data = Array();

               $query_Tipo = $objCategoria->ListarComprasProveedor($idsucursal, $idProveedor, $fecha_desde, $fecha_hasta);

               while ($reg = $query_Tipo->fetch_object()) {

                    $data[] = array(
                         "0"=>$reg->fecha,
                         "1"=>$reg->sucursal,
                         "2"=>$reg->empleado,
                         "3"=>$reg->proveedor,
                         "4"=>$reg->comprobante,
                         "5"=>$reg->serie,
                         "6"=>$reg->numero,
                         "7"=>$reg->impuesto,
                         "8"=>$reg->subtotal,
                         "9"=>$reg->totalimpuesto,
                         "10"=>$reg->total
                    );
               }
               $results = array(
               "sEcho" => 1,
               "iTotalRecords" => count($data),
               "iTotalDisplayRecords" => count($data),
               "aaData"=>$data);
               echo json_encode($results);

               break;

          case "listComprasDetProveedor":

               $idProveedor = $_REQUEST["idProveedor"];
               $fecha_desde = $_REQUEST["fecha_desde"];
               $fecha_hasta = $_REQUEST["fecha_hasta"];
               // if ( !isset($_REQUEST['idsucursal'])) $_REQUEST['idsucursal'] = 1;
               $idsucursal = $_REQUEST["idsucursal"];
               $data = Array();
               $query_Tipo = $objCategoria->ListarComprasDetProveedor($idsucursal, $idProveedor, $fecha_desde, $fecha_hasta);

               while ($reg = $query_Tipo->fetch_object()) {

                    $data[] = array(
                         "0"=>$reg->fecha,
                         "1"=>$reg->sucursal,
                         "2"=>$reg->empleado,
                         "3"=>$reg->proveedor,
                         "4"=>$reg->comprobante,
                         "5"=>$reg->serie,
                         "6"=>$reg->numero,
                         "7"=>$reg->impuesto,
                         "8"=>$reg->articulo,
                         "9"=>$reg->codigo,
                         "10"=>$reg->serie,
                         "11"=>$reg->stock_ingreso,
                         "12"=>$reg->stock_actual,
                         "13"=>$reg->stock_vendido,
                         "14"=>$reg->precio_compra,
                         "15"=>$reg->precio_ventapublico,
                         "16"=>$reg->precio_ventadistribuidor
                    );
               }

               $results = array(
               "sEcho" => 1,
               "iTotalRecords" => count($data),
               "iTotalDisplayRecords" => count($data),
               "aaData"=>$data);
               echo json_encode($results);

               break;


	}
	