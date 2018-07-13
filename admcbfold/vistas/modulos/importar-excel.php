<script type="text/javascript">
  function cargarHojaExcel()
  {
    if(document.frmcargararchivo.excel.value=="")
    {
      alert("Suba un archivo");
      document.frmcargararchivo.excel.focus();
      return false;
    }   

    document.frmcargararchivo.action = "vistas/modulos/procesar.php";
    document.frmcargararchivo.submit();
  }

</script>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Exportar Excel
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Exportar Excel</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
    
<article>
  <header>
     
    <div class="col-md-offset-4">

    <form name="frmcargararchivo" method="post" enctype="multipart/form-data">
     
      <p><input type="file" name="excel" id="excel" /></p>
      <!--<p><input type="button" value="subir" onclick="cargarHojaExcel();" /></p>-->
      <button class="btn btn-success" type="submit" value="subir" onclick="cargarHojaExcel();" />enviar</button>
    </form>
  </div>
  
</article>
  </div>




       </div>
     </div>
   </section>
 </div>
