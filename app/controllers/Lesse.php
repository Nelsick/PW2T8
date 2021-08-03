<?php

include_once './connect.php';

class lessee extends db{
    private string $nombre;
    private string $apellido;
    private string $rut;
    private int $arriendo;
    private int $monto;
    private string $direccion;

    /*
    public function __construct($nombre,$apellido,$rut,$arriendo,$monto,$direccion)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->rut = $rut;
        $this->arriendo = $arriendo;
        $this->monto = $monto;
        $this->direccion = $direccion;
    }
   */

    public function setNewlesse($nombre,$apellido,$rut,$arriendo,$monto,$direccion){
        $query = $this->connect()->prepare('INSERT INTO arrendatarios (nombre,apellido,rut,arriendo,monto,direccion) VALUES (:nombre,:apellido,:rut,:arriendo,:monto,:direccion)');
        $query->execute(['nombre'=>$nombre,'apellido'=>$apellido,'rut'=>$rut,'arriendo'=>$arriendo,'monto'=>$monto,'direccion'=>$direccion]);
    }

    public function getAllLessee(){
        $query = $this->connect()->prepare('SELECT * FROM arrendatarios');
        $query->execute();
        $lesseeData = [];

        if(!$query){
            echo json_encode('status: 200, error al realizar la consulta');
        }

        while($arrendador = $query->fetch()){
            array_push($lesseeData,['id'=>$arrendador['id'],'nombre'=>$arrendador['nombre'],'apellido'=>$arrendador['apellido'],'rut'=>$arrendador['rut'],'arriendo'=>$arrendador['arriendo'],'monto'=>$arrendador['monto'],'direccion'=>$arrendador['direccion']]);
        }

        echo json_encode($lesseeData);

    }

    public function getSomeLessee(){
        $query = $this->connect()->prepare('SELECT * FROM arrendatarios');
        $query->execute();
        $lesseeData = [];

        if(!$query){
            echo json_encode('status: 200, error al realizar la consulta');
        }

        while($arrendador = $query->fetch()){
            array_push($lesseeData,['id'=>$arrendador['id'],'nombre'=>$arrendador['nombre'],'apellido'=>$arrendador['apellido'],'rut'=>$arrendador['rut'],'arriendo'=>$arrendador['arriendo'],'monto'=>$arrendador['monto'],'direccion'=>$arrendador['direccion']]);
        }

        return $lesseeData;

    }

}

?>