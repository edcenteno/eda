<title>Cabify - Disfruta del viaje</title>
  		<link rel="shortcut icon" href="img/favicon.ico" type="image/ico" />


<?php
	date_default_timezone_set('America/Lima');
	
	NuevaPersona($_POST['nuevoDni'], $_POST['nuevoNombre'], $_POST['nuevoApellido'], $_POST['nuevoPlaca']);
	
	function NuevaPersona($dni, $nombre, $apellido, $placa)
	{
		include 'conexion.php';
		$sentencia= "INSERT INTO conductores (dni, nombre, apellido, placa, fecha, empresa)
						 VALUES ('".$dni."', '".$nombre."', '".$apellido."', '".$placa."', NOW( ), 'A')" ;
		$mysqli->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($mysqli));
	}
?>

<?php
header('location: inicio.php')
?>