<?php
//$placa=$_POST['placa'];
$placa="ABC123";

//jhon$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.MTA2MQ.mNioS0vL0ckba0lPV955HvekjFHzvIcqEVqy1_kBerM';
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.MTAzNA.AmJhTMIv9Bzd9h4KjWijho4Wf0apnT4IoqasWM0dLLE';//token prestado
$query = "
query {
	soat(placa:\"$placa\") {
		NombreCompania
		FechaInicio
        FechaFin
        Estado
    }
}";


$body = json_encode($query);
$headers = [
	'Content-Type: application/json',
    'Content-Length: '.strlen($body),
	'Authorization: Bearer ' . $token,
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://quertium.com/api/v1/apeseg/soat/$placa");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$jsonString = curl_exec ($ch);
curl_close ($ch);
$out = json_decode($jsonString, true);
echo "<pre>";
var_dump($out);

echo"</pre>";

/*echo "NombreCompania : ".$out['NombreCompania']." <br>";
echo "FechaInicio : ". $out['FechaInicio'] ."<br>";
echo "FechaFin : ".$out['FechaFin']." <br>";*/
$nombre =$_POST['nombre'];
$apellidos= $_POST['apellidos'];
$dni = $_POST['dni'];
echo "dni ". $dni." <br>";
echo "nombre ". $nombre." <br>";
echo "apellidos ". "$apellidos"." <br>";
echo "Estado :  ".$out['Estado'] ."<br>";
?>