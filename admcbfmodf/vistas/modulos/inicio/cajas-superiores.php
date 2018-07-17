<?php

$item = null;
$valor = null;
$orden = "id";

$item2 = null;
$valor2 = null;

//$ventas = ControladorVentas::ctrSumaTotalVentas();


$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
$totalClientes = count($clientes);

$clientes2 = ControladorClientes::ctrMostrarClientesMes($item2, $valor2);
$totalClientes2 = count($clientes2);


?>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-aqua">
    
    <div class="inner">
    
      <p>Reporte de conductores este mes </p>

      <h3><?php echo number_format($totalClientes); ?></h3>

        
    </div>
    
    <div class="icon">
    
      <i class="ion ion-person-add"></i>
    
    </div>
    
    <a href="conductores" class="small-box-footer">

      Más info <i class="fa fa-arrow-circle-right"></i>

    </a>

  </div>

</div>


<!--<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-aqua">
    
    <div class="inner">
      
      <h3>$<?php //echo number_format($ventas["total"],2); ?></h3>

      <p>Ventas</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="ventas" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>-->

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-green">
    
    <div class="inner">

      <p>Reporte de conductores mes anterior</p>

      <h3><?php echo number_format($totalClientes2); ?></h3>

      
    
    </div>
    
    <div class="icon">
    
      <i class="ion ion-clipboard"></i>
    
    </div>
    
    <a href="busqueda" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>



<div class="col-lg-3 col-xs-6">

 <!-- <div class="small-box bg-red">
  
    <div class="inner">
    
      <h3><?php //echo number_format($totalProductos); ?></h3>

      <p>Productos</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-ios-cart"></i>
    
    </div>
    
    <a href="productos" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>-->

</div>