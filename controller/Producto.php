<?php 
require_once('../model/productoModel.php');

$tipo = $_REQUEST['tipo'];

// instancio de la clase modeloproducto
$objProducto = new ProductoModel();
if($tipo=="registrar"){

    //print_r($_POST);

    if($_POST){
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $fecha_v = $_POST['fecha_v'];
        $imagen = $_['imagen'];
        $proveedor = $_POST['proveedor'];
        if ($codigo=="" || $nombre=="" || $detalle=="" || $precio=="" || $stock=="" || $categoria=="" 
        || $fecha_v=="" || $imagen=="" || $proveedor=="") {
          // respuesta
            $arr_Respuesta = array('status'=> false,
            'mensaje'=>'Error, campos vacios');
        } else{
            $arrProducto = 
            $objProducto->registrarProducto($codigo, $nombre,
             $detalle, $precio, $stock, $categoria,
              $fecha_v, $imagen, $proveedor);
              if ($arrProducto->id>0) {

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
if($tipo=="listar"){

}
?>
