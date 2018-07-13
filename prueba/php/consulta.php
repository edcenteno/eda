<?php 

require_once "conexion.php";
$conexion=conexion();

$dni=$_POST['b'];
if (is_numeric($dni) && strlen($dni) == 8) {

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

    if(buscaRepetido($dni,$conexion)==0){
         ?>  
     <input type="button" href="javascript:;" onclick="realizaProceso($('#dni').val());return false;" value="enviar"/>
    <br/>   
    <?php
    }else{
           echo '<a href="conductor.php?dni='."$dni".'" class="btn btn-dark bt-sm">ver +<i class="fa fa-fw fa-plus"></i></a>';
    }


    
} else {
    echo "Introduzca un DNI valido";
}



?>