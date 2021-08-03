<?php

include_once './Lesse.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$rut = $_POST['rut'];
$arriendo = $_POST['arriendo'];
$monto = $_POST['monto'];
$direccion = $_POST['direccion'];

function validarLargo($nombre,$apellido,$rut,$arriendo,$monto,$direccion){
    if(strlen($nombre) == 0){
        echo json_encode('err => Nombre invalido');
    }elseif(strlen($apellido) == 0){
        echo json_encode('err => Apellido invalido');
    }elseif(strlen($rut) == 0){
        echo json_encode('err => Rut invalido');
    }elseif(strlen($arriendo) == 0){
        echo json_encode('err => Arriendo invalido');
    }elseif(strlen($monto) == 0){
        echo json_encode('err => Monto invalido');
    }elseif(strlen($direccion) == 0){
        echo json_encode('err => Dirección invalido');
    }else{
        $newLessee = new lessee();
        $newLessee->setNewlesse($nombre,$apellido,$rut,$arriendo,$monto,$direccion);
        echo json_encode("Usuario registrado correctamente");
    }
}

validarLargo($nombre,$apellido,$rut,$arriendo,$monto,$direccion);

?>