<div class="fo1">
    <form class="form1" action="" id="formActualizar">
        <input type="hidden" name="id_producto" id="id_producto">
        <input type="hidden" name="img" id="img">
        <h1 class="text-center mb-4">Editar Producto</h1>

        <div class="form-group">
            <label for="codigo">Código:</label>
            <input type="text" name="codigo" id="codigo" placeholder="Código" class="form-control" disabled>
        </div>

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="detalle">Detalle:</label>
            <input type="text" name="detalle" id="detalle" placeholder="Detalle" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" placeholder="Precio" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="categoria">Categoría:</label>
            <select name="categoria" id="categoria" class="form-control" required>
                <option>Seleccione</option>
            </select>
        </div>

        <div class="form-group">
            <label for="img">Imagen del Producto:</label>
            <input type="file" name="imagen" id="imagen" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="proveedor">Proveedor:</label>
            <select name="proveedor" id="proveedor" class="form-control" required>
                <option>Seleccione</option>
            </select>
        </div>
            <br>
            <br>
            
        <div class="d-flex justify-content-between">
            <button class="btn btn-outline-secondary" onclick="window.history.back();">
                <i class="bi bi-arrow-left-circle me-1"></i> Volver Atrás
            </button>
            <button type="button" class="btn btn-success" onclick="actualizar_producto();">
                <i class="bi bi-check-circle me-1"></i> Actualizar
            </button>
        </div>
    </form>
</div>
<style>
    
</style>
<script src="<?php echo BASE_URL; ?>views/js/functionsproducto.js"></script>
<script>listarcategorias();</script>
<script>listarproveedores();</script>

<script>
    const id_p = <?php $pagina = explode("/", $_GET['views']);
                    echo $pagina['1']; ?>;
    ver_producto(id_p);
</script>