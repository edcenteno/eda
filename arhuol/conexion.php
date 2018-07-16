<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'arhuantecedentes');
	
	if($mysqli->connect_error){
		$mysqli->set_charset('utf8');
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>