<?php
session_start();
class vistaModelo{
    protected static function obtener_vista($vista){
       $palabras_permitidas =['usuarios','calzado','productos','carrito','contacto','detallesproducto','electronica','mejoresmarcas','modahombre','inicio','perfil','editar-producto','nuevoproducto','nuevacategoria','nuevacompra','nuevousuario','compras'];
       /* if(!isset($_SESSION['sesion_ventas_id'])) {
            return "login";
       } */
       if (in_array($vista,$palabras_permitidas)){
            if(is_file("./views/".$vista.".php")){
                $contenido = "./views/".$vista.".php";
            }else{
                $contenido = "404";
            }

       }elseif ($vista=="login" || $vista=="index"){
        $contenido = "login";

       }else{
         $contenido = "404";
       }
       return $contenido;
    }

}
?>