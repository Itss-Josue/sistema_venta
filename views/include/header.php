<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="<?php  echo BASE_URL?> views/plantilla/css/estilos.css">

     
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body>
    <header>
        <div class="header-container">
            <a href="Inicio.html">
                <img src="img/logo2.jpeg" class="logo" width="100">
            </a>
            <input type="text" placeholder="Busca tu producto" class="search-bar">
            <div class="user-info">
                <img src="img/peru.jpeg" alt="Perú" class="flag" width="60">
                <span>ES/ PEN</span>
                <a href="perfil.html" class="a" style="text-decoration: none;">
                    <span>¡Hola, Josue!</span>
                </a>
                <a href="carrito.html">
                    <img src="img/carr.jpeg" alt="Perú" class="flag" width="60" height="50">
                </a>

            </div>
        </div>
        <nav style="background: black;" class="navbar navbar-expand-lg ">
            <div class="container-fluid row d-block">
                <div class="col-12">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a style="color: white;" class="nav-link active" aria-current="page"
                                    href="calzado.html">Calzados</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: white;" class="nav-link" href="mejoresmarcas.html">Mejores Marcas

                                </a>
                            </li>
                            <li class="nav-item">
                                <a style="color: white;" class="nav-link active" aria-current="page"
                                    href="modahombre.html">Moda
                                    Hombre</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: white;" class="nav-link active" aria-current="page"
                                    href="electronica.html">Electronica</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: white;" class="nav-link active" aria-current="page"
                                    href="contacto.html">Contactanos</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a style="color: white;" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Más
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Moda Hombre</a></li>
                                    <li><a class="dropdown-item" href="#">Moda Mujeres</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Moda Niños</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>





