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

  	echo 'holas';



  }


}

/*=============================================
ACTIVAR TABLA DE conductores
=============================================*/ 
$activar = new TablaConductor();
$activar -> mostrarTabla();
