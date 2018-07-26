<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

require_once "../controladores/conductores.controlador.php";
require_once "../modelos/conductores.modelo.php";

class TablaConductor{

  /*=============================================
  MOSTRAR LA TABLA DE PRODUCTO
  =============================================*/ 

  public function mostrarTabla(){

  	$item = null;
    $valor = null;
    $orden = "id";

  	$conductores = ControladorConductor::ctrMostrarConductor($item, $valor, $orden);

  	echo '{
			"data": [';

			for($i = 0; $i < count($conductores)-1; $i++){

				echo '[
			      "'.$conductores[$i]["fecha"].'",
			      "'.$conductores[$i]["dni"].'",
			      "'.$conductores[$i]["dni"].'",
			      "'.$conductores[$i]["nombre"].'",
			      "'.$conductores[$i]["apellido"].'",
			      "'.$conductores[$i]["placa"].'",
			      "'.$conductores[$i]["ant_penales"].'",
			      "'.$conductores[$i]["ant_judicial"].'",
			      "'.$conductores[$i]["ant_policial"].'",
			      "'.$conductores[$i]["record_cond"].'",
			      "'.$conductores[$i]["resultado"].'",
			      "'.$conductores[$i]["soat"].'",
			      "'.$formato.'"
			    ],';

			}

			
		   echo'[
			      "'.count($conductores).'",
			      "'.$conductores[count($conductores)-1]["dni"].'",
			      "'.$conductores[count($conductores)-1]["fecha"].'",
			      "'.$conductores[count($conductores)-1]["nombre"].'",
			      "'.$conductores[count($conductores)-1]["apellido"].'",
			      "'.$conductores[count($conductores)-1]["placa"].'",
			      "'.$conductores[count($conductores)-1]["ant_penales"].'",
			      "'.$conductores[count($conductores)-1]["ant_judicial"].'",
			      "'.$conductores[count($conductores)-1]["ant_policial"].'",
			      "'.$conductores[count($conductores)-1]["record_cond"].'",
			      "'.$conductores[count($conductores)-1]["resultado"].'",
			      "'.$conductores[count($conductores)-1]["soat"].'",
			      "'.$formato.'"
			]
			]
		}';



  }


}

/*=============================================
ACTIVAR TABLA DE conductores
=============================================*/ 
$activar = new TablaConductor();
$activar -> mostrarTabla();
