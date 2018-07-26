<?php
    require ("curl.php");
    require ("spp.php");
    $search = new SPP();
    $dni = "44274795";
    echo "<pre>";
    var_dump( $search->search( $dni ) );
?>
