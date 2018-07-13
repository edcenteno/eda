<?php
 include 'scripts.php';
// Iniciamos la conexión a la Base de Datos
$con = mysqli_connect('localhost','root','','arhuantecedentes');
// Le pedimos que imprima los caracteres especiales
$con->query("SET NAMES 'utf8'");
                     
// Si hay error que nos arreoje un mensaje                     
if ($con->connect_error) {
	die('Error en la Conexión a la Base de Datos : ('. $con->connect_errno .') '. $con->connect_error);
}
 
// Seleccionamos los registros
$results = $con->query("SELECT * FROM conductores where dni ='44681598' ");
 
// Creamos el array postres
$rows['postres'] = array();
 
// Recorremos los registros de la Base de Datos para mostrarlos
while($r = $results->fetch_object()) {
    array_push($rows['postres'], $r);
}
 
// Con solo json_encode imprimimos los registros, pero le agregamos 128 que es el valor numérico de la extensión JSON_PRETTY_PRINT para mostrar el array mas ordenado en pantalla
$mysql_json = json_encode($rows['postres'], 128);
 
//echo $mysql_json;
// Con las etiquetas <pre></pre> damos saltos de linea a nuestro array
// var_dump("<pre>".$mysql_json."</pre>");

// $out = json_decode($mysql_json, true);
/*echo "<pre>";
var_dump($out);

echo"</pre>";*/

/*echo "NombreCompania : ".$out['NombreCompania']." <br>";
echo "FechaInicio : ". $out['FechaInicio'] ."<br>";
echo "FechaFin : ".$out['FechaFin']." <br>";
echo "Estado :  ".$out['Estado'] ."<br>";
*/

/*foreach ($mysql_json as $key => $value) {
	echo "dni : ".$value['dni']." <br>";
	echo "nombre : ".$value['nombre']." <br>";
}*/

echo htmlspecialchars($mysql_json)
?>

