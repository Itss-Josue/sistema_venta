<?php
require_once "../librerias/conexion.php";
class ComprasModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrar_compra($id_producto, $cantidad, $precio, $trabajador)
    {
        $sql = $this->conexion->query("CALL insertcompras('{$id_producto}','{$cantidad}','{$precio}','{$trabajador}')");
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

    public function obtenerCompras()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM compras");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }
    
    public function verCompras($id){
        $sql = $this->conexion->query("SELECT * FROM compras WHERE id='{$id}'");
        $sql = $sql->fetch_object();
        return $sql;
     }
     public function actualizarcompras($id, $id_producto, $cantidad, $precio, $id_trabajador){
        $sql = $this->conexion->query("CALL actualizarcompras('{$id}','{$id_producto }','{$cantidad}','{$precio}','{$id_trabajador}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function eliminarcompras($id){
        $sql = $this->conexion->query("CALL eliminarCompras('{$id}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
}
