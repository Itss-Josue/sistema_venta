<?php

require_once "../librerias/conexion.php";

class PersonaModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarUsuario($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password)
    {
        $sql = $this->conexion->query("CALL insertPersona('{$nro_identidad}', '{$razon_social}', '{$telefono}', '{$correo}', '{$departamento}', '{$provincia}', '{$distrito}', '{$cod_postal}', '{$direccion}', '{$rol}', '{$password}')");
        $sql = $sql->fetch_object();
        return $sql;
    }

    ////////////////////////////
    

    public function buscarPersonaPorDNI($nro_identidad){
        $sql = $this->conexion->query("SELECT * FROM persona WHERE nro_identidad='{$nro_identidad}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function obtenerProveedor(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query( "SELECT * FROM persona WHERE rol='proveedor'");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return  $arrRespuesta;
    }

    public function obtener_proveedor_id($id){
        $objeto = $this->conexion->query("SELECT * FROM persona WHERE id = '{$id}'");
        $objeto = $objeto->fetch_object();
        return $objeto;
    }
    public function obtener_trabajador(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query( "SELECT * FROM persona WHERE rol='trabajador'");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return  $arrRespuesta;
    }
   
    public function obtener_trabajador_id($id){
        $respuesta = $this->conexion->query("SELECT *FROM persona WHERE id='{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
    
    public function obtenerPersona(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM persona");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta,$objeto);
            
        }
        return $arrRespuesta;
    }
}

