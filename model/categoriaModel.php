<?php

require_once "../librerias/conexion.php";

class CategoriaModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function obtener_categorias()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query(" SELECT * FROM categoria");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }

    public function registrarCategoria($nombre, $detalle)
    {
        $sql = $this->conexion->query("CALL insertcategoria('{$nombre}','{$detalle}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function obtener_categoria_id($id)
    {
        $objeto = $this->conexion->query("SELECT * FROM  categoria where id='{$id}'");
        $objeto = $objeto->fetch_object();
        return $objeto;
    }

    ////////////////////////

    public function verCategoria($id)
    {
        $sql = $this->conexion->query("SELECT * FROM categoria WHERE id='{$id}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function actualizarCategoria($id, $nombre, $detalle)
    {
        $sql = $this->conexion->query("CALL actualizarcategoria('{$id}','{$nombre}','{$detalle}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
}
