
<link rel="stylesheet" href="<?php echo BASE_URL ?>views/plantilla/css/login.css">
<script>
        const base_url = '<?php echo BASE_URL?>';
    </script>
<div class="login-containerñ">
        <h2>Iniciar Sesión</h2>
        <form id="frm_iniciar_sesion" action="#" method="post">
            <div class="input-group">
                <label for="username">Usuario</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Ingresar</button>
        </form>
    </div>
  <script src="<?php echo BASE_URL;?>views/js/functionslogin.js"></script>