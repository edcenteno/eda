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

echo "dni ". $dni." <br>";
echo "nombre ". $nombre." <br>";
echo "apellidos ". "$apellidos"." <br>";
echo "Estado :  ".$out['Estado'] ."<br>";

?>
<input type="text" hidden name="nombre" id="nombre" value="<?php echo $nombre ?>"/> 
<input type="text" hidden name="apellidos" id="apellidos" value="<?php echo $apellidos?>"/>
<input type="text" hidden name="dni" id="dni" value="<?php echo $dni?>"/>
<input type="text" hidden name="estado" id="estado" value="<?php echo $estado?>"/>
<input type="text" hidden name="placa" id="placa" value="<?php echo $placa?>"/>
<span class="btn btn-primary" id="registrarNuevo">Registrar</span>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			cadena="nombre=" + $('#nombre').val() +
					"&apellidos=" + $('#apellidos').val() +
					"&dni=" + $('#dni').val() +
					"&placa=" + $('#placa').val() +
					"&estado=" + $('#estado').val();

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.error("Este usuario ya existe, prueba con otro");
							}
							else if(r==1){
								//$('#frmRegistro')[0].reset();
								alertify.success("Agregado con exito");
								//setTimeout.reload(10000);
								//setTimeout("location.href='https://miwebaqui.com/miwebaquiuser'", 1000);
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
</script>
<?php
}else{

   ?>
   Vehiculo ya registrado
   <button data-toggle="modal" data-target="#infor" class="btn btn-success bt-sm">ver +<i class="fa fa-fw fa-plus"></i></button>
   <?php
    $sql="SELECT * from conductores where placa='$placa'";
    $result=mysqli_query($conexion,$sql);
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
      $rows[] = $row;
  }
  foreach($rows as $row) {
  }
  if ($row['blacklist'] == 0) {
    $bl="No se encuentra en lista negra";
  } else {
    $bl="Si se encuentra en lista negra";
  }

  ?>
  <!-- Modal -->
  <div class="modal fade" id="infor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
     <div class="modal-header" style="background:#3c8dbc; color:white">
      <h4 class="modal-title">Información del Conductor</h4>
    </div>
    <div class="modal-content">
      <!-- Contenido -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Información del Conductor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Información del Vehiculo</a>
        </li>
      </ul>
      <div class="tab-content">
       <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <form class="form-horizontal" method="POST" action="modif_perso2.php" autocomplete="off" style="border-collapse: separate; border-spacing: 10px 5px;">
          <div class="row">
            <div class="col-6 col-sm-4">
              <div class="form-group">
                <label for="dni">DNI:</label>
                <input type="text" name="dni" class="form-control" id="dni" value="<?php echo $row['dni']?>" readonly>
              </div>

              <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>" readonly>
              </div>

              <div class="form-group">
                <label for="apellido">Apellido: </label>
                <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido" value="<?php echo $row['apellido'] ?>" readonly>
              </div>

              <div class="form-group">
                <label for="placa">Placa: </label>
                <input type="text" name="placa" class="form-control" id="placa" placeholder="Placa" value="<?php echo $row['placa'] ?>" readonly>
              </div>
            </div>
            <div class="col-6 col-sm-4">

              <label for="ant_penales">Antecedentes Penales: </label>
              <div class="form-group">
               <input type="text" name="placa" class="form-control" id="placa" placeholder="Antecedentes Penales" value="<?php echo $row['ant_penales'] ?>" readonly>
             </div>
             

             
             <label for="ant_judicial">Antecedentes Judiciales: </label>
             <div class="form-group">
              <input type="text" name="placa" class="form-control" id="placa" placeholder="Antecedentes Judiciales" value="<?php echo $row['ant_judicial'] ?>" readonly>
            </div>
            


            <label for="ant_policial">Antecedentes Policiales: </label>
            <div class="form-group">
              <input type="text" name="placa" class="form-control" id="placa" placeholder="Antecedentes Policiales" value="<?php echo $row['ant_policial'] ?>" readonly>
            </div>
            
            <div class="form-group">
              <label for="record_cond">Record del conductor: </label>
              <input type="text" name="record_cond" class="form-control" id="record_cond" placeholder="Record del conductor"  value="<?php echo $row['record_cond'] ?>" required="" readonly>
            </div> 
          </div>

          <div class="col-6 col-sm-4">

            <label for="resultado">Resultado: </label>
            <div class="form-group">
             <input type="text" name="record_cond" class="form-control" id="record_cond" placeholder="Record del conductor"  value="<?php echo $row['resultado'] ?>" required="" readonly>
           </div> 


           <label for="soat">SOAT : </label>
           <div class="form-group">

            <input type="text" name="record_cond" class="form-control" id="record_cond" placeholder="Soat"  value="<?php echo $row['soat'] ?>" required="" readonly>
          </div>
          

          <label for="soat">Lista negra : </label>
          <div class="form-group">

            <input type="text" name="record_cond" class="form-control" id="record_cond" placeholder="Soat"  value="<?php echo $bl ?>" required="" readonly>
          </div>



          <div class="form-group">
            <label for="observacion">Observación:</label>
            <textarea class="form-control" rows="2" readonly id="observacion" name="observacion"><?php echo $row['observacion'] ?></textarea>
          </div>

        </div>
      </div>
    </form>
  </div>

    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      hola
    </div>
    
    </div>
    </div>
    </div>
<?php
}

} else {
  echo "Introduzca una placa valida";
}



?>
