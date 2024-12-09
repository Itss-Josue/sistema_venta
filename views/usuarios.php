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
<style>
    /* Tabla */
.table {
    border-radius: 12px;
    overflow: hidden;
}

.table-hover tbody tr:hover {
    background-color: #f1f1f1;
    transition: background-color 0.3s ease;
}

/* Encabezado de la tabla */
.table-dark th {
    background: linear-gradient(45deg, #4e73df, #224abe);
    color: #fff;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    font-size: 1rem;
    padding: 12px;
}

/* Filas de la tabla */
tbody tr {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

tbody tr:hover {
    transform: translateY(-3px);
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
}

/* Estilo para Acciones */
#tbl_persona td:last-child {
    display: flex;
    justify-content: center;
    gap: 10px;
}

/* Botones de Acciones */
.action-btn {
    border: none;
    border-radius: 5px;
    padding: 5px 10px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.action-btn:hover {
    transform: scale(1.05);
}

/* Botón específico */
.edit-btn {
    background-color: #4e73df;
}

.edit-btn:hover {
    background-color: #375a7f;
}

.delete-btn {
    background-color: #e74a3b;
}

.delete-btn:hover {
    background-color: #c0392b;
}

</style>
<script src="<?php echo BASE_URL?>views/js/functionspersona.js"></script>