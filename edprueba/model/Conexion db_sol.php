<?php

//$conexion = new mysqli("localhost", "root", "", "bderror");
$conexion = new mysqli("localhost", "root", "", "dbsol");

	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
