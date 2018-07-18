 <?php

include 'scripts.php';
$a=4;
?>
<button data-toggle="modal" data-target="#modalinfoConductor<?php echo $a ?>" class="btn btn-success bt-sm">ver<i class="fa fa-fw fa-plus"></i></button>

<!--=====================================
MODAL VER+ CONDUCTOR
======================================-->

<div id="modalinfoConductor<?php echo $a ?>" class="modal fade" role="dialog">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Información del conductor</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
        <div class="modal-body">

          <div class="box-body">

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
             
                <div class="row">
                  <div class="col-6 col-sm-4">
                    <div class="form-group">
                      <label for="dni">DNI:</label>
                      <input type="text" name="dni" class="form-control" id="dni" value="<?php echo $dni ?>" readonly>
                    </div>

                    <div class="form-group">
                      <label for="nombre">Nombre: </label>
                      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="<?php echo $value["nombre"] ?>" readonly>
                    </div>

                    <div class="form-group">
                      <label for="apellido">Apellido: </label>
                      <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido" value="<?php echo $value['apellido'] ?>" readonly>
                    </div>

                    <div class="form-group">
                      <label for="placa">Placa: </label>
                      <input type="text" name="placa" class="form-control" id="placa" placeholder="Placa" value="<?php echo $value['placa'] ?>" readonly>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4">

                    <label for="ant_penales">Antecedentes Penales: </label>
                    <div class="form-group">
                     <input type="text" name="placa" class="form-control" id="placa" placeholder="Antecedentes Penales" value="<?php echo $value['ant_penales'] ?>" readonly>
                   </div>



                   <label for="ant_judicial">Antecedentes Judiciales: </label>
                   <div class="form-group">
                    <input type="text" name="placa" class="form-control" id="placa" placeholder="Antecedentes Judiciales" value="<?php echo $value['ant_judicial'] ?>" readonly>
                  </div>



                  <label for="ant_policial">Antecedentes Policiales: </label>
                  <div class="form-group">
                    <input type="text" name="placa" class="form-control" id="placa" placeholder="Antecedentes Policiales" value="<?php echo $value['ant_policial'] ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label for="record_cond">Record del conductor: </label>
                    <input type="text" name="record_cond" class="form-control" id="record_cond" placeholder="Record del conductor"  value="<?php echo $value['record_cond'] ?>" required="" readonly>
                  </div> 
                </div>

                <div class="col-6 col-sm-4">

                  <label for="resultado">Resultado: </label>
                  <div class="form-group">
                   <input type="text" name="record_cond" class="form-control" id="record_cond" placeholder="Record del conductor"  value="<?php echo $value['resultado'] ?>" required="" readonly>
                 </div> 


                 <label for="soat">SOAT : </label>
                 <div class="form-group">

                  <input type="text" name="record_cond" class="form-control" id="record_cond" placeholder="Soat"  value="<?php echo $value['soat'] ?>" required="" readonly>
                </div>


                <label for="soat">Lista negra : </label>
                <div class="form-group">

                  <input type="text" name="record_cond" class="form-control" id="record_cond" placeholder="Soat"  value="<?php echo $bl ?>" required="" readonly>
                </div>



                <div class="form-group">
                  <label for="observacion">Observación:</label>
                  <textarea class="form-control" rows="2" readonly id="observacion" name="observacion"><?php echo $value['observacion'] ?></textarea>
                </div>

              </div>
            </div>
          
        </div>
        

        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          hola
        </div>
      </div>


    </div>
  </div>

<div class="modal-footer">
<button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
</div>

</form>
</div>


</div>