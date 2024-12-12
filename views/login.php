
<link rel="stylesheet" href="<?php echo BASE_URL ?>views/plantilla/css/login.css">
<script>
        const base_url = '<?php echo BASE_URL?>';
    </script>
<div class="login-container">
<img src="./views/plantilla/img/logorojo.png" alt="Logo" class="logo">
    <h2>Iniciar Sesión</h2>
    <p>Usuario: 74322487</p>
    <p>Contraseña: 74322487</p>
    <form id="frm_iniciar_sesion" action="#" method="post">
        <div class="input-group">
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario" required>
        </div>
        <div class="input-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button  type="submit" class="login-button">Ingresar</button>
    </form>
</div>
<style>
    /* Estilos generales de la página */
body {
    background-color: #000000;  /* Fondo negro */
    font-family: 'Arial', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
/* Estilo para el contenedor de login */
.login-container {
    background-color: #ffffff;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
    transform: translateY(-50%);
    opacity: 0;
    animation: fadeIn 1s forwards;
}

/* Estilo para el logo */
.logo {
    width: 80px;  /* Ajusta el tamaño del logo */
    margin-bottom: 20px;
}

/* Título de la página de login */
.login-container h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
    font-weight: bold;
    animation: slideDown 0.5s ease-in-out;
}

/* Estilo de los campos de entrada */
.input-group {
    margin-bottom: 20px;
    text-align: left;
    position: relative;
}

.input-group label {
    font-size: 14px;
    color: #666;
    margin-bottom: 5px;
    display: block;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 2px solid #ccc;
    border-radius: 5px;
    outline: none;
    font-size: 16px;
    transition: border-color 0.3s;
}

.input-group input:focus {
    border-color: #007bff;
}

/* Estilo para el botón de ingreso */
.login-button {
    background-color: #007bff;
    color: #ffffff;
    padding: 12px;
    border: none;
    border-radius: 5px;
    width: 100%;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.login-button:hover {
    background-color: #0056b3;
}

/* Animaciones */
@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideDown {
    0% {
        opacity: 0;
        transform: translateY(-10px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>
  <script src="<?php echo BASE_URL;?>views/js/functionslogin.js"></script>