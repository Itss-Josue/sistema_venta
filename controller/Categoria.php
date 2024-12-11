<?php

require_once('../model/categoriaModel.php');
//instanciar la clase categoria model
$objCategoria = new CategoriaModel();

$tipo = $_REQUEST['tipo'];

if ($tipo == "listar") {
    //respuesta 
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Categorias = $objCategoria->obtener_categorias();
    if (!empty($arr_Categorias)) {

        // recorremos el array para agregar las opciones de las categorias.
        for ($i=0; $i < count($arr_Categorias); $i++) { 
            $id_categoria = $arr_Categorias[$i]->id;
            $categoria = $arr_Categorias[$i]->nombre;
            $opciones = '<a class="btn btn-primary btn-sm" href=" ' . BASE_URL . 'editarCategoria/' . $id_categoria . '">Editar<i class="fas fa-edit"></i></a>
                    <button class="btn btn-danger btn-sm" onclick="eliminar_categoria('. $id_categoria .');"<i class="fas fa-trash-alt"></i>Eliminar</button>';
            $arr_Categorias[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Categorias;
    }
    echo json_encode($arr_Respuesta);
}

if($tipo=="registrar"){
    // print_r($_POST);
    // echo $_FILES['imagen']['tmp_name'];

    if($_POST){
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
       
        if ( $nombre=="" || $detalle=="") {
            $arr_Respuesta = array('status'=> false,
            'mensaje'=>'Error, campos vacios');
        } else{
            $arrCategoria = 
            $objCategoria->registrarCategoria( $nombre,
             $detalle);
              if ($arrCategoria->id>0) {
                $arr_Respuesta = array('status'=> true,
                'mensaje'=>'Registro exitoso');
              
             } else {
                $arr_Respuesta = array('status'=> false,
                'mensaje'=>'Error al registrar producto');
              }
              echo json_encode($arr_Respuesta);
        }
    }
}


if($tipo == "ver") {
    //print_r($_POST);
    $id_categoria = $_POST['id_categoria'];
    $arr_Respuesta = $objCategoria->verCategoria($id_categoria);
   // print_r($arr_Respuesta);
   if (empty($arr_Respuesta)) {
       $response = array('status' => false, 'mensaje' => "ErroR¡¡ no hay informacion");
   }else{
    $response = array('status' => true, 'mensaje'=>"datos encontrados", 'contenido' => $arr_Respuesta);
   }
   echo json_encode($response);
}

if ($tipo == "actualizar") {
    // Obtener los datos del formulario
    $id_categoria = $_POST['id_categoria'];
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];

    if ($id_categoria == "" || $nombre == "" || $detalle == "") {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios'); //respuesta

    } else {
        $arrCategoria = $objCategoria->actualizarCategoria($id_categoria, $nombre, $detalle);
        if ($arrCategoria->p_id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');

        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar categoria');
        }
    }
    echo json_encode($arr_Respuesta);
}

?>