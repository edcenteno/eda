<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$nombre=$_POST['nombre'];
		$apellidos=$_POST['apellidos'];
		$dni=$_POST['dni'];

		if(buscaRepetido($dni,$conexion)==1){
			echo 2;
		}else{
			$sql="INSERT into info (dni,nombre, apellidos)
				values ('$dni','$nombre', '$apellidos')";
			echo $result=mysqli_query($conexion,$sql);
		//	var_dump($sql);
		}


		function buscaRepetido($dni,$conexion){
			$sql="SELECT * from info 
				where dni='$dni'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}

 ?>