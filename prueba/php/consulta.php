<?php 

require_once "conexion.php";
$conexion=conexion();

$dni=$_POST['b'];
if (is_numeric($dni) && strlen($dni) == 8) {

  function buscaRepetido($dni,$conexion){
    $sql="SELECT * from conductores 
    where dni='$dni'";
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

  if(buscaRepetido($dni,$conexion)==0){
   ?>  
   <input type="button" href="javascript:;" onclick="realizaProceso($('#dni').val());return false;" value="enviar"/>
   <br/>   
   <?php
   }else{

   ?>
   <button data-toggle="modal" data-target="#infor" class="btn btn-success bt-sm">ver +<i class="fa fa-fw fa-plus"></i></button>
   <?php
    $sql="SELECT * from conductores where dni='$dni'";
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
                <input type="text" name="dni" class="form-control" id="dni" value="<?php echo $dni ?>" readonly>
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
               <input type="text" name="placa" class="form-control" id="placa" placeholder="Placa" value="<?php echo $row['ant_penales'] ?>" readonly>
             </div>
             

             
             <label for="ant_judicial">Antecedentes Judiciales: </label>
             <div class="form-group">
              <input type="text" name="placa" class="form-control" id="placa" placeholder="Placa" value="<?php echo $row['ant_judicial'] ?>" readonly>
            </div>
            


            <label for="ant_policial">Antecedentes Policiales: </label>
            <div class="form-group">
              <input type="text" name="placa" class="form-control" id="placa" placeholder="Placa" value="<?php echo $row['ant_policial'] ?>" readonly>
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


           <!-- <label for="soat">SOAT : </label>
           <div class="form-group">

            <input type="text" name="record_cond" class="form-control" id="record_cond" placeholder="Soat"  value="<?php echo $row['soat'] ?>" required="" readonly>
          </div> -->
          

          <label for="soat">Lista negra : </label>
          <div class="form-group">

            <input type="text" name="record_cond" class="form-control" id="record_cond" placeholder="Soat"  value="<?php echo $bl ?>" required="" readonly>
          </div>



          <div class="form-group">
            <label for="observacion">Observación:</label>
            <textarea class="form-control" rows="4" readonly id="observacion" name="observacion"><?php echo $row['observacion'] ?></textarea>
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
  echo "Introduzca un DNI valido";
}



?>
