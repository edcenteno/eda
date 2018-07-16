<?php
error_reporting(0);
$dni=$_POST['dni'];
//echo "$ruc";

//jhon$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.MTA2MQ.mNioS0vL0ckba0lPV955HvekjFHzvIcqEVqy1_kBerM';
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.MTAzNA.AmJhTMIv9Bzd9h4KjWijho4Wf0apnT4IoqasWM0dLLE';//token prestado
$query = "
query {
	persona(dni:\"$dni\") {
		pri_nom
		seg_nom
        ap_pat
        ap_mat
    }
}";

$body = json_encode($query);
$headers = [
	'Content-Type: application/json',
    'Content-Length: '.strlen($body),
	'Authorization: Bearer ' . $token,
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://quertium.com/api/v1/reniec/dni");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$jsonString = curl_exec ($ch);
curl_close ($ch);
$out = json_decode($jsonString);
$res = $out->data->persona;


/*echo "pri_nom : $res->pri_nom <br>";
echo "seg_nom :  $res->seg_nom <br>";
echo "ap_pat : $res->ap_pat <br>";
echo "ap_mat :  $res->ap_mat <br>";*/
if ($res) {?>

<input type="text" name="nombre" id="nombre" value="<?php echo $res->pri_nom ?>"/> 
<input type="text" name="apellidos" id="apellidos" value="<?php echo $res->ap_pat ." ".  $res->ap_mat?>"/>
<input type="text" name="dni" id="dni" value="<?php echo $dni?>"/>
<!-- <span class="btn btn-primary" id="registrarNuevo">Registrar</span> -->


<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			cadena="nombre=" + $('#nombre').val() +
					"&apellidos=" + $('#apellidos').val() +
					"&dni=" + $('#dni').val();

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.error("Este usuario ya existe, prueba con otro");
							}
							else if(r==1){
								// $('#frmRegistro')[0].reset();
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
</script>
 
<script>
function realizaProcesoplaca(){
        cadena="placa=" + $('#placa').val() +
				"&dni=" + $('#dni').val() +
				"&nombre=" + $('#nombre').val() + 
				"&apellidos=" + $('#apellidos').val();
        $.ajax({
                data:  cadena, //datos que se envian a traves de ajax
                url:   'placa.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#resultado").html(response);
                }
        });
}
</script>
</head>
<body>
 Introduce placa
<input type="text" name="caja_texto" id="placa" value="0"/> 

Realiza info
<input type="button" href="javascript:;" onclick="realizaProcesoplaca();return false;" value="enviar2" pattern="[A-Z0-9]{5,40}" title="Letras y números. Tamaño mínimo: 5. Tamaño máximo: 40"/>
<br/><br/><br/>

Resultado: <span id="resultado">
			 <br> 
<?php
} else {
	?>
	Temporalmente el sistema no esta prestando servicios
	<?php
}

?>

