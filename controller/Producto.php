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
   //respuesta 
   $arr_Respuesta = array('status' => false, 'contenido' => '');
   $arr_Productos = $objProducto->obtenerproducto();
   if (!empty($arr_Productos)) {

       // recorremos el array para agregar las opciones de las categorias.
       for ($i=0; $i < count($arr_Productos); $i++) { 

        $id_proveedor = $arr_Productos[$i]->$id_proveedor;
        $r_proveedor = $objPersona->obtener_proveedor_id($id_proveedor);
        $arr_Productos[$i]->proveedor=$r_proveedor;
        
           $id_categoria = $arr_Productos[$i]->id_categoria;
           $r_categoria = $objCategoria->obtener_categoria($id_categoria);
           $arr_Productos[$i]->categoria=$r_categoria;

           $id_producto = $arr_Productos[$i]->id;
           $producto = $arr_Productos[$i]->nombre;
           $opciones = '';
           $arr_Productos[$i]->options = $opciones;
       }
       $arr_Respuesta['status'] = true;
       $arr_Respuesta['contenido'] = $arr_Productos;
   }
   echo json_encode($arr_Respuesta);
}
if ($tipo == "registrar") {

  /* print_r($_POST);
    echo $_FILES['imagen']['name']; */


  if ($_POST) {
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $categoria = $_POST['categoria'];
    $fecha_v = $_POST['fecha_v'];
    $imagen = 'imagen';
    $proveedor = $_POST['proveedor'];
    if (
      $codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $categoria == ""
      || $fecha_v == "" || $imagen == "" || $proveedor == ""
    ) {
      // respuesta
      $arr_Respuesta = array(
        'status' => false,
        'mensaje' => 'Error, campos vacios'
      );
    } else {
      $arrProducto =
        $objProducto->registrarProducto(
          $codigo,$nombre, $detalle,$precio,$stock,$categoria,$fecha_v,$imagen,$proveedor
        );
      if ($arrProducto->id > 0) {

        $arr_Respuesta = array(
          'status' => true,
          'mensaje' => 'Registro exitoso'
        );
        // Cargar archivo
        $archivo = $_FILES['imagen']['tmp_name'];

        $destino = './assets/img_productos/';
        $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
        $nombre = $arrProducto->id . "." . $tipoArchivo;

        if (move_uploaded_file($archivo, $destino . $nombre)) {
          $arr_imagen = $objProducto->actualizar_imagen($id, $nombre);
        } else {
          $arr_Respuesta = array(
            'status' => true,
            'mensaje' => 'Registro exitoso, error al subir imagen'
          );
        }
      } else {
        $arr_Respuesta = array(
          'status' => false,
          'mensaje' => 'Error al registrar producto'
        );
      }
      echo json_encode($arr_Respuesta);
    }
  }
}