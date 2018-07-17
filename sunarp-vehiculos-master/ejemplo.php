<?php
    require ("curl.php");
    require ("sunarp.php");

    $search = new Sunarp();
    $placa="SAJ153";
    header('Content-type: application/json');
    echo json_encode( $search->BuscaDatosSunarp($placa), JSON_PRETTY_PRINT );
?>
