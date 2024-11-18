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


if ($tipo=="registrar"){
    //print_r($_POST);
    if ($_POST) {
        $nro_identidad = $_POST['nroIdentidad'];
        $razon_social = $_POST['razonSocial'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $cod_postal = $_POST['cod_postal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];

    $secure_password = password_hash($nro_identidad, PASSWORD_DEFAULT);

    // Validación de campos vacíos
    if($nro_identidad=="" || $razon_social=="" || $telefono=="" || $correo=="" || $departamento=="" || $provincia=="" ||  $distrito=="" || $cod_postal=="" || $direccion=="" || $rol==""){
        $arr_Respuesta = array('status'=>false,'mensaje'=>'Error, campos vacios'); //respuesta
    }else {
        $arrPersona = $objPersona->registrarUsuario($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $secure_password);
    
        if ($arrPersona->id>0) {
            $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');

        }else{
            $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar persona');
        }
    }
            echo json_encode($arr_Respuesta);

}
}

?>