<?php
// $dni=$_POST['dni'];
    require ("./src/autoload.php");

    $reniec = new \Reniec\Reniec();
	
	$dni = "47602648";
	
    $persona = $reniec->search( $dni );
	
	if( $persona->success != false ) // si la busqueda es exitosa
	{
		echo "DNI: " . $persona->result->DNI . "-" . $persona->result->CodVerificacion . "<br>";
		echo "Nombre: " . $persona->result->Nombre . "<br>";
		echo "Apellido Paterno: " . $persona->result->Paterno . "<br>";
		echo "Apellido Materno: " . $persona->result->Materno . "<br>";
	}
	else // en caso de no encontrar resultados
	{
		echo $persona->msg;
	}
?>