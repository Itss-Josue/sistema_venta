<?php

require_once "../librerias/conexion.php";
class ProductoModel
{

    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function obtenerProductos(){
        
        $arrRespuesta = array();
        $respuesta = $this->conexion->query(" SELECT * FROM producto");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
            
        }
        return $arrRespuesta;
    }
    
    public function obtener_producto_id($id){
        $respuesta = $this->conexion->query("SELECT *FROM producto WHERE id='{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
    public function registrarProducto(
        $codigo,$nombre,$detalle,$precio,$stock,$categoria,$imagen,$proveedor,$tipoArchivo
    ) {
        $sql = $this->conexion->query("CALL insertproducto('{$codigo}',
            '{$nombre}','{$detalle}','{$precio}','{$stock}','{$categoria}','{$imagen}','{$proveedor}', '{$tipoArchivo}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function actualizar_imagen($id, $imagen){
        $sql = $this->conexion->query("UPDATE producto SET imagen='{$imagen}' WHERE id='{$id}'");
        return 1;

    }
    public function verProducto($id){
        $sql = $this->conexion->query("SELECT * FROM producto WHERE id='$id'");
        $sql = $sql->fetch_object();
        return $sql;
    }
}
