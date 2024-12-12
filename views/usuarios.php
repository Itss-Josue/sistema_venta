<div class="col-12 container mt-4">
    <h1 class="text-center mb-4 text-primary">Lista de Usuarios</h1>
    <table class="table table-bordered table-hover table-sm shadow-lg rounded animate__animated animate__fadeIn">
        <thead class="table-dark text-center">
            <tr>
                <th>Nro</th>
                <th>DNI</th>
                <th>Razón Social</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Departamento</th>
                <th>Código Postal</th>
                <th>Dirección</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="tbl_persona" class="text-center">
            
        </tbody>
    </table>
    <a href="<?php BASE_URL;?>PanelAdministrador" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left-circle"></i> Regresar
                </a>
</div>

<script src="<?php echo BASE_URL;?>views/js/functionspersona.js"></script>