<?php
session_start();
require 'conexion.php';
require 'scripts.php';
if(isset($_SESSION['user'])){
	?>
	<html lang="es">
	<head>
		<script>
			$(document).ready(function(){
				$('#mitabla').DataTable({
					
					"responsive": {
						"details": {
							"type": 'column',
							"target": 'tr'
						}	
					},
					"columnDefs": [ {
						"className": 'control',
						"orderable": false,
						"targets":   0,
						
					},
					{ 'responsivePriority': 1, 'targets': 15 },
					{ 'responsivePriority': 1, 'targets': 3 },
					{ 'responsivePriority': 1, 'targets': 4 },
					{ 'responsivePriority': 2, 'targets': 14 },
					{ 'responsivePriority': 2, 'targets': -6 },

					],
					"order": [[1, "desc"]],
					"language": {

						"sProcessing":     "Procesando...",
						"sLengthMenu":     "Mostrar _MENU_ registros",
						"sZeroRecords":    "No se encontraron resultados",
						"sEmptyTable":     "Ningún dato disponible en esta tabla",
						"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
						"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
						"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
						"sInfoPostFix":    "",
						"sSearch":         "Buscar:",
						"sUrl":            "",
						"sInfoThousands":  ",",
						"sLoadingRecords": "Cargando...",
						"oPaginate": {
							"sFirst":    "Primero",
							"sLast":     "Último",
							"sNext":     "Siguiente",
							"sPrevious": "Anterior"
						},
						"oAria": {
							"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
							"sSortDescending": ": Activar para ordenar la columna de manera descendente"
						}

					},

					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "server_process.php"
				});	
			});
			
		</script>
		
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h2 style="text-align:center"></h2>
			</div>
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						ARHU INTERNACIONAL
					</div>
					<div class="card-body">
						<span class="btn btn-outline-primary" data-toggle="modal" data-target="#modalAgregarConductor">
							Agregar nuevo <span class="fa fa-plus-circle"></span>
						</span>
						<a href="php/salir.php" class="btn btn-outline-warning" align="right">Cerrar Sesión <span class="fa fa-sign-out-alt"></span></a>
						<hr>

						<div class="row table-responsive">
							<table class="table table-bordered table-striped responsive" id="mitabla">
								<thead>
									<tr>
										<th></th>
										<th>ID</th>
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
										<th>OBSERVACION</th>
										<th>FORMATO</th>
										<th>MODIFICAR</th>
										<th>ELIMINAR</th>

									</tr>
								</thead>
								
								<tbody>
									
								</tbody>
							</table>
						</div>
					</div>
					<?php require 'footer.php'; ?>

<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarConductor" class="modal fade" role="dialog">
	
	<div class="modal-dialog">

		<div class="modal-content">

			<form role="form" method="post" action="nuevo_perso2.php" enctype="multipart/form-data">

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

        		<div class="form-group">
        			
        			<div class="input-group">
        				
        				<span class="input-group-addon"><i class="fa fa-id-card"></i></span> 

        				<input type="text" class="form-control input-lg" name="nuevoDni" placeholder="Ingresar DNI" id="nuevoDni" required>

        			</div>
        		</div>

        		<!-- ENTRADA PARA EL NOMBRE -->

        		<div class="form-group">
        			
        			<div class="input-group">
        				
        				<span class="input-group-addon"><i class="fa fa-user"></i></span> 

        				<input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" id="nuevoNombre" required>

        			</div>

        		</div>

        		<!-- ENTRADA PARA EL APELLIDO -->

        		<div class="form-group">
        			
        			<div class="input-group">
        				
        				<span class="input-group-addon"><i class="fa fa-user"></i></span> 

        				<input type="text" class="form-control input-lg" name="nuevoApellido" placeholder="Ingresar apellido" id="nuevoApellido" required>

        			</div>
        		</div>

        		<!-- ENTRADA PARA EL PLACA -->

        		<div class="form-group">
        			
        			<div class="input-group">
        				
        				<span class="input-group-addon"><i class="fa fa-id-card"></i></span> 

        				<input type="text" class="form-control input-lg" name="nuevoPlaca" placeholder="Ingresar placa" id="nuevoPlaca" required>

        			</div>

        			
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

    </form>

</div>

</div>

</div>

<!-- Modal -->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
			</div>
			
			<div class="modal-body">
				¿Desea eliminar este registro?
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger btn-ok">Delete</a>
			</div>
		</div>
	</div>
</div>

<script>
	$('#confirm-delete').on('show.bs.modal', function(e) {
		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
		
		$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
	});
</script>	

</body>
</html>	
<?php
} else {
	header("location:index.php");
}
?>