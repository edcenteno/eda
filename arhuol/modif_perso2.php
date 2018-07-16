      <link rel="shortcut icon" href="img/favicon.ico" type="image/ico" />
<title>ARHU Internacional</title>
		<link rel="shortcut icon" href="img/favicon.ico" type="image/ico" />
<?php

$ant_judicial= $_POST['ant_judicial'];
$ant_penales = $_POST['ant_penales'];
$ant_policial = $_POST['ant_policial'];
$record_cond = $_POST['record_cond'];
$soat = $_POST['soat'];
@$blacklist = $_POST['blacklist'];

if ($ant_judicial == 'POSITIVO' || 
	$ant_penales == 'POSITIVO' || 
	$ant_policial =='POSITIVO' || 
	$record_cond >= '55' || 
	$soat == 'VENCIDO' || 
	$soat == 'NO POSEE'||
	$blacklist == '1') {

	$resultado = "NO APTO";

} else {

	$resultado = "APTO";
	
}

$pdf = $_POST['pdf'];
//strlen($pdf);

if (strlen($pdf) == '0' || strlen($pdf) == '79') {
	@$pdf="<a href='modif_load.php?dni=$dni' target='_blank'><img src='img/sist/load.png'>";
} else {
	$pdf;
}


	
	ModificarPersona($_POST['dni'], $_POST['nombre'], $_POST['apellido'], $_POST['placa'],  $ant_penales, $ant_judicial, $ant_policial, $record_cond, $resultado, $_POST['soat'], $_POST['cont'],$_POST['observacion'], $pdf, $blacklist);

	function ModificarPersona($dni, $nombre, $apellido, $placa, $ant_penales, $ant_judicial, $ant_policial, $record_cond, $resultado, $soat, $cont, $observacion, $pdf, $blacklist)
	{
		include 'conexion.php';
		 $sentencia="UPDATE conductores SET dni ='".$dni."',
		 							   nombre='".$nombre."', 
									   apellido ='".$apellido."', 
		 							   ant_penales='".$ant_penales."', 
									   ant_judicial='".$ant_judicial."', 
									   ant_policial='".$ant_policial."',
									   record_cond='".$record_cond."',
									   resultado='".$resultado."',
									   placa='".$placa."',
									   soat='".$soat."',
									   observacion='".$observacion."',
									   pdf = '".addslashes($pdf)."',
									   blacklist = '".$blacklist."'
									   WHERE cont='".$cont."' ";
		$mysqli->query($sentencia) or die ("Error al actualizar datos".mysqli_error($mysqli));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='inicio.php';
</script>