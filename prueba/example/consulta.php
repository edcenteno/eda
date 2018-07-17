<?php
namespace DatosPeru;
require_once "conexion.php";
$conexion=conexion();

$dni=$_POST['ndni'];
if (is_numeric($dni) && strlen($dni) == 8) {

  function buscaRepetido($dni,$conexion){
    $sql="SELECT * from conductores 
    where dni='$dni'";
    $result=mysqli_query($conexion,$sql);
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
      $rows[] = $row;
    }

    if(mysqli_num_rows($result) > 0){
      return 1;
    }else{
      return 0;
    }
  }
	}
	class Peru
	{
		function __construct()
		{
			$this->reniec = new \Reniec\Reniec(); 
			$this->essalud = new \EsSalud\EsSalud();
			$this->mintra = new \MinTra\mintra();
		}
		function search( $dni )
		{
			$response = $this->reniec->search( $dni );
			if($response->success == true)
			{
				$rpt = (object)array(
					"success" 		=> true,
					"source" 		=> "reniec",
					"result" 		=> $response->result
				);
				return $rpt;
			}
			
			$response = $this->essalud->check( $dni );
			if($response->success == true)
			{
				$rpt = (object)array(
					"success" 		=> true,
					"source" 		=> "essalud",
					"result" 		=> $response->result
				);
				return $rpt;
			}
						
			$response = $this->mintra->check( $dni );
			if( $response->success == true )
			{
				$rpt = (object)array(
					"success" 		=> true,
					"source" 		=> "mintra",
					"result" 		=> $response->result
				);
				return $rpt;
			}
			
			$rpt = (object)array(
				"success" 		=> false,
				"msg" 			=> "No se encontraron datos"
			);
			return $rpt;
		}
	}
	require_once("../src/autoload.php");
	
	$response = new \DatosPeru\Peru();
	
	header('Content-Type: text/plain');
	
	$dni = ( isset($_REQUEST["ndni"]))? $_REQUEST["ndni"] : false;
	echo json_encode( $response->search( $dni ) );

	var_dump($response);
?>
