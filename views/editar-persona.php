<div class="container mt-5"> 
<h1 class="text-center mb-4">Editar Usuario</h1>
<form action="" class="from-control" id="frmRegistrar">
<div class="mb-3">
        <label for="">Numero de Identidad: </label>
        <input type="text" id="nro_identidad" name="nro_identidad" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Razon social: </label>
        <input type="text" id="razon_social" name="razon_social" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Telefono: </label>
        <input type="text" id="telefono" name="telefono" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Correo electronico: </label>
        <input type="text" id="correo" name="correo" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Departamento: </label>
        <input type="text" id="departamento" name="departamento" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Provincia: </label>
        <input type="text" id="provincia" name="provincia" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Distrito: </label>
        <input type="text" id="distrito" name="distrito" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Codigo postal: </label>
        <input type="number" id="cod_postal" name="cod_postal" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Direccion: </label>
        <input type="text" id="direccion" name="direccion" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Rol: </label>
        <input type="text" id="rol" name="rol" class="form-control" required>
    </div>
   
    <button type="button" class="mb-3 btn btn-outline-info" onclick="ActualizarUsuario();"><i class="bi bi-check-circle"></i>Actualizar</button>
</form>
</div>

<script src="<?php echo BASE_URL?>views/js/functionspersona.js"></script>