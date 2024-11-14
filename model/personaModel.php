<?php

require_once "../librerias/conexion.php";

class PersonaModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function obtener_proveedor()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query(" SELECT * FROM persona WHERE rol='Proveedor'");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
            
        }
        return $arrRespuesta;
    }

    ////////////////////////////


    public function buscarPersonaPorDNI($nro_identidad){
        $sql = $this->conexion->query("SELECT * FROM persona WHERE nro_identidad='{$nro_identidad}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
}