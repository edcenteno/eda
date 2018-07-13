    <?php include('conductor.php'); ?>	
    <script type="text/javascript">
	$.ajax({ url:"http://127.0.0.1/edarhu/prueba/algo.php",
	 dataType:"json", method:"POST" }).done(function(r){$('#dni').val(r[0].dni)});

</script>
Introduce dni
<input type="text" pattern="[0-9]{8}" minlength="8" maxlength="8"name="dni" id="dni" value="" placeholder="DNI" />