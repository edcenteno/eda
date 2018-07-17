<style type="text/css">

input:valid, textarea:valid {
  border-color:#66afe9;
}
input:invalid, textarea:invalid {
  border-color:red;
}
</style>
<?php

include 'scripts.php';
?>
<html>
<head>


<script>
function realizaProceso(dni){
        var parametros = {
                
                "dni" : dni
        };
        $.ajax({
                data:  parametros, 
                url:   '../admcbfmodf/vistas/modulos/conductores/consulta.php',
                type:  'post', 
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        
                        $("#resultado").html(response);
                }
        });
}
</script>
<!-- <script type="text/javascript">
        $(document).ready(function(){
                         
      var consulta;
             
      //hacemos focus
      $("#dni").focus();
                                                 
      //comprobamos si se pulsa una tecla
      $("#dni").keyup(function(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#dni").val();
                                      
             //hace la búsqueda
             $("#resultado").delay(1000).queue(function(n) {                                                 
                //  $("#resultado").html('<img src="ajax-loader.gif" />');
                                           
                        $.ajax({
                              type: "POST",
                              url: "php/consulta.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición");
                              },
                              success: function(data){                                                      
                                    $("#resultado").html(data);
                                    n();
                              }
                  });
                                           
             });
                                
      });
                          
});
</script> -->
</head>
<body>
Introduce dni
<!-- ENTRADA PARA EL DNI -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-id-card"></i></span> 

                <input type="text" class="form-control input-lg" placeholder="Ingresar DNI" pattern="[0-9]{8}" minlength="8" maxlength="8"name="dni" id="dni" value="" required>

                <span class="input-group-addon"><i class="fa fa-search btn btn-primary" href="javascript:;" onclick="realizaProceso($('#dni').val());return false;"></i></span> 
              </div>
            </div>
 

 
<!-- <input type="button" href="javascript:;" onclick="realizaProceso($('#dni').val());return false;" value="Buscar" class="btn btn-primary"/> -->

 <span id="resultado">


