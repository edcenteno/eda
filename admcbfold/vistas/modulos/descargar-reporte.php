<?php

require_once "../../controladores/conductores.controlador.php";
require_once "../../modelos/conductores.modelo.php";


$reporte = new ControladorConductor();
$reporte -> ctrDescargarReporte();