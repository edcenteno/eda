<?php

$conexion= new mysqli("localhost", "root", "", "arhuantecedentes");
	//Comprobar conexion
	if(mysqli_connect_error())
	{
		printf("Fallo la conexion");
	}
	else {
		//printf("Estas conectado");
	}
