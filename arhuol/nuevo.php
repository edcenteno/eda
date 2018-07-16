<html lang="es">
	<head>
		<title>ARHU Internacional</title>
		<link rel="shortcut icon" href="img/favicon.ico" type="image/ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div style="margin: auto; width: 500px; border-collapse: separate; border-spacing: 10px 5px;">

				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="nuevo_perso2.php" autocomplete="off" style="border-collapse: separate; border-spacing: 10px 5px;">
				<div class="form-group">
	<label for="fecha">FECHA DE REGISTRO:</label>
      <input type="text" name="fecha" class="form-control" id="fecha" value="<?php echo date('d-m-Y') ?>" readonly> 
  </div>
      <div class="form-group">
      <label for="dni">DNI:</label>
      <input type="text" name="dni" class="form-control" id="dni">
  </div>

  <div class="form-group">
      <label for="nombre">Nombre: </label>
      <input type="text" name="nombre" class="form-control" id="nombre">
  </div>

   <div class="form-group">
      <label for="apellido">Apellido: </label>
      <input type="text" name="apellido" class="form-control" id="apellido">
  </div>  

  <div class="form-group">
      <label for="placa">Placa: </label>
      <input type="text" name="placa" class="form-control" id="placa">
  </div>
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>