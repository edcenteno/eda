<?php
require 'conexion.php';
require 'scripts.php';


$id = $_GET['id'];

$sql = "SELECT * FROM conductores WHERE cont = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

?>
<html lang="es">
<head>
  <title>ARHU Internacional</title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/ico" />
</head>
<?php
$dni=$row['dni'];
$pdf=$row['pdf'];
$blacklist=$row['blacklist'];
/*var_dump($pdf);*/

?>
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
          

         <form class="form-horizontal" method="POST" action="modif_perso2.php" autocomplete="off" style="border-collapse: separate; border-spacing: 10px 5px;">
           <input type="hidden" name="cont"  value="<?php echo $_GET['id']?>">
           <input type="hidden" name="pdf"   value="<?php echo $pdf ?>">
           
           <div class="row">
            <div class="col-6 col-sm-4">

             <div class="form-group">
              <label for="dni">DNI:</label>
              <input type="text" name="dni" class="form-control" id="dni" 
              value="<?php echo $dni ?>">
            </div>

            <div class="form-group">
              <label for="nombre">Nombre: </label>
              <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>">
            </div>

            <div class="form-group">
              <label for="apellido">Apellido: </label>
              <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido" value="<?php echo $row['apellido'] ?>">
            </div>

            <div class="form-group">
              <label for="placa">Placa: </label>
              <input type="text" name="placa" class="form-control" id="placa" placeholder="Placa" value="<?php echo $row['placa'] ?>">
            </div>
          </div> 
          <div class="col-6 col-sm-4">
            <div class="form-group">
              <label for="ant_penales">Antecedentes Penales: </label>
              <div class="form-group">
                <select class="form-control" id="sel1" name ="ant_penales">
                  <option><?php echo $row['ant_penales'] ?></option>
                  <option>POSITIVO</option>
                  <option>NEGATIVO</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="ant_judicial">Antecedentes Judiciales: </label>
              <div class="form-group">
                <select class="form-control" id="sel1" name ="ant_judicial">
                  <option> <?php echo $row['ant_judicial'] ?></option>
                  <option>POSITIVO</option>
                  <option>NEGATIVO</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="ant_policial">Antecedentes Policiales: </label>
              <div class="form-group">
                <select class="form-control" id="sel1" name ="ant_policial">
                  <option> <?php echo $row['ant_policial'] ?></option>
                  <option>POSITIVO</option>
                  <option>NEGATIVO</option>
                </select>
              </div>
            </div>
            

            <div class="form-group">
              <label for="record_cond">Record del conductor: </label>
              <input type="text" name="record_cond" class="form-control" id="record_cond" placeholder="Record del conductor"  value="<?php echo $row['record_cond'] ?>" required="">
            </div> 
          </div>

          <div class="col-6 col-sm-4">
          <!--   <div class="form-group">
              <label for="resultado">Resultado: </label>
              <div class="form-group">
                <select class="form-control" id="sel1" name ="resultado" required="">
                  <option><?php echo $row['resultado'] ?></option>
                  <option>APTO</option>
                  <option>NO APTO</option>
                </select>
              </div> -->

              <div class="form-group">
                <label for="soat">SOAT : </label>
                <div class="form-group">
                  <select class="form-control" id="sel1" name ="soat">
                    <option><?php echo $row['soat'] ?></option>
                    <option>VIGENTE</option>
                    <option>VENCIDO</option>
                    <option>NO POSEE</option>
                  </select>
                </div>
              </div>

             <div class="form-group">
             <input class="form-group-input" type="checkbox" name="blacklist" id="blacklist" value="1">
                <label class="form-group-label" for="exampleRadios1">
                  Se encuenta en lista Negra
                </label>
             
            </div>
           
              <div class="form-group">
                <label for="observacion">Observación:</label>
                <textarea class="form-control" rows="6" id="observacion" name="observacion"><?php echo $row['observacion'] ?></textarea>
              </div>

            </div>
          </div>
            
            <div class="form-group">
             <div class="col-sm-offset-2 col-sm-10">
              <a href="inicio.php" class="btn btn-warning">Regresar</a>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <?php require 'footer.php' ?>
  </div>
</body>
</html>