<?php

	require_once "conexion.php";
	

	if (substr($_FILES['excel']['name'],-3)=="csv")
	{
		$fecha		= date("Y-m-d");
		$carpeta 	= "tmp_excel/";
		$excel  	= $fecha."-".$_FILES['excel']['name'];

		move_uploaded_file($_FILES['excel']['tmp_name'], "$carpeta$excel");
		
		$row = 1;

		$fp = fopen ("$carpeta$excel","r");

		//fgetcsv. obtiene los valores que estan en el csv y los extrae.

		while ($data = fgetcsv ($fp, 1000, ","))
		{
			//si la linea es igual a 1 no guardamos por que serian los titulos de la hoja del excel.
			if ($row!=1)
			{
				date_default_timezone_set('America/Lima');
				$num = count($data);
				$insertar="INSERT INTO conductores (dni,fecha) 
						   VALUES ('$data[0]',NOW())";
				$conexion->query($insertar) or die(mysqli_error($conexion));

				if (!$conexion)
				{
					include "error-carga-excel.php";
					exit;
				}

			}

		$row++;

		}

		fclose ($fp);


			include "carga-completa-excel.php";
		
		exit;

	}

?>