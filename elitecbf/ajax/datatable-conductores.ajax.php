<?php

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
  	//var_dump($conductores);
  	//return;
  	$vermas="<div class='btn-group'><button class='btn btn-success bt-sm'>ver<i class='fa fa-fw fa-plus'></i></button></div>";

  	echo '{
			"data": [';

			for($i = 0; $i < count($conductores)-1; $i++){

				echo '[
			      "'.$conductores[$i]["fecha"].'",
			      "'.$conductores[$i]["dni"].'",
			      "'.$conductores[$i]["nombre"].'",
			      "'.$conductores[$i]["apellido"].'",
			      "'.$conductores[$i]["placa"].'",
			      "'.$vermas.'"
			    ],';

			}

			
		   echo'[
			     
			      "'.$conductores[count($conductores)-1]["fecha"].'",
			      "'.$conductores[count($conductores)-1]["dni"].'",
			      "'.$conductores[count($conductores)-1]["nombre"].'",
			      "'.$conductores[count($conductores)-1]["apellido"].'",
			      "'.$conductores[count($conductores)-1]["placa"].'",
			      "'.$vermas.'"
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
