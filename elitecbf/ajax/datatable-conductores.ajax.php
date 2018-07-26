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
  	
  	echo '{
			"data": [';

			for($i = 0; $i < count($conductores)-1; $i++){
				$vermas="<div class='btn-group'><a class='btn btn-success btnvermas' idconductor='".$conductores[$i]["cont"]."' href='vermas' target='_blank'>ver<i class='fa fa-fw fa-plus'></i></a></div>";

				if($conductores[$i]["observacion"] != ""){

		           $dni= "<span class='badge badge-warning ml-auto'>".$conductores[$i]["dni"]."</span>";

		         }else{

		          $dni = $conductores[$i]["dni"];

		        }


				echo '[
			      "'.$conductores[$i]["fecha"].'",
			      "'.$dni.'",
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
