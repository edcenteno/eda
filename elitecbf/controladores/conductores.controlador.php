<?php

class ControladorConductor{

	
	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function ctrCrearConductor(){

		if(isset($_POST["nuevoDni"])){

			if(preg_match('/^[0-9]+$/', $_POST["nuevoDni"])){

				$tabla = "conductores";
				date_default_timezone_set('America/Lima');

				$fecha = date('Y-m-d');
				$hora = date('H:i:s');

				$fechaActual = $fecha.' '.$hora;

				$datos = array("dni" => $_POST["nuevoDni"],
							   "nombre" => $_POST["nuevoNombre"],
							   "apellido" => $_POST["nuevoApellido"],
							   "placa" => $_POST["nuevoPlaca"],
							   "fecha" => $fechaActual);

				$respuesta = ModeloConductor::mdlIngresarConductor($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El usuario ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "conductores";

						}

					});
				

					</script>';


				}	


			}else{

				echo '<script>

					swal({

						type: "error",
						title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "usuarios";

						}

					});
				

				</script>';

			}


		}


	}

	/*=============================================
	MOSTRAR USUARIO
	=============================================*/

	static public function ctrMostrarConductor($item, $valor){

		$tabla = "conductores";

		$respuesta = ModeloConductor::mdlMostrarConductor($tabla, $item, $valor);

		return $respuesta;
	}


	/*=============================================
	DESCARGAR EXCEL
	=============================================*/

	public function ctrDescargarReporte(){

		  $fechaini=$_GET["fechaInicial"];
          $fechafin=$_GET["fechaFinal"];

         
         // echo $fechaini;
          //echo $fechafin;

		if(isset($_GET["reporte"])){

			$tablas = "conductores";


			if(isset($fechaini) && isset($fechafin)){
				$conductores = ModeloConductor::mdlRangoFechasConductor($tablas, $fechaini, $fechafin);
				


			}else{

				$item = null;
				$valor = null;

				$conductores = ModeloConductor::MdlMostrarConductor($tabla, $item, $valor);

			}


			/*=============================================
			CREAMOS EL ARCHIVO DE EXCEL
			=============================================*/

			$Name = $_GET["reporte"].'.xls';
 //echo "<script> alert('excel');</script>";
			header('Expires: 0');
			header('Cache-control: private');
			header("Content-type: application/vnd.ms-excel"); // Archivo de Excel
			header("Cache-Control: cache, must-revalidate"); 
			header('Content-Description: File Transfer');
			header('Last-Modified: '.date('D, d M Y H:i:s'));
			header("Pragma: public"); 
			header('Content-Disposition:; filename="'.$Name.'"');
			header("Content-Transfer-Encoding: binary");

			echo utf8_decode("<table border='0'> 

					<tr> 
					<td style='font-weight:bold; border:1px solid #eee;'>FECHA DE REGISTRO</td> 
					<td style='font-weight:bold; border:1px solid #eee;'>DNI</td>
					<td style='font-weight:bold; border:1px solid #eee;'>NOMBRE</td>
					<td style='font-weight:bold; border:1px solid #eee;'>PLACA</td>
					<td style='font-weight:bold; border:1px solid #eee;'>ANTECEDENTES PENALES</td>
					<td style='font-weight:bold; border:1px solid #eee;'>ANTECEDENTES JUDICIAL</td>
					<td style='font-weight:bold; border:1px solid #eee;'>ANTECEDENTES POLICIAL</td>		
					<td style='font-weight:bold; border:1px solid #eee;'>RECORD CONDUCTOR</td>		
					<td style='font-weight:bold; border:1px solid #eee;'>RESULTADO</td	
					<td style='font-weight:bold; border:1px solid #eee;'>SOAT</td>		
							
					<td style='font-weight:bold; border:1px solid #eee;'>OBSERVACION</td>		
					</tr>");

			foreach ($conductores as $row => $value){

				

			 echo utf8_decode("<tr>
			 			<td style='border:1px solid #eee;'>".$value["fecha"]."</td> 
			 			<td style='border:1px solid #eee;'>".$value["dni"]."</td>
			 			<td style='border:1px solid #eee;'>".$value["nombre"]."</td>
			 			<td style='border:1px solid #eee;'>".$value["apellido"]."</td>
			 			<td style='border:1px solid #eee;'>".$value["placa"]."</td>
			 			<td style='border:1px solid #eee;'>".$value["ant_judicial"]."</td>
			 			<td style='border:1px solid #eee;'>".$value["ant_policial"]."</td>
			 			<td style='border:1px solid #eee;'>".$value["record_cond"]."</td>
			 			<td style='border:1px solid #eee;'>".$value["resultado"]."</td>
			 			<td style='border:1px solid #eee;'>".$value["soat"]."</td>
			 			
			 			<td style='border:1px solid #eee;'>".$value["observacion"]."</td>
			 			</tr>");

			 	}

			echo "</table>";

		

	}



}

/*=============================================
	RANGO FECHAS
	=============================================*/	

	static public function ctrRangoFechasConductor($fechaInicial, $fechaFinal){

		$tabla = "conductores";

		$respuesta = ModeloConductor::mdlRangoFechasConductor($tabla, $fechaInicial, $fechaFinal);

		return $respuesta;
		
	}

}
	


