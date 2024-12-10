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
    
    public function verProducto($id){
        $sql = $this->conexion->query("SELECT * FROM producto WHERE id='$id'");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function registrarProducto($codigo,$nombre,$detalle,$precio,$stock,$categoria,$imagen,$proveedor,$tipoArchivo) {
        $sql = $this->conexion->query("CALL insertproducto('{$codigo}','{$nombre}','{$detalle}','{$precio}','{$stock}','{$categoria}','{$imagen}','{$proveedor}','{$tipoArchivo}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function actualizar_imagen($id, $imagen){
        $sql = $this->conexion->query("UPDATE producto SET imagen='{$imagen}' WHERE id='{$id}'");
        $sql = $sql->fetch_object();
        return 1;
    }
    public function actualizarProducto($id, $nombre,$detalle, $precio, $categoria, $proveedor){
        // Ejecutar un procedimiento almacenado y el procedimiento almacena los datos de un nuevo producto en la base de datos
        $sql = $this->conexion->query("CALL actualizarproducto('{$id}', '{$nombre}','{$detalle}','{$precio}','{$categoria}','{$proveedor}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    
    //ELIMINAR PRODUCTO ID
    public function eliminarProducto($id){
        $sql = $this->conexion->query("CALL eliminarproducto('{$id}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
}

