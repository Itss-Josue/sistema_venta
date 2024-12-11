
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iitss.ventas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>views/plantilla/css/estilos.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>views/plantilla/css/login.css">
    <script>
        const base_url = '<?php echo BASE_URL?>';
    </script>
</head>
<body>
    <header>
        <div class="header-container">
            <a href="<?php echo BASE_URL?>inicio">
                <img src="./views/plantilla/img/logo1.jpeg" class="logo" width="100">
            </a>
            <input type="text" placeholder="Busca tu producto" class="search-bar">
            <div class="user-info">
                <img src="./views/plantilla/img/peru.jpeg" alt="Perú" class="flag" width="60">
                <span>ES/ PEN</span>
                <a href="<?php echo BASE_URL?>perfil" class="a" style="text-decoration: none;">
                    <span>¡Hola, Josue!</span>
                </a>
                <a href="carrito">
                    <img src="./views/plantilla/img/carr.jpeg" alt="Perú" class="flag" width="60" height="50">
                </a>
                <a onclick="cerrar_sesion();">Cerrar sesion</a>
                
            </div>
            <a style="margin-left:5%;" href="<?php BASE_URL;?>PanelAdministrador" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left-circle"></i> Panel de Administrador
                </a>
        </div>
        <nav style="background: black;" class="navbar navbar-expand-lg ">
            <div class="container-fluid row d-block">
                <div class="col-12">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a style="color: white;" class="nav-link active" aria-current="page"
                                    href="<?php echo BASE_URL ?>calzado">Calzados</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: white;" class="nav-link" href="<?php echo BASE_URL?>mejoresmarcas">Mejores Marcas

                                </a>
                            </li>
                            <li class="nav-item">
                                <a style="color: white;" class="nav-link active" aria-current="page"
                                    href="<?php echo BASE_URL?>modahombre">Moda
                                    Hombre</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: white;" class="nav-link active" aria-current="page"
                                    href="<?php echo BASE_URL?>electronica">Electronica</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: white;" class="nav-link active" aria-current="page"
                                    href="<?php echo BASE_URL?>contacto">Contactanos</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a style="color: white;" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Más
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL?>modahombre">Moda Hombre</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL?>modaniños">Moda Niños</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        
    </header>





