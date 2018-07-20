<link rel="stylesheet" href="vistas/assets/node_modules/dropify/dist/css/dropify.min.css">
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Usuarios</h4>

        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Usuarios</li>
                </ol>
               
            </div>
        </div>
    </div>
     <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal" data-target="#modalAgregarUsuario"><i class="fa fa-plus-circle"></i> Crear nuevo </button>
                      <div class="table-responsive m-t-20">
                        <table id="myTable" class="display nowrap table table-hover table-striped table-bordered tablas" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                   <th style="width:10px">#</th>
                                   <th>Nombre</th>
                                   <th>Usuario</th>
                                   <th>Foto</th>
                                   <th>Perfil</th>
                                   <th>Estado</th>
                                   <th>Último login</th>
                                   <th>Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                   <th style="width:10px">#</th>
                                   <th>Nombre</th>
                                   <th>Usuario</th>
                                   <th>Foto</th>
                                   <th>Perfil</th>
                                   <th>Estado</th>
                                   <th>Último login</th>
                                   <th>Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php

                            $item = null;
                            $valor = null;

                            $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

                           foreach ($usuarios as $key => $value){
                             
                              echo ' <tr>
                                      <td>'.($key+1).'</td>
                                      <td>'.$value["nombre"].'</td>
                                      <td>'.$value["usuario"].'</td>';

                                      if($value["foto"] != ""){

                                        echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="40px"></td>';

                                      }else{

                                        echo '<td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>';

                                      }

                                      echo '<td>'.$value["perfil"].'</td>';

                                      if($value["estado"] != 0){

                                        echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';

                                      }else{

                                        echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';


                                      }             

                                      echo '<td>'.$value["ultimo_login"].'</td>
                                      <td>

                                        <div class="btn-group">
                                            
                                          <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>

                                          <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'"><i class="fa fa-times"></i></button>

                                        </div>  

                                      </td>

                                    </tr>';
                            }


                            ?> 
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarUsuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">
       

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#6f42c1; color:white">

          <h4 class="modal-title">Agregar usuario</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">
        <div class="box-body">
            <div class="row">
            <div class="col-6 col-sm-6">

                <!-- ENTRADA PARA EL DNI -->

                 <div class="form-group">
                    <label for="dni">DNI</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon2"><i class="fa fa-id-card"></i></span>
                        </div>
                    <input type="text" class="form-control" name="nuevoDni" placeholder="Ingresar DNI" id="nuevoDni" aria-label="DNI" aria-describedby="basic-addon2" required pattern="[0-9]{8-12}" minlength="8" maxlength="12">
                    </div>
                </div>
               
                <!-- ENTRADA PARA EL NOMBRE -->
                
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon2"><i class="fa fa-user"></i></span>
                        </div>
                    <input type="text" class="form-control" name="nuevoNombre" placeholder="Ingresar nombre" required" aria-label="Nombre" aria-describedby="basic-addon2">
                    </div>
                </div>

                <!-- ENTRADA PARA EL USUARIO -->

                <div class="form-group">
                    <label for="Usuario">Usuario</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i></span>
                        </div>
                    <input type="text" class="form-control" name="nuevoUsuario" placeholder="Ingresar usuario" id="nuevoUsuario" required" aria-label="Usuario" aria-describedby="basic-addon2">
                    </div>
                </div>

            </div>
            <div class="col-6 col-sm-6">

                <!-- ENTRADA PARA LA CONTRASEÑA -->

                <div class="form-group">
                    <label for="Contraseña">Contraseña</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon2"><i class="fa fa-lock"></i></span>
                        </div>
                    <input type="password" class="form-control" name="nuevoPassword" placeholder="Ingresar contraseña" required" aria-label="Contraseña" aria-describedby="basic-addon2">
                    </div>
                </div>

              <!-- ENTRADA PARA EL CORREO -->

                <div class="form-group">
                    <label for="Correo">Correo</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon2"><i class="fa fa-at"></i></span>
                        </div>
                    <input type="text" class="form-control" name="nuevoCorreo" placeholder="Ingresar Correo" required" aria-label="Correo" id="nuevoCorreo" aria-describedby="basic-addon2">
                    </div>
                </div>

               <!-- ENTRADA PARA EL Telefono -->

                <div class="form-group">
                    <label for="Telefono">Telefono</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon2"><i class="fa fa-phone"></i></span>
                        </div>
                    <input type="text" class="form-control" name="nuevoTelefono" placeholder="Ingresar telefono" required" aria-label="Telefono" id="nuevoTelefono" aria-describedby="basic-addon2" data-mask="999999999">
                    </div>
                </div>

                <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

                <!-- <div class="form-group">
                    <label for="perfil">Perfil</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon2"><i class="fa fa-user"></i></span>
                        </div> -->
                    <input type="text" hidden="" class="form-control" required" aria-label="perfil" aria-describedby="basic-addon2" name="nuevoPerfil" value="Operador" id="nuevoPerfil" readonly="">
                   <!--  </div>
                </div> -->

            </div>
            </div>
            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

                <input type="file" id="input-file-now" name="nuevaFoto" class="dropify" />

              <p class="help-block">*Peso máximo de la foto 2MB <br> **No es obligatorio</p>
              </div>

            
        </div>
        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar usuario</button>

        </div>

        <?php

          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR USUARIO
======================================-->

<div id="modalEditarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#6f42c1; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar usuario</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

             <!-- ENTRADA PARA EL NOMBRE -->
                
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon2"><i class="fa fa-user"></i></span>
                        </div>
                    <input type="text" class="form-control" id="editarNombre" name="editarNombre" required" aria-label="Nombre" aria-describedby="basic-addon2">
                    </div>
                </div>

                <!-- ENTRADA PARA EL USUARIO -->

                <div class="form-group">
                    <label for="Usuario">Usuario</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i></span>
                        </div>
                    <input type="text" class="form-control" id="editarUsuario" name="editarUsuario" required" aria-label="Usuario" aria-describedby="basic-addon2" readonly="">
                    </div>
                </div>


            <!-- ENTRADA PARA LA CONTRASEÑA -->

             
            <div class="form-group">
                <label for="Contraseña">Contraseña</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon2"><i class="fa fa-lock"></i></span>
                    </div>
                <input type="password" class="form-control" name="editarPassword" placeholder="Escriba la nueva contraseña" required" aria-label="Contraseña" aria-describedby="basic-addon2">

                <input type="hidden" id="passwordActual" name="passwordActual">

                </div>
                <b><font color ="red" size="1,5">*NO UTILIZAR CARACTERES ESPECIALES</font></b>
            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
               <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon2"><i class="fa fa-lock"></i></span>
                    </div>

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

          $editarUsuario = new ControladorUsuarios();
          $editarUsuario -> ctrEditarUsuario();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario -> ctrBorrarUsuario();

?> 
    
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
