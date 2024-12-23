<?php
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];
// instancio de la clase modeloproducto
$objProducto = new ProductoModel();
$objCategoria = new CategoriaModel();
$objPersona = new PersonaModel();

if ($tipo == "listar") {
  $arr_Respuesta = array('status' => false, 'contenido' => '');
  $arrProducto = $objProducto->obtenerProductos();
  if (!empty($arrProducto)) { // recorremos el array para agregar las opciones de las categorias.
    for ($i = 0; $i < count($arrProducto); $i++) {

      $id_categoria = $arrProducto[$i]->id_categoria;
      $r_categoria = $objCategoria->obtener_categoria_id($id_categoria);
      $arrProducto[$i]->categoria = $r_categoria;

      $id_proveedor = $arrProducto[$i]->id_proveedor;
      $r_proveedor = $objPersona->obtener_proveedor_id($id_proveedor);
      $arrProducto[$i]->proveedor = $r_proveedor;

      $id_producto = $arrProducto[$i]->id;
      $producto = $arrProducto[$i]->nombre;
      // localhost/editar-producto/4                                                                 // eliminar producto(1)
      $opciones = '<a class="btn btn-primary btn-sm" href=" ' . BASE_URL . 'editar-producto/' . $id_producto . '">Editar<i class="fas fa-edit"></i></a>
                    <button class="btn btn-danger btn-sm" onclick="eliminar_producto('. $id_producto .');"<i class="fas fa-trash-alt"></i>Eliminar</button>';
      $arrProducto[$i]->options = $opciones;
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arrProducto;
  }
  echo json_encode($arr_Respuesta);
}
if ($tipo == "registrar") {
  if ($_POST) {
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $categoria = $_POST['categoria'];
    $imagen = 'imagen';
    $proveedor = $_POST['proveedor'];

    if ($codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $categoria == "" || $imagen == "" || $proveedor == "") {
      // respuesta
      $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios');
    } else {
      //CARGAR ARCHIVO
      $archivo = $_FILES['imagen']['tmp_name'];
      $destino = '../assets/img_productos/';
      $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
      $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $imagen, $proveedor, $tipoArchivo);

      if ($arrProducto->id_n > 0) {
        $newid = $arrProducto->id_n;
        $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
        $nombre = $arrProducto->id_n . "." . $tipoArchivo;

        if (move_uploaded_file($archivo, $destino . '' . $nombre)) {
        } else {
          $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso, error al subir imagen');
        }
      } else {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar producto');
      }
      echo json_encode($arr_Respuesta);
    }
  }
}


if ($tipo == "ver") {
  //print_r($_POST);
  $id_producto = $_POST['id_producto'];
  $arr_Respuesta = $objProducto->verProducto($id_producto);
  //print_r($arr_Respuesta);
  if (empty($arr_Respuesta)) {
      $response = array('status' => false, 'mensaje' => "Error, no hay informacion");
  } else {
      $response = array('status' => true, 'mensaje' => "datos encontrados", 'contenido' => $arr_Respuesta);
  }
  echo json_encode($response);
}


if ($tipo == "actualizar") {
  //print_r($_POST);
  //print_r($_FILES['imagen']['tmp_name']);

  $id_producto = $_POST['id_producto'];
  $img = $_POST['img'];
  $nombre = $_POST['nombre'];
  $detalle = $_POST['detalle'];
  $precio = $_POST['precio'];
  $categoria = $_POST['categoria'];
  $proveedor = $_POST['proveedor'];
  if ($id_producto == ""|| $img == "" || $nombre == "" || $detalle == "" || $precio == "" || $categoria == "" ||  $proveedor == "") {
      //repuesta
      $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
  } else {
      $arrProducto = $objProducto->actualizarProducto($id_producto, $nombre, $detalle, $precio, $categoria, $proveedor);
      if ($arrProducto->p_id > 0) {
          $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');

          if ($_FILES['imagen']['tmp_name'] != "") {
              unlink('../assets/img_productos/' . $img);

              //cargar archivos
              $archivo = $_FILES['imagen']['tmp_name'];
              $destino = '../assets/img_productos/';
              $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
              if (move_uploaded_file($archivo, $destino . '' . $id_producto.'.'.$tipoArchivo)) {
              }
          }
      } else {
          $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar producto');
      }
  }
  echo json_encode($arr_Respuesta);
}


if ($tipo == 'eliminar') {
  /* print_r($_POST); */
  $id_producto = $_POST['id_producto'];
  $arr_Respuesta = $objProducto->eliminarProducto($id_producto);
  //Respuesta
 if (empty($arr_Respuesta)) {
    $response = array('status' => false);
 }else {
  $response = array('status' => true);
 }
 echo json_encode($response);
}