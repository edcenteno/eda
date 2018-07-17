<?php
	namespace DatosPeru;
	$dni=$_POST['dni'];
	class Peru
	{
		function __construct()
		{
			$this->reniec = new \Reniec\Reniec(); 
			$this->essalud = new \EsSalud\EsSalud();
			$this->mintra = new \MinTra\mintra();
		}
		function search( $dni )
		{
			$response = $this->reniec->search( $dni );
			if($response->success == true)
			{
				$rpt = (object)array(
					"success" 		=> true,
					"source" 		=> "reniec",
					"result" 		=> $response->result
				);
				return $rpt;
			}
			
			$response = $this->essalud->check( $dni );
			if($response->success == true)
			{
				$rpt = (object)array(
					"success" 		=> true,
					"source" 		=> "essalud",
					"result" 		=> $response->result
				);
				return $rpt;
			}
						
			$response = $this->mintra->check( $dni );
			if( $response->success == true )
			{
				$rpt = (object)array(
					"success" 		=> true,
					"source" 		=> "mintra",
					"result" 		=> $response->result
				);
				return $rpt;
			}
			
			$rpt = (object)array(
				"success" 		=> false,
				"msg" 			=> "No se encontraron datos"
			);
			return $rpt;
		}
	}
	
	// MODO DE USO
	/*  */
	require_once( __DIR__ . "/src/autoload.php" );
	//require_once( __DIR__ . "/vendor/autoload.php" ); // si se usa composer
	$test = new \DatosPeru\Peru();
	//echo"<pre>";
	//print_r($test->search("$dni"));
	$out=$test->search("$dni");
	$a = json_encode($out);
	//echo "$a";
	//echo json_decode($out, true);
	//echo $out->result[1];
	/*
	print_r($out);
		echo $out[0];	*/
	?>

<input type="text" name="nombre" id="nombre" value="<?php  ?>"/> 
<input type="text" name="apellidos" id="apellidos" value="<?php ?>"/>
<input type="text" name="dni" id="dni" value="<?php echo $dni?>"/>
<!-- <span class="btn btn-primary" id="registrarNuevo">Registrar</span> -->


<script type="text/javascript">
	var x =<?php echo $a ?>;

	$(document).ready(function(){
		$('#nombre').val(x.result.Nombres);
		$('#apellidos').val(x.result.apellidos);
		$('#dni').val(x.result.DNI);
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
if ($out) {
	?>
<?php
} else {
	?>
	Temporalmente el sistema no esta prestando servicios
	<?php
}

?>