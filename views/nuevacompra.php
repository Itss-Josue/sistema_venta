
    <title>Formulario de Venta</title>

    <div class="container mt-5">
        <h2>Formulario de Venta</h2>
        <form action="/ruta_de_tu_servidor" method="POST">
            <div class="form-group">
                <label for="id_producto">ID Producto:</label>
                <input type="text" id="idproducto" name="idproducto" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" class="form-control" min="1" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" class="form-control" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="id_trabajador">ID Trabajador:</label>
                <input type="text" id="idtrabajador" name="idtrabajador" class="form-control" required>
            </div>

            <button type="button" class="btn btn-success" onclick="registrarCompra();">Registrar</button>
        </form>
    </div>
    <script src="<?php echo BASE_URL;?>views/js/functionscompra.js"></script>
<script>listarcategorias();</script>
<script>listarproveedores();</script>