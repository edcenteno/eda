</style>
<script type="text/javascript">
  function alerta(){
    alert("Proximamente estara habilitado!!");

  }
</script>
<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Administrar conductores

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar conductores</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarConductor">

          Agregar conductor

        </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

        <thead>

         <tr>

           <th>FECHA DE REGISTRO</th>
           <th>DNI</th>
           <th>NOMBRE</th>
           <th>APELLIDO</th>
           <th>PLACA</th>
           <!-- <th>ANTECEDENTES PENALES</th>
           <th>ANTECEDENTES JUDICIAL</th>
           <th>ANTECEDENTES POLICIAL</th> -->
           <th>VER MAS</th>
           <!-- <th>RECORD CONDUCTOR</th>
           <th>RESULTADO</th>
           <th>SOAT</th> -->
           <th>FORMATO</th>
           <!-- <th>OBSERVACION</th> -->

         </tr> 

       </thead>

       <tbody>

        <?php

        $item = null;
        $valor = null;

        $usuarios = ControladorConductor::ctrMostrarConductor($item, $valor);
        $a=0;
        foreach ($usuarios as $key => $value){
         $a++;
         $dni= $value["dni"]; 
         echo ' <tr>
         <td>'.$value["fecha"].'</td>';

         if($value["observacion"] != ""){

           echo '<td><label class="label label-warning">'.$value["dni"].'</label></td>';

         }else{

          echo '<td>'.$dni.'</td>';

        }


        echo '  <td>'.$value["nombre"].'</td>
        <td>'.$value["apellido"].'</td>
        <td>'.$value["placa"].'</td>';
         /* echo'   <td>'.$value["ant_penales"].'</td>
                  <td>'.$value["ant_judicial"].'</td>
                  <td>'.$value["ant_policial"].'</td>
                  <td>'.$value["record_cond"].'</td>*/
                  echo '   <td>

                  <div class="btn-group">

                  <button data-toggle="modal" data-target="#modalinfoConductor'.$a.'" class="btn btn-success bt-sm">ver<i class="fa fa-fw fa-plus"></i></button>
                  </div>  

                  </td>

                  ';

                  if($value["resultado"] == "APTO"){

                  //   echo '<td><label class="label label-success">'.$value["resultado"].'</label></td>';

                  }else{

                //    echo '<td><label class="label label-danger">'.$value["resultado"].'</label></td>';

                  }

                 // echo '<td>'.$value["soat"].'</td>';

                  if($value["validarpdf"] == "1"){

                    echo '<td>'.$value['pdf'].'</td>';

                  }else{

                    echo '<td><img src="vistas/img/sist/pdfoff.png" onClick="alerta()"></td>';

                  }  
                  
                 /* if($value["observacion"] == " "){

                    echo '<td>'.$value["observacion"].'</td>'; 

                  }else{

                    echo '<td><label class="label label-warning">'.$value["observacion"].'</label></td>';

                  }      */ 

                  /* echo  '</td>
                  <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["cont"].'" data-toggle="modal" data-target="#modalEditarConductor"><i class="fa fa-pencil"></i></button>
                      
                    </div>  

                    </td>*/

                    echo '</tr>';

                    if ($value['blacklist'] == 0) {
                      $bl="No se encuentra en lista negra";
                    } else {
                      $bl="Si se encuentra en lista negra";
                    }
                    ?>
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
    <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
  </div>

</form>
</div>


</div>

<?php
}


?> 

</tbody>

</table>

</div>

</div>

</section>

</div>

<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarConductor" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Conductor</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL DNI -->

            <?php
            include 'conductores/reniec.php';
            ?>
          </div>
        </div>




      </form>

    </div>

  </div>

</div>



<?php

 // $borrarUsuario = new ControladorConductor();
  //$borrarUsuario -> ctrBorrarConductor();

?> 


