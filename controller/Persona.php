<?php

 
require_once('../model/personaModel.php');
//instanciar la clase categoria model
$objPersona = new PersonaModel();

$tipo = $_REQUEST['tipo'];


if ($tipo=="registrar"){
    //print_r($_POST);
    if ($_POST) {
        $nro_identidad = $_POST['nro_identidad'];
        $razon_social = $_POST['razon_social'];
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
        echo json_encode($arr_Respuesta);
    }
}
}
if ($tipo=="listarTrabajadores") {
    //respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_personas = $objPersona->obtener_trabajador();
    if (!empty($arr_personas)) {
        //recoremos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_personas); $i++) { 
            $id_categoria = $arr_personas[$i]->id;
            $categoria = $arr_personas[$i]->razon_social;
            $opciones = '';
            $arr_personas[$i]->options = $opciones;
        }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_personas;
 }
    echo json_encode($arr_Respuesta);
}


if ($tipo=="listar") {
    $arr_respuesta = array('status'=>false,'contenido'=>'');
    $arr_proveedor =  $objPersona->obtenerproveedor();

    if (!empty($arr_proveedor)) {
        
        for ($i=0; $i < count($arr_proveedor); $i++) { 
            $rol_persona = $arr_proveedor[$i]->rol;
            $categoria = $arr_proveedor[$i]->razon_social;
            $opciones = '';
            $arr_proveedor[$i]->options = $opciones;
        }
        $arr_respuesta['status'] = true;
        $arr_respuesta['contenido'] = $arr_proveedor;
    }
    //$arr_respuesta['contenido']=$arr_proveedor;
    echo json_encode($arr_respuesta);
}
?>