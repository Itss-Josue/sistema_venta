<?php 
require_once('../model/productoModel.php');

$tipo = $_REQUEST['tipo'];

// instancio de la clase modeloproducto
$objProducto = new ProductoModel();
if($tipo=="registrar"){
    print_r($_POST);
    if($_POST){
        $codigo = $_POST['codigo'];
        $codigo = $_POST['nombre'];
        $codigo = $_POST['detalle'];
        $codigo = $_POST['precio'];
        $codigo = $_POST['stock'];
        $codigo = $_POST['categoria'];
        $codigo = $_POST['fecha_v'];
        $codigo = $_POST['imagen'];
        $codigo = $_POST['proveedor'];
        if ($codigo=="" || $nombre=="" || $detalle=="" || $precio=="" || $stock=="" || $categoria=="" 
        || $fecha_v=="" || $imagen=="" || $proveedor=="") {
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
        }
    }
}
if($tipo=="listar"){

}
?>
