<?php
require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];
//instanciar la clase categoria model
$objPersona = new PersonaModel();

if ($tipo == "listar_p") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrPersona = $objPersona->obtenerPersona();

    if (!empty($arrPersona)) {
        for ($i = 0; $i < count($arrPersona); $i++) {

            $id_persona =  $arrPersona[$i]->id;
            $nro_identidad =  $arrPersona[$i]->nro_identidad;
            $razon_social =  $arrPersona[$i]->razon_social;
            $telefono =  $arrPersona[$i]->telefono;
            $correo =  $arrPersona[$i]->correo;
            $departamento =  $arrPersona[$i]->departamento;
            $cod_postal =  $arrPersona[$i]->cod_postal;
            $direccion =  $arrPersona[$i]->direccion;
            $rol =  $arrPersona[$i]->rol;
            $opciones = '<a class="btn btn-primary btn-sm" href=" ' . BASE_URL . 'editarPersona/' . $id_persona . '">Editar<i class="fas fa-edit"></i></a>
                    <button class="btn btn-danger btn-sm" onclick="eliminar_persona('. $id_persona .');"<i class="fas fa-trash-alt"></i>Eliminar</button>';
            $arrPersona[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] =  $arrPersona;
    }
    echo json_encode($arr_Respuesta); //convertir en formato -- 
}

if ($tipo == "registrar") {
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
        if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" || $departamento == "" || $provincia == "" ||  $distrito == "" || $cod_postal == "" || $direccion == "" || $rol == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios'); //respuesta
        } else {
            $arrPersona = $objPersona->registrarUsuario($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $secure_password);

            if ($arrPersona->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar persona');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}
if ($tipo == "listarTrabajadores") {
    //respuesta
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_personas = $objPersona->obtener_trabajador();
    if (!empty($arr_personas)) {
        //recoremos el array para agregar las opciones de las categorias
        for ($i = 0; $i < count($arr_personas); $i++) {
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


if ($tipo == "listar") {
    $arr_respuesta = array('status' => false, 'contenido' => '');
    $arr_proveedor =  $objPersona->obtenerproveedor();

    if (!empty($arr_proveedor)) {

        for ($i = 0; $i < count($arr_proveedor); $i++) {
            $rol_persona = $arr_proveedor[$i]->id;
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

// RECIEN AGREGADO

if ($tipo == "ver_persona") {
    $id_Persona = $_POST['id_persona'];
    $arr_Respuesta = $objPersona->verPersonas($id_Persona);
    if (empty($arr_Respuesta)) {
        $response = array('status' => false, 'mensaje' => 'Error, no hay información');
    } else {
        $response = array('status' => true, 'mensaje' => 'Datos encontrados', 'contenido' => $arr_Respuesta);
    }
    echo json_encode($response);
}
if ($tipo == "actualizar_persona") {
    if ($_POST) {
        $id_persona = $_POST['id_persona'];
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

        if ($nro_identidad == "" || $razon_social == "" || $telefono == "" ||
            $correo == "" || $departamento == "" || $provincia == "" ||
            $distrito == "" || $cod_postal == "" || $direccion == "" ||
            $rol == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
        } else {
            $arrPersona = $objPersona->actualizarPersona(
                $id_persona,
                $nro_identidad,
                $razon_social,
                $telefono,
                $correo,
                $departamento,
                $provincia,
                $distrito,
                $cod_postal,
                $direccion,
                $rol
            );
            if ($arrPersona) {
                $arr_Respuesta = array(
                    'status' => true,
                    'mensaje' => 'Actualización Exitosa'
                );
            } else {
                $arr_Respuesta = array(
                    'status' => false,
                    'mensaje' => 'Error, inténtelo de nuevo'
                );
            }
        }
        echo json_encode($arr_Respuesta);
    }
}

if ($tipo == "eliminar") {
        $id_persona = $_POST['id_persona'];
        $arrPersona = $objPersona->eliminarPersona($id_persona);

        if (empty($arr_Respuesta)) {
            $response = array('status' => false);
         }else {
          $response = array('status' => true);
         }
         echo json_encode($response);
        
    }