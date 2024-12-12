

<div style="margin-top:5%; width: 30%;" class="container">
    <h1>Registrar Compras</h1>

    <form action="" id="formRegistrarCompras">
        <label for="id_producto">Producto:</label>
        <select name="id_producto" id="id_producto" required>
            <option value="" disabled selected>Seleccione</option>
        </select>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" placeholder="Ingrese la cantidad" required>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" placeholder="Ingrese el precio" required>

        <label for="id_trabajador">Trabajador:</label>
        <select name="trabajador" id="trabajador" required>
            <option value="" disabled selected>Seleccione</option>
        </select>
<br>
<br>
        <div class="button-group">
            <button type="button" class="btn btn-outline-secondary" onclick="window.history.back();">Regresar</button>
            <button type="button" class="btn btn-outline-info" onclick="registrar_compra();">Registrar</button>
        </div>
    </form>
</div>

<style>
    .container {
        max-width: 200px;
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 15px;
        margin: auto;
        animation: fadeIn 0.5s ease-out;
    }

    h1 {
        font-size: 1.25rem;
        color: #007bff;
        text-align: center;
        margin-bottom: 15px;
    }

    label {
        color: #495057;
        margin-bottom: 5px;
        display: block;
        font-size: 0.9rem;
    }

    input, select {
        width: 100%;
        padding: 6px 10px;
        margin-bottom: 10px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 0.85rem;
        transition: box-shadow 0.3s ease;
    }

    input:focus, select:focus {
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        border-color: #80bdff;
    }

    .btn {
        width: 40%;
        padding: 6px;
        font-size: 0.8rem;
        border-radius: 5px;
        transition: transform 0.2s ease, background-color 0.2s ease;
    }

    .button-group {
        display: flex;
        justify-content: space-between;
    }
</style>
<script src="<?php BASE_URL?>views/js/functionscompra.js"></script>
<script>listar_productos();</script>
<script>listar_trabajadores();</script>