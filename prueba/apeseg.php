<?php

include 'scripts.php';
?>
<html>
<head>
<title>Ejemplo sencillo de AJAX</title>
<!-- <script type="text/javascript" src="js/jquery.js"></script> -->
<script>
function realizaProceso(placa){
        var parametros = {
                
                "placa" : placa
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'placa.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#resultado").html(response);
                }
        });
}

function aMayusculas(obj,id){
    obj = obj.toUpperCase();
    document.getElementById(id).value = obj;
}
</script>
</head>
<body>
Introduce placa
<input type="text" name="caja_texto" id="placa" value="0" pattern="[A-Z0-9]{6}" title="Letras Mayusculas y números." minlength="6" maxlength="6" placeholder="Placa ABB777" onblur="aMayusculas(this.value,this.id)" /> 

<input id="id1" name="prueba" onblur="aMayusculas(this.value,this.id)" type="text"/>

Realiza info
<input type="button" href="javascript:;" onclick="realizaProcesoplaca();return false;" value="enviar2" />

Resultado: <span id="resultado">
			 <br>
