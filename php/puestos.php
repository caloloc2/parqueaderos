<?php 

$respuesta['estado'] = false;

try{
    require 'meta.php';

    $puesto1 = $_REQUEST['p1'];
    $puesto2 = $_REQUEST['p2'];
    $puesto3 = $_REQUEST['p3'];
    $puesto4 = $_REQUEST['p4'];
    $puesto5 = $_REQUEST['p5'];

    $consulta = Meta::Consulta_Unico("SELECT * FROM parqueaderos ORDER BY id_parqueadero DESC LIMIT 1");

    if ($consulta['id_parqueadero']!=''){
        $actualiza = Meta::Ejecutar("UPDATE parqueaderos SET puesto1=".$puesto1.", puesto2=".$puesto2.", puesto3=".$puesto3.", puesto4=".$puesto4.", puesto5=".$puesto5." WHERE id_parqueadero=".$consulta['id_parqueadero']);
    }else{
        // crea los datos iniciales
        $ingreso = Meta::Nuevo_Parqueadero($puesto1, $puesto2, $puesto3, $puesto4, $puesto5);
    }

    $respuesta['estado'] = true;

}catch(Exception $e){
    $respuesta['error'] = $e->getMessage();
}

echo json_encode($respuesta);