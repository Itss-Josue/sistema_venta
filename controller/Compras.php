<?php

require_once('../model/comprasModel.php');
require_once('../model/productoModel.php');
require_once('../model/personaModel.php');

$objCompras = new ComprasModel();
$objCompras = new ProductoModel();
$objCompras = new PersonaModel();

if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrCompras = $objCompras->obtenerCompras();

    if (!empty($arrCompras)) {
        for ($i = 0; $i < count($arrCompras); $i++) {
            $id_compra = $arrCompras[$i]->id;
            $id_producto = $arrCompras[$i]->id_producto;
            $cantidad = $arrCompras[$i]->cantidad;
            $precio = $arrCompras[$i]->precio;
            $id_trabajador = $arrCompras[$i]->id_trabajador;

            $id_producto = $arrCompras[$i]->id;
            $r_producto = $objProducto->obtener_producto_id($id_producto);
            $arrCompras[$i]->producto=$r_producto;

            $id_trabajador = $arrCompras[$i]->id_trabajador;
            $r_trabajador = $objPersona->obtener_trabajador_id($id_trabajador);
            $arrCompras[$i]->trabajador=$r_trabajador;

            $opciones = '';
            $arrCompras[$i]->options = $opciones;
            
        }
            $arr_Respuesta['status'] = true;
            $arr_Respuesta['contenido'] =  $arrCompras;
    }
    echo json_encode($arr_Respuesta); //convertir en formato -- 
}

if ($tipo == "registrar") {
    if ($_POST) {
        $id_producto = $_POST['id_producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio']; 
        $trabajador = $_POST['trabajador'];
        if (
            $id_producto == "" || $cantidad == "" || $precio == "" || $trabajador == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios');
        } else {
            $arrProducto = $objCompras->registrarCompras($id_producto, $cantidad, $precio, $trabajador);
            if ($arrProducto->id>0) {
            $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
        }else{
            $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar persona');
        }
    }
            echo json_encode($arr_Respuesta);

}
}

?>