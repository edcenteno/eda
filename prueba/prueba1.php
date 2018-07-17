<?php

   require 'vendor/autoload.php';

 //  use Tecactus\Sunat\RUC as Ruc;

    // crear un nuevo objeto de la clase RUC
   $sunatRuc = new Tecactus\Sunat\RUC('vnzKgHIVzV9R0PNSxqNs75pBPUdzkmKEUGVE8Bcd');
   echo "<pre>";
   // para consultar los datos usando el número de RUC
   print_r( $sunatRuc->getByRuc('20557675052') );

   // para consultar los datos usando el númer de DNI
   print_r( $sunatRuc->getByDni('47602648') );
   
   // para devolver el resultado como un array pasar 'true' como segundo argumento.
   print_r( $sunatRuc->getByRuc('20557675052', true) );