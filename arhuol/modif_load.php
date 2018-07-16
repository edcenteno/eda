<?php

if (@$_POST["subir"] == "Cargar archivo")
{
$folder = "docs/";
move_uploaded_file($_FILES["formato"]["tmp_name"] , "$folder".$_FILES["formato"]["name"]);
echo "
<div ><p class='hidd' align=center>El archivo  ".$_FILES["formato"]["name"]." se ha cargado correctamente. haga click en <font color='red'> volver </font> <div>";
}


@$pdf= $_FILES["formato"]["name"];
@$ruta="<a href=\'http://arhuantecedentes.com/arhu/docs/$pdf\' target=\'_blank\'><img src=\'http://arhuantecedentes.com/arhu/img/sist/pdf.png\'>";

$dni=$_GET['dni'];
$a="1";
  
    include 'conexion.php';

     $sentencia="UPDATE conductores SET pdf='".$ruta."', validarpdf='".$a."' WHERE dni='".$dni."' ";
      $mysqli->query($sentencia) or die ("Error al actualizar datos".mysqli_error($mysqli));

    
?>


<html lang="es">

  <head>
   <title>ARHU Internacional</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <link href="css/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/peticion.js"></script>
      <link rel="shortcut icon" href="img/favicon.ico" type="image/ico" />
  </head>

  <body>
    <header>
      <div class="alert alert-info">
      <h2>Cargar archivo PDF en el Servidor</h2>
      </div>
    </header>

<div class="col-md-offset-4">

</div>

<form  method="post" enctype="multipart/form-data" class="col-md-offset-4 col-md-4" style="margin-right:2%; border-radius:20px;">

   
    <input   type="file" name="formato" id="formato">
    
    <br>
    <button class="btn btn-success" type="submit" name="subir" value="Cargar archivo">enviar</button>
    <button type="button" class="btn btn-danger" align="left" onclick="window.close();">Volver</button></a>


    </div>
</form>


    </div>
    <br>
    <br>
    </div>

  </form>
</body>
</html>

<?php


?>
