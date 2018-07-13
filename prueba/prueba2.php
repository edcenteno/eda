<?php

// incluir el autoloader de vendor
  require 'vendor/autoload.php';
  $dni=	$_POST['dni'];
  //$dni =(int) $dni;
  //echo $dni;
  //crea un objeto de la clase DNI
  $reniecDni = new Tecactus\Reniec\DNI('vnzKgHIVzV9R0PNSxqNs75pBPUdzkmKEUGVE8Bcd');
 // echo "<pre>";
 $a=($reniecDni->get("$dni"));

  // para devolver el resultado como un array pasar 'true' como segundo argumento.
// print_r($reniecDni->get('47602648', true));

$data=json_encode($a);
$decode=json_decode($data, true);
?>
			<input type="text" name="nombre" id="nombre" value="<?php echo $decode['nombres']?>"/> 
			<input type="text" name="apellidomat" id="apellidomat" value="<?php echo $decode['apellido_materno']?>"/> 
			<input type="text" name="apellidopat" id="apellidopat" value="<?php echo $decode['apellido_paterno']?>"/>
			<input type="text" name="dni" id="dni" value="<?php echo $decode['dni']?>"/>
				<span class="btn btn-primary" id="registrarNuevo">Registrar</span>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			cadena="nombre=" + $('#nombre').val() +
					"&apellidomat=" + $('#apellidomat').val() +
					"&apellidopat=" + $('#apellidopat').val() + 
					"&dni=" + $('#dni').val();

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.error("Este usuario ya existe, prueba con otro :)");
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