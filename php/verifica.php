<?php 

$respuesta['estado'] = false;

try{
    require 'meta.php';

    $consulta = Meta::Consulta_Unico("SELECT * FROM parqueaderos ORDER BY id_parqueadero DESC LIMIT 1");

    $respuesta['consulta'] = $consulta;
    $respuesta['estado'] = true;
    
}catch(Exception $e){
    $respuesta['error'] = $e->getMessage();
}

echo json_encode($respuesta);