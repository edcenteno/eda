<?php

include 'scripts.php';
?>
<html>
<head>
<title>Ejemplo sencillo de AJAX</title>
<!-- <script type="text/javascript" src="js/jquery.js"></script> -->
<script>
function realizaProceso(dni){
        var parametros = {
                
                "dni" : dni
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'pruebanombre.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#resultado").html(response);
                }
        });
}
</script>
</head>
<body>
Introduce dni
<input type="text" name="caja_texto" id="dni" value="0"/> 

Realiza info
<input type="button" href="javascript:;" onclick="realizaProceso($('#dni').val());return false;" value="enviar"/>
<br/>

Resultado: <span id="resultado">
			 <br>
