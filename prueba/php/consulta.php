<?php 

require_once "conexion.php";
$conexion=conexion();

$dni=$_POST['b'];
if (is_numeric($dni) && strlen($dni) == 8) {

    function buscaRepetido($dni,$conexion){
        $sql="SELECT * from conductores 
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
          /* echo '<a href="conductor.php?dni='."$dni".'" class="btn btn-dark bt-sm">ver +<i class="fa fa-fw fa-plus"></i></a>';*/
            echo '<a  data-toggle="modal" data-target="#infor" class="btn btn-dark bt-sm">ver +<i class="fa fa-fw fa-plus"></i></a>';
            ?>
            <!-- Modal -->
        <div class="modal fade" id="infor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                <!-- Contenido -->
        <section>
            
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" ></script> 
            <table class="grilla" id="tablajson">
            <thead>
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
            </thead>
            <tbody></tbody>
            </table>

            <script type="text/javascript">

            $(document).ready(function(){
            var url="generarJSON.php";
            $("#tablajson tbody").html("");
            $.getJSON(url,function(conductores){
            $.each(conductores, function(i,conductor){
            var newRow =
            "<tr>"
            +"<td>"+conductor.dni+"</td>"
            +"<td>"+conductor.nombre+"</td>"
            +"<td>"+conductor.apellido+"</td>"
            +"<td>"+conductor.placa+"</td>"
            +"<td>"+conductor.ant_penales+"</td>"
            +"<td>"+conductor.ant_judicial+"</td>"
            +"<td>"+conductor.ant_policial+"</td>"
            +"<td>"+conductor.record_cond+"</td>"
            +"<td>"+conductor.resultado+"</td>"
            +"<td>"+conductor.soat+"</td>"
            +"</tr>";
            $(newRow).appendTo("#tablajson tbody");
            });
            });
            });

            </script>

 
        </section>

                                </div>
                        </div>
                </div>
        </div>
        <?php
    }


    
} else {
    echo "Introduzca un DNI valido";
}



?>
