<?php

require_once('../model/personaModel.php');
//instanciar la clase categoria model
$objPersona = new PersonaModel();

$tipo = $_REQUEST['tipo'];

if ($tipo == "listar") {
    //respuesta 
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Personas = $objPersona->obtener_proveedor();
    if (!empty($arr_Personas)) {

        // recorremos el array para agregar las opciones de las categorias.

        for ($i=0; $i < count($arr_Personas); $i++) { 
            $rol_persona = $arr_Personas[$i]->rol;
            $categoria = $arr_Personas[$i]->razon_social;
            $opciones = '';
            $arr_Personas[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Personas;
    }
    echo json_encode($arr_Respuesta);
}


if ($tipo == "registrar") {
    // Captura y validación de los datos del formulario
    $nro_identidad = $_POST['nro_identidad'] ?? '';
    $razon_social = $_POST['razon_social'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $departamento = $_POST['departamento'] ?? '';
    $provincia = $_POST['provincia'] ?? '';
    $distrito = $_POST['distrito'] ?? '';
    $cod_postal = $_POST['cod_postal'] ?? '';
    $direccion = $_POST['direccion'] ?? '';
    $rol = $_POST['rol'] ?? '';
    $password = $_POST['password'] ?? '';
    $estado = $_POST['estado'] ?? '';
    $fecha_reg = $_POST['fecha_reg'] ?? '';

    $secure_password = password_hash($nro_identidad, PASSWORD_DEFAULT);

    // Validación de campos vacíos
    if (
        empty($nro_identidad) || empty($razon_social) || empty($telefono) ||
        empty($correo) || empty($departamento) || empty($provincia) ||
        empty($distrito) || empty($cod_postal) || empty($direccion) ||
        empty($rol) || empty($password) || empty($estado) || empty($fecha_reg)
    ) {
        echo json_encode(['status' => false, 'mensaje' => 'Error, todos los campos son obligatorios']);
        return;
    }

    // Registrar usuario a través del modelo
    $resultado = $objUsuario->registrarUsuario(
        $nro_identidad, $razon_social, $telefono, $correo,
        $departamento, $provincia, $distrito, $cod_postal,
        $direccion, $rol, $password, $estado, $fecha_reg
    );

    // Respuesta según el resultado del modelo
    if ($resultado) {
        echo json_encode(['status' => true, 'mensaje' => 'Usuario registrado exitosamente']);
    } else {
        echo json_encode(['status' => false, 'mensaje' => 'Error al registrar el usuario']);
    }
}
?>