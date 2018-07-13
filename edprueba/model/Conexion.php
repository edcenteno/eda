<?php

//$conexion = new mysqli("localhost", "root", "", "bderror");
$conexion = new mysqli("localhost", "root", "12345", "bdsol7reserva2");

	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
