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

?>