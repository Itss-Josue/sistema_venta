<?php
require_once "../library/conexion.php";
class ComprasModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarCompras(
        $id_producto,
        $cantidad,
        $precio,
        $trabajador) {
        $sql = $this->conexion->query("CALL insertarCompras('{$id_producto}','{$cantidad}','{$precio}','{$trabajador}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    
    public function obtener_productos()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query(" SELECT * FROM producto");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
            
        }
        return $arrRespuesta;
    }

    public function obtenerCompras(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM compras");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta,$objeto);
            
        }
        return $arrRespuesta;
    }
}