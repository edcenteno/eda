<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Cabify - Disfruta del viaje</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="vistas/img/plantilla/favicon.ico">

   <!--=====================================
  PLUGINS DE CSS
  ======================================-->

  <!-- chartist CSS -->
    <link href="vistas/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="vistas/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="vistas/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="vistas/dist/css/pages/dashboard1.css" rel="stylesheet">
    <link href="vistas/assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet" />
   
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="vistas/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="vistas/assets/node_modules/popper/popper.min.js"></script>
    <script src="vistas/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="vistas/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="vistas/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="vistas/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="vistas/dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="vistas/assets/node_modules/raphael/raphael-min.js"></script>
    <script src="vistas/assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="vistas/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    <script src="vistas/assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <!-- <script src="vistas/dist/js/dashboard1.js"></script> -->
    
    <script src="vistas/js/plantilla.js"></script>
    <!--stickey kit -->
    <script src="vistas/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="vistas/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!-- This is data table -->
    <script src="vistas/assets/node_modules/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="vistas/assets/node_modules/switchery/dist/switchery.min.js"></script>
    <!-- end - This is for export functionality only -->

    </head>

<!--=====================================
CUERPO DOCUMENTO
======================================-->

<body class="skin-blue fixed-layout">

  <?php

  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

   
    /*=============================================
    CABEZOTE
    =============================================*/

    include "modulos/cabezote.php";

    /*=============================================
    MENU
    =============================================*/

    include "modulos/menu.php";
    echo '<div class="page-wrapper">';
   

    /*=============================================
    CONTENIDO
    =============================================*/
    //include "modulos/contenido.php";
    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "inicio" ||
         $_GET["ruta"] == "usuarios" ||
         $_GET["ruta"] == "conductores" ||
         $_GET["ruta"] == "busqueda" ||
         $_GET["ruta"] == "listado" ||
         $_GET["ruta"] == "salir"){ 

       include "modulos/".$_GET["ruta"].".php";

     }else{

        include "modulos/404.php";

      }
    }else{

      include "modulos/inicio.php";

    }

    /*=============================================
    FOOTER
    =============================================*/
   echo '</div>';
    include "modulos/footer.php";



  }else{

    include "modulos/login.php";

  }

  ?>