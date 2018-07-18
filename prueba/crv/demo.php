<?php
	// Modo de Uso
	require_once("src/autoload.php");
	
	$test = new \Pit\Pit();
	echo "<pre>";
	print_r( $test->check( "$placa" ) ); // Sin Requisitoria
	
	//print_r( $test->check( "SQZ949" ) ); // Con Requisitoria
?>
