
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
<style>
body {
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background: #000;
    color: #fff;
}

.header-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    background: #111;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    animation: fadeIn 0.8s ease-in-out;
}

.logo {
    width: 80px;
    transition: transform 0.3s ease;
}

.logo:hover {
    transform: scale(1.1);
}

.search-container {
    display: flex;
    align-items: center;
    flex-grow: 1;
    max-width: 500px;
    margin: 0 20px;
    position: relative;
}

.search-bar {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #444;
    border-radius: 4px;
    background: #222;
    color: #fff;
    outline: none;
    transition: box-shadow 0.3s ease;
}

.search-bar:focus {
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.8);
}

.search-btn {
    position: absolute;
    right: 10px;
    background: none;
    border: none;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
    transition: color 0.3s ease;
}

.search-btn:hover {
    color: #007bff;
}

.user-info {
    display: flex;
    align-items: center;
    gap: 15px;
}

.flag {
    width: 40px;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(255, 255, 255, 0.2);
}

.user-link, .cart-link, .logout-link, .admin-link {
    text-decoration: none;
    color: #fff;
    font-size: 14px;
    transition: color 0.3s ease, transform 0.3s ease;
}

.user-link:hover, .cart-link:hover, .logout-link:hover, .admin-link:hover {
    color: #007bff;
    transform: translateY(-2px);
}

.navbar {
    background: #111;
    border-top: 1px solid #444;
    padding: 10px 20px;
}

.nav-link {
    color: #fff;
    transition: color 0.3s ease;
}

.nav-link:hover {
    color: #007bff;
}

.navbar-toggler {
    background: #333;
    border: none;
    color: #fff;
    padding: 6px 10px;
    border-radius: 4px;
}

.navbar-toggler:hover {
    background: #444;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>
<body>
<header>
    <div class="header-container">
        <a href="<?php  BASE_URL ?>inicio" class="logo-link">
            <img src="./views/plantilla/img/logorojo.png" alt="Logo" class="logo">
        </a>
        <div class="search-container">
            <input type="text" placeholder="Busca tu producto" class="search-bar">
            <button class="search-btn">
                <i class="bi bi-search"></i>
            </button>
        </div>
        <div class="user-info">
            <div class="location">
                <img src="./views/plantilla/img/peru.jpeg" alt="Perú" class="flag">
                <span class="location-text">ES / PEN</span>
            </div>
            <a href="<?php BASE_URL ?>perfil" class="user-link">¡Hola, Josue!</a>
            <a href="carrito" class="cart-link">
                <i class="bi bi-cart"></i>
            </a>
            <a onclick="cerrar_sesion();" class="logout-link">Cerrar sesión</a>
        </div>
        <a href="<?php BASE_URL ?>PanelAdministrador" class="admin-link">
            <i class="bi bi-arrow-left-circle"></i> Panel de Administrador
        </a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="<?php echo BASE_URL ?>calzado">Calzados</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL ?>mejoresmarcas">Mejores Marcas</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL ?>modahombre">Moda Hombre</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL ?>contacto">Contáctanos</a></li>
                    <li class="nav-item dropdown">
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>modahombre">Moda Hombre</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>






