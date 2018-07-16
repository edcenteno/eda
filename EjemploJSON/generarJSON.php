<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "arhuantecedentes";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "SELECT * FROM conductores where dni = 47959636";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$conductores = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
	$dni=$row['dni'];
	$nombre=$row['nombre'];
	$apellido=$row['apellido'];
	$placa=$row['placa'];
	$ant_penales=$row['ant_penales'];
	$ant_judicial=$row['ant_judicial'];
	$ant_policial=$row['ant_policial'];
	$record_cond=$row['record_cond'];
	$resultado=$row['resultado'];
	$soat=$row['soat'];
	

	$conductores[] = array('dni'=> $dni, 'nombre'=> $nombre, 'apellido'=> $apellido, 'placa'=> $placa,
						'ant_penales'=> $ant_penales, 'ant_judicial'=> $ant_judicial, 'ant_policial'=> $ant_policial, 'record_cond'=> $record_cond, 'ant_penales'=> $ant_penales, 'resultado'=> $resultado, 'soat'=> $soat);

}
//var_dump($conductores);
	
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

//Creamos el JSON
//$clientes['clientes'] = $clientes;
$json_string = json_encode($conductores);
echo $json_string;

//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'clientes.json';
file_put_contents($file, $json_string);
*/
	

?>