<style>

/* Styling for the form container */
.form1 {
    background-color: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

/* Heading style */
h1 {
    font-size: 24px;
    color: #333;
    font-weight: 600;
    margin-bottom: 25px;
}

/* Label styling */
label {
    font-size: 14px;
    color: #666;
    margin-bottom: 8px;
    display: block;
}

/* Input fields */
.form-group {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    padding: 12px;
    font-size: 16px;
    border: 2px solid #ddd;
    border-radius: 8px;
    outline: none;
    transition: all 0.3s ease-in-out;
}

/* Input focus effect */
.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

/* Button styles */
.btn {
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 8px;
    text-align: center;
    transition: background-color 0.3s ease;
}

.btn-outline-secondary {
    border: 2px solid #6c757d;
    color: #6c757d;
    background-color: #fff;
}

.btn-outline-secondary:hover {
    background-color: #f8f9fa;
    border-color: #5a6268;
    color: #5a6268;
}

.btn-outline-primary {
    border: 2px solid #007bff;
    color: #007bff;
    background-color: #fff;
}

.btn-outline-primary:hover {
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
}

/* Flex layout for buttons */
.d-flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Responsive design for smaller screens */
@media (max-width: 576px) {
    .form1 {
        padding: 20px;
    }

    .btn {
        font-size: 14px;
        padding: 8px 15px;
    }

    h1 {
        font-size: 22px;
    }
}

</style>
<div class="fo1">
<form class="form1" action="" id="formRegistrarCat" style="width: 100%;">
    <h1 class="text-center mb-4">Registrar Nueva Categoria</h1>
    
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="detalle">Detalle:</label>
        <input type="text" name="detalle" id="detalle" placeholder="Detalle" class="form-control" required>
    </div>

    <div class="d-flex justify-content-between">
        <a href="<?php BASE_URL;?>PanelAdministrador" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left-circle"></i> Regresar
        </a>
        <button type="button" class="btn btn-outline-primary" onclick="registrarCategoria();">
            <i class="bi bi-check-circle"></i> Registrar
        </button>
    </div>
</form>

</div>
<script src="<?php  BASE_URL?>views/js/functionscategoria.js"></script>
<script>listarcategorias();</script>
<script>listarproveedores();</script>