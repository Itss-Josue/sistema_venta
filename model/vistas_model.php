<?php

class vistaModelo{
    protected static function obtener_vista($vista){
       $palabras_permitidas =['usuario','calzado','producto','carrito','detalles_producto','electronica','mejoresmarcas','modahombre','inicio'];
       if (in_array($vista,$palabras_permitidas)){
            if(is_file("./views/".$vista.".php")){
                $contenido = "./views/".$vista.".php";
            }else{



                
                $contenido = "404";
            }

         }elseif ($vista=="login" || $vista=="index"){
        $contenido = "login";
         }elseif ($vista=="perfil" || $vista=="index"){
        $contenido = "perfil";
         }elseif ($vista=="contacto" || $vista=="index"){
        $contenido = "contacto";

       }else{
         $contenido = "404";
       }
       return $contenido;
    }

}

?>