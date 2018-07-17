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
           <th>ANTECEDENTES PENALES</th>
           <th>ANTECEDENTES JUDICIAL</th>
           <th>ANTECEDENTES POLICIAL</th>
           <th>RECORD CONDUCTOR</th>
           <th>RESULTADO</th>
           <th>SOAT</th>
           <th>FORMATO</th>
           <th>OBSERVACION</th>

         </tr> 

        </thead>

        <tbody>

        <?php

        $item = null;
        $valor = null;

        $usuarios = ControladorConductor::ctrMostrarConductor($item, $valor);

       foreach ($usuarios as $key => $value){
         
          echo ' <tr>
                  <td>'.$value["fecha"].'</td>';

                  if($value["observacion"] != ""){

                     echo '<td><label class="label label-warning">'.$value["dni"].'</label></td>';

                  }else{

                    echo '<td>'.$value["dni"].'</td>';

                  }
                 

          echo '  <td>'.$value["nombre"].'</td>
                  <td>'.$value["apellido"].'</td>
                  <td>'.$value["placa"].'</td>
                  <td>'.$value["ant_penales"].'</td>
                  <td>'.$value["ant_judicial"].'</td>
                  <td>'.$value["ant_policial"].'</td>
                  <td>'.$value["record_cond"].'</td>';

                  if($value["resultado"] == "APTO"){

                     echo '<td><label class="label label-success">'.$value["resultado"].'</label></td>';

                  }else{

                    echo '<td><label class="label label-danger">'.$value["resultado"].'</label></td>';

                  }

                  echo '<td>'.$value["soat"].'</td>';

                  if($value["validarpdf"] == "1"){
                    
                    echo '<td>'.$value['pdf'].'</td>';

                  }else{

                    echo '<td><img src="vistas/img/sist/pdfoff.png" onClick="alerta()"></td>';

                  }  
                  
                  if($value["observacion"] == " "){

                    echo '<td>'.$value["observacion"].'</td>'; 

                  }else{

                    echo '<td><label class="label label-warning">'.$value["observacion"].'</label></td>';

                  }       

                  /* echo  '</td>
                  <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["cont"].'" data-toggle="modal" data-target="#modalEditarConductor"><i class="fa fa-pencil"></i></button>
                      
                    </div>  

                  </td>*/

               echo '</tr>';
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

<!--=====================================
MODAL EDITAR USUARIO
======================================-->

<div id="modalEditarConductor" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar usuario</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL DNI -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-id-card"></i></span> 

                <input type="text" class="form-control input-lg" id="editarDni" name="editarNombre" value="" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value="" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" value="" readonly>

              </div>

            </div>

            <!-- ENTRADA PARA LA APELLIDO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Escriba la nueva contraseña">

                <input type="hidden" id="passwordActual" name="passwordActual">

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="editarPerfil">
                  
                  <option value="" id="editarPerfil"></option>

                  <option value="Administrador">Administrador</option>

                  <option value="Especial">Especial</option>

                  <option value="Vendedor">Vendedor</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="editarFoto">

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

              <input type="hidden" name="fotoActual" id="fotoActual">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar usuario</button>

        </div>

     <?php

         // $editarUsuario = new ControladorConductor();
          //$editarUsuario -> ctrEditarConductor();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

 // $borrarUsuario = new ControladorConductor();
  //$borrarUsuario -> ctrBorrarConductor();

?> 


