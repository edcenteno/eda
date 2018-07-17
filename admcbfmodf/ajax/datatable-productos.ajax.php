<?php

require_once "../controladores/conductores.controlador.php";
require_once "../modelos/conductores.modelo.php";

class TablaProductos{

  /*=============================================
  MOSTRAR LA TABLA DE PRODUCTO
  =============================================*/ 

  public function mostrarTabla(){

  	$item = null;
    $valor = null;
    $orden = "dni";

  	$productos = ControladorConductor::ctrMostrarConductor($item, $valor, $orden);

  	echo '{
			"data": [';

			for($i = 0; $i < count($productos)-1; $i++){

				$item = "dni";
    			//$valor = $productos[$i]["id_categoria"];

				//$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

				 echo '[
			      "'.$productos[$i]["fecha"].'",
			      "'.$productos[$i]["dni"].'",
			      "'.$productos[$i]["nombre"].'",
			      "'.$productos[$i]["apellido"].'",
			      "'.$productos[$i]["placa"].'",
			      "'.$productos[$i]["ant_penales"].'",
			      "'.$productos[$i]["ant_judicial"].'",
			      "'.$productos[$i]["ant_policial"].'",
			      "'.$productos[$i]["record_cond"].'",
			      "'.$productos[$i]["resultado"].'",
			      "'.$productos[$i]["soat"].'",
			      "'.$productos[$i]["pdf"].'",
			      "'.$productos[$i]["observacion"].'"
			    ],';

			}

			$item = "dni";
			//$valor = $productos[count($productos)-1]["id_categoria"];

			//$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);


		   echo'[
			      "'.$productos[count($productos)-1]["fecha"].'",
			      "'.$productos[count($productos)-1]["dni"].'",
			      "'.$productos[count($productos)-1]["nombre"].'",
			      "'.$productos[count($productos)-1]["apellido"].'",
			      "'.$productos[count($productos)-1]["placa"].'",
			      "'.$productos[count($productos)-1]["ant_penales"].'",
			      "'.$productos[count($productos)-1]["ant_judicial"].'",
			      "'.$productos[count($productos)-1]["ant_policial"].'",
			      "'.$productos[count($productos)-1]["record_cond"].'",
			      "'.$productos[count($productos)-1]["resultado"].'",
			      "'.$productos[count($productos)-1]["soat"].'",
			      "'.$productos[count($productos)-1]["pdf"].'",
			      "'.$productos[count($productos)-1]["observacion"].'"
			    ]
			]
		}';


  }


}

/*=============================================
ACTIVAR TABLA DE PRODUCTOS
=============================================*/ 
$activar = new TablaProductos();
$activar -> mostrarTabla();





