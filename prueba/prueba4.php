<?php
$ruc=$_POST['ruc'];
//echo "$ruc";

$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.MTA2MQ.mNioS0vL0ckba0lPV955HvekjFHzvIcqEVqy1_kBerM';
$query = "
query {
	empresa(ruc:\"$ruc\") {
		ruc
		nombre
        direccion
    }
}";

$body = json_encode($query);
$headers = [
	'Content-Type: application/json',
    'Content-Length: '.strlen($body),
	'Authorization: Bearer ' . $token,
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://quertium.com/api/v1/sunat/ruc");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$jsonString = curl_exec ($ch);
curl_close ($ch);
$out = json_decode($jsonString);
$res = $out->data->empresa;

echo "RUC : $res->ruc <br>";
echo "Nombre : $res->nombre <br>";
echo "Direccion :  $res->direccion <br>";
?>
