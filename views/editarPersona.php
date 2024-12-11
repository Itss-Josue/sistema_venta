<div class="container mt-5 animate__animated animate__fadeIn">
    <h1 class="text-center mb-4 text-primary">Editar Usuario</h1>
    <div class="card shadow border-0 p-4">
        <form action="" class="from-control" id="frm_editar">
        <input type="hidden" name="id_persona" id="id_persona">
            <div class="row">
                <!-- Campo: Número de Identidad -->
                <div class="col-md-6 mb-3">
                    <label for="nro_identidad" class="form-label">Número de Identidad:</label>
                    <input type="text" id="nro_identidad" name="nro_identidad" class="form-control" required>
                </div>
                <!-- Campo: Razón Social -->
                <div class="col-md-6 mb-3">
                    <label for="razon_social" class="form-label">Razón Social:</label>
                    <input type="text" id="razon_social" name="razon_social" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <!-- Campo: Teléfono -->
                <div class="col-md-6 mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono" class="form-control" required>
                </div>
                <!-- Campo: Correo Electrónico -->
                <div class="col-md-6 mb-3">
                    <label for="correo" class="form-label">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <!-- Campo: Departamento -->
                <div class="col-md-4 mb-3">
                    <label for="departamento" class="form-label">Departamento:</label>
                    <input type="text" id="departamento" name="departamento" class="form-control" required>
                </div>
                <!-- Campo: Provincia -->
                <div class="col-md-4 mb-3">
                    <label for="provincia" class="form-label">Provincia:</label>
                    <input type="text" id="provincia" name="provincia" class="form-control" required>
                </div>
                <!-- Campo: Distrito -->
                <div class="col-md-4 mb-3">
                    <label for="distrito" class="form-label">Distrito:</label>
                    <input type="text" id="distrito" name="distrito" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <!-- Campo: Código Postal -->
                <div class="col-md-6 mb-3">
                    <label for="cod_postal" class="form-label">Código Postal:</label>
                    <input type="number" id="cod_postal" name="cod_postal" class="form-control" required>
                </div>
                <!-- Campo: Dirección -->
                <div class="col-md-6 mb-3">
                    <label for="direccion" class="form-label">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <!-- Campo: Rol -->
                <div class="col-md-12 mb-3">
                    <label for="rol" class="form-label">Rol:</label>
                    <input type="text" id="rol" name="rol" class="form-control" required>
                </div>
            </div>

            <!-- Botones -->
            <div class="d-flex justify-content-between">
            <button class="btn btn-secondary" onclick="window.history.back();">
        <i class="bi bi-arrow-left-circle me-1"></i> Volver Atrás
    </button>
                <button type="button" class="btn btn-outline-primary" onclick="actualizar_persona();">
                    <i class="bi bi-check-circle"></i> Actualizar
                </button>
            </div>
        </form>
    </div>
</div>
<script>
    const id_p = <?php $pagina = explode("/", $_GET['views']);
                    echo $pagina['1']; ?>;
    ver_persona(id_p);
</script>

<script src="<?php echo BASE_URL?>views/js/functionspersona.js"></script>