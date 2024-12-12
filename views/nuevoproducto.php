
<div class="fo1">
<form class="form1" action="" id="formRegistrarProd">
<h3 class="text-center mb-4 ">Registrar Nuevo producto</h3>
    <div>
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo"  placeholder="Codigo" class="form-control" required>
    </div>
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"  placeholder="Nombre" class="form-control" required>
    </div>
    <div>
        <label for="detalle">Detalle:</label>
        <input type="text" name="detalle" id="detalle"  placeholder="Detalle" class="form-control" required>
    </div>
    <div>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio"  placeholder="Precio" class="form-control" required>
    </div>
    <div>
        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock"  placeholder="Stock" class="form-control" required>
    </div>
    <div>
        <label for="categoria">Categoría:</label>
        <select name="categoria" id="categoria" class="form-control" required>
            <option>Seleccione</option>
        </select>
    </div>
    <div>
        <label for="img">Imagen del Producto:</label>
        <input type="file" name="imagen" id="imagen"   class="form-control" required>
    </div>
    <div>
        <label for="proveedor">Proveedor:</label>
        <select name="proveedor" id="proveedor" class="form-control" required>
            <option>Seleccione</option>
        </select>
    </div>
    <br>
    <div class="d-flex justify-content-between">
                <a href="<?php BASE_URL;?>PanelAdministrador" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left-circle"></i> Regresar
                </a>
                <button type="button" class="btn btn-outline-primary" onclick="registrarProducto();">
                    <i class="bi bi-check-circle"></i> Registrar
                </button>
            </div>
</form>
</div>
<style>
    

/* Estilo del formulario */
.form1 {
    background: #fff;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
    animation: fadeIn 0.8s ease-in-out;
}

/* Estilo de entradas y selects */
.form1 input,
.form1 select {
    width: 100%;
    padding: 10px 15px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

/* Efecto hover en campos */
.form1 input:focus,
.form1 select:focus {
    border-color: #4e54c8;
    box-shadow: 0 0 5px rgba(78, 84, 200, 0.5);
    outline: none;
}


.form1 .btn:hover {
    background: #3a41a8;
}

.feedback.success {
    background-color: #d4edda;
    color: #155724;
}

.feedback.error {
    background-color: #f8d7da;
    color: #721c24;
}
</style>

<script src="<?php echo BASE_URL;?>views/js/functionsproducto.js"></script>
<script>listarcategorias();</script>
<script>listarproveedores();</script>
