
    <div class="container mt-5">
        <h2>Formulario de Registro de Usuario</h2>
        <form action="/ruta_de_tu_servidor" method="POST">
            <div class="form-group">
                <label for="nro_identidad">Nro. Identidad:</label>
                <input type="text" id="nro_identidad" name="nro_identidad" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="razon_social">Razón Social:</label>
                <input type="text" id="razon_social" name="razon_social" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="departamento">Departamento:</label>
                <input type="text" id="departamento" name="departamento" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="provincia">Provincia:</label>
                <input type="text" id="provincia" name="provincia" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="distrito">Distrito:</label>
                <input type="text" id="distrito" name="distrito" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="cod_postal">Código Postal:</label>
                <input type="text" id="cod_postal" name="cod_postal" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="rol">Rol:</label>
                <input type="text" id="rol" name="rol" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="button" class="btn btn-success" onclick="registrarUsuario();">Registrar</button>
        </form>
    </div>
    
    <script src="<?php echo BASE_URL;?>views/js/functionspersona.js"></script>