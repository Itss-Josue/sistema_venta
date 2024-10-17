
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iitss.ventas</title>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>views/plantilla/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>views/plantilla/js">
  </head>
  <body>
    <header>
      <div class="menu logo-nav">
        <a href="<?php echo BASE_URL?>inicio" class="logo">Iitss.Ventas</a>
        <label class="menu-icon"><span class="fas fa-bars icomin"></span></label>
        <nav class="navigation">
          <ul>
            <li><a href="<?php echo BASE_URL?>nosotros">Nosotros</a></li>
            <li><a href="<?php echo BASE_URL?>productos">Productos</a></li>
            <li><a href="<?php echo BASE_URL?>contacto">Contacto</a></li>
            <li class="search-icon">
              <input type="search" placeholder="Search">
              <label class="icon">
                <span class="fas fa-search"></span>
              </label>
            </li>
            <li class="car"><a href="<?php echo BASE_URL?>carrito" >
              <svg class="bi bi-cart3" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg></a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
