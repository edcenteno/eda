<?php
include 'scripts.php';
?>
<script>
function realizaProcesoplaca(){
        cadena="placa=" + $('#placa').val() +
                                "&dni=" + $('#dni').val() +
                                "&nombre=" + $('#nombre').val() + 
                                "&apellidos=" + $('#apellidos').val();
        $.ajax({
                data:  cadena, //datos que se envian a traves de ajax
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
<!-- <input type="text" name="caja_texto" id="placa" value="0"/>  -->
<input id="placa" name="caja_texto" onblur="aMayusculas(this.value,this.id)" type="text" pattern="[A-Z0-9]{6}" title="Letras y números Solo mayosculas" minlength="6" maxlength="6" placeholder="Placa ABB777"/>

Realiza info
<input type="button" href="javascript:;" onclick="realizaProcesoplaca();return false;" value="enviar2" />
<br/><br/><br/>

Resultado: <span id="resultado">
                         <br>