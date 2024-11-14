<?php

require_once "../librerias/Conexion.php"; 

class UsuarioModel
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    // Método para obtener todos los usuarios
    public function obtenerusuarios()
    {
        $arrUsuarios = array();
        $query = "SELECT * FROM usuarios";
        $resultado = $this->conexion->query($query);

        while ($usuario = $resultado->fetch_object()) {
            array_push($arrUsuarios, $usuario);
        }

        return $arrUsuarios;
    }

    // Método para registrar un nuevo usuario
    public function registrarUsuario(
        $nro_identidad, $razon_social, $telefono, $correo,
        $departamento, $provincia, $distrito, $cod_postal,
        $direccion, $rol, $password, $estado, $fecha_reg
    ) {
        // Preparar la consulta para registrar un nuevo usuario
        $query = "INSERT INTO usuarios (nro_identidad, razon_social, telefono, correo, departamento, provincia, distrito, cod_postal, direccion, rol, password, estado, fecha_reg) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        // Preparar la declaración SQL
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param(
            $nro_identidad,
            $razon_social,
            $telefono,
            $correo,
            $departamento,
            $provincia,
            $distrito,
            $cod_postal,
            $direccion,
            $rol,
            $password,
            $estado,
            $fecha_reg
        );

        // Ejecutar la declaración y verificar si fue exitosa
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

?>
