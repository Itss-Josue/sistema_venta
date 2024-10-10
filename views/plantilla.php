<?php

require_once "./config/config.php";

require_once "./controller/vistas_control.php";

$mostrar = new vistasControlador();
$vista = $mostrar->obtenerVistaControlador();
if($vista=="login" || $vista=="perfil" || $vista=="contacto" || $vista=="404" || $vista=="carrito" ){
    require_once "./views/".$vista.".php";
    }else{
        include "./views/include/header.php";
        include $vista;
        include "./views/include/footer.php";
}
        
?>