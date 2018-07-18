<?php
include 'php/conexion.php';
$placa=$_POST['placa'];
$conexion=conexion();
//$placa="ABC123";
if (strlen($placa) == 6) {

  function buscaRepetido($placa,$conexion){
    $sql="SELECT * from conductores where placa='$placa'";
    $result=mysqli_query($conexion,$sql);
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
      $rows[] = $row;
    }

    if(mysqli_num_rows($result) > 0){
      return 1;
    }else{
      return 0;
    }
  }

  if(buscaRepetido($placa,$conexion)==0){
    // Modo de Uso
  require_once("crv/src/autoload.php");
  
  $test = new \Pit\Pit();
  $out=$test->check( "$placa" ); // Sin Requisitoria

  $crv = json_encode($out);
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
/*echo "<pre>";
var_dump($out);

echo"</pre>";*/

/*echo "NombreCompania : ".$out['NombreCompania']." <br>";
echo "FechaInicio : ". $out['FechaInicio'] ."<br>";
echo "FechaFin : ".$out['FechaFin']." <br>";*/
$nombre =$_POST['nombre'];
$apellidos= $_POST['apellidos'];
$dni = $_POST['dni'];
$estado = $out['Estado'];

if ($out == NULL) {
  ?>
  <script type="text/javascript">
    swal({

      type: "warning",
      title: "¡La placa a no existe!",
      showConfirmButton: true,
      confirmButtonText: "Cerrar"

      
    });
    </script>

    <!-- ENTRADA PARA EL NOMBRE -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nombre" id="nombre" value="<?php echo $nombre ?>"  readonly="">

              </div>

            </div>

            <!-- ENTRADA PARA EL APELLIDO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="apellidos" id="apellidos" value="<?php echo $apellidos ?>" readonly="">

              </div>
            </div>

              <!-- ENTRADA PARA EL PLACA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-car"></i></span> 

                <input type="text" class="form-control input-lg" id="placa" name="caja_texto" onblur="aMayusculas(this.value,this.id)" pattern="[A-Z0-9]{6}" title="Letras y números Solo mayosculas" minlength="6" maxlength="6" placeholder="Placa ABB777" required >

                <span class="input-group-addon"><i class="fa fa-search btn btn-primary" href="javascript:;" onclick="realizaProcesoplaca($('#dni').val());return false;"></i></span>

              </div>
    <?php
} else {
?>
   <!-- ENTRADA PARA EL NOMBRE -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nombre" id="nombre" value="<?php echo $nombre ?>"  readonly="">

              </div>

            </div>

            <!-- ENTRADA PARA EL APELLIDO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="apellidos" id="apellidos" value="<?php echo $apellidos ?>" readonly="">

              </div>
            </div>

              <!-- ENTRADA PARA EL PLACA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-car"></i></span> 

                <input type="text" class="form-control input-lg" name="placa" id="placa" value="<?php echo $placa?>" readonly>

              </div>
            </div>

<input type="text" hidden name="nombre" id="nombre" value="<?php echo $nombre ?>"/> 
<input type="text" hidden name="apellidos" id="apellidos" value="<?php echo $apellidos?>"/>
<input type="text" hidden name="dni" id="dni" value="<?php echo $dni?>"/>
<input type="text" hidden name="estado" id="estado" value="<?php echo $estado?>"/>
<input type="text" hidden name="crv" id="crv" value=""/>
<input type="text" hidden name="placa" id="placa" value="<?php echo $placa?>"/>
<input type="text" hidden name="rep" id="rep" value="0"/>

<span class="btn btn-primary" id="registrarNuevo">Registrar</span>

<script type="text/javascript">
	var crvjs =<?php echo $crv ?>;

  $(document).ready(function(){
    $('#crv').val(crvjs.message);
		$('#registrarNuevo').click(function(){

			cadena="nombre=" + $('#nombre').val() +
					"&apellidos=" + $('#apellidos').val() +
					"&dni=" + $('#dni').val() +
          "&rep=" + $('#rep').val() +
          "&crv=" + $('#crv').val() +
					"&placa=" + $('#placa').val() +
					"&estado=" + $('#estado').val();

					$.ajax({
						type:"POST",
						url:"../admcbfmodf/vistas/modulos/conductores/php/registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.error("Este usuario ya existe, prueba con otro");
							}
							else if(r==1){
                swal({
                    
                    type: "success",
                    title: "¡El usuario ha sido guardado correctamente!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"

                  }).then(function(result){

                    if(result.value){
                    
                      window.location = "conductores";

                    }

                  });
								//$('#frmRegistro')[0].reset();
								//alertify.success("Agregado con exito");
								//setTimeout.reload(10000);
								//setTimeout("location.href='https://miwebaqui.com/miwebaquiuser'", 1000);
							}else{
                swal({

                    type: "error",
                    title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"

                  }).then(function(result){

                    if(result.value){
                    
                      window.location = "conductores";

                    }

                  });
								//alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
</script>
<?php
}
}else{
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
/*echo "<pre>";
var_dump($out);

echo"</pre>";*/

/*echo "NombreCompania : ".$out['NombreCompania']." <br>";
echo "FechaInicio : ". $out['FechaInicio'] ."<br>";
echo "FechaFin : ".$out['FechaFin']." <br>";*/
$nombre =$_POST['nombre'];
$apellidos= $_POST['apellidos'];
$dni = $_POST['dni'];
$estado = $out['Estado'];

?>

   <!-- ENTRADA PARA EL NOMBRE -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nombre" id="nombre" value="<?php echo $nombre ?>"  readonly="">

              </div>

            </div>

            <!-- ENTRADA PARA EL APELLIDO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="apellidos" id="apellidos" value="<?php echo $apellidos ?>" readonly="">

              </div>
            </div>

              <!-- ENTRADA PARA EL PLACA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-car"></i></span> 

                <input type="text" class="form-control input-lg" name="placa" id="placa" value="<?php echo $placa?>">

              </div>
            </div>

            <!-- ENTRADA PARA EL SOAT -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-car"></i></span> 

                <input type="text" class="form-control input-lg" name="estado" id="estado" value="<?php echo $estado?>" >

              </div>
            </div>

<input type="text" hidden name="nombre" id="nombre" value="<?php echo $nombre ?>"/> 
<input type="text" hidden name="apellidos" id="apellidos" value="<?php echo $apellidos?>"/>
<input type="text" hidden name="dni" id="dni" value="<?php echo $dni?>"/>
<input type="text" hidden name="estado" id="estado" value="<?php echo $estado?>"/>
<input type="text" hidden name="crv" id="crv" value=""/>
<input type="text" hidden name="placa" id="placa" value="<?php echo $placa?>"/>
<input type="text" hidden name="rep" id="rep" value="0"/>

<span class="btn btn-primary" id="registrarNuevo">Registrar</span>

<script type="text/javascript">
  var crvjs =<?php echo $crv ?>;

  $(document).ready(function(){
    $('#crv').val(crvjs.message);
    $('#registrarNuevo').click(function(){

      cadena="nombre=" + $('#nombre').val() +
          "&apellidos=" + $('#apellidos').val() +
          "&dni=" + $('#dni').val() +
          "&rep=" + $('#rep').val() +
          "&crv=" + $('#crv').val() +
          "&placa=" + $('#placa').val() +
          "&estado=" + $('#estado').val();
          
          $.ajax({
            type:"POST",
            url:"../admcbfmodf/vistas/modulos/conductores/php/registro.php",
            data:cadena,
            success:function(r){

              if(r==2){
                alertify.error("Este usuario ya existe, prueba con otro");
              }
              else if(r==1){
                swal({
                    
                    type: "success",
                    title: "¡El usuario ha sido guardado correctamente!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"

                  }).then(function(result){

                    if(result.value){
                    
                      window.location = "conductores";

                    }

                  });
                //$('#frmRegistro')[0].reset();
                //alertify.success("Agregado con exito");
                //setTimeout.reload(10000);
                //setTimeout("location.href='https://miwebaqui.com/miwebaquiuser'", 1000);
              }else{
                swal({

                    type: "error",
                    title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"

                  }).then(function(result){

                    if(result.value){
                    
                      window.location = "conductores";

                    }

                  });
                //alertify.error("Fallo al agregar");
              }
            }
          });
    });
  });
</script>
     
<?php
}

} else{ ?>
  <script type="text/javascript">
    swal({

      type: "error",
      title: "¡Introduzca una placa valida!",
      showConfirmButton: true,
      confirmButtonText: "Cerrar"

      
    });
  </script>
                  <?php
}



?>
