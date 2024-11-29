
<div class="fo1">

<form class="form1" action="" id="formRegistrarProd">
<h1 class="text-center mb-4 ">Editar Producto</h1>
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
        <label for="categoria">Categoría:</label>
        <select name="categoria" id="categoria" class="form-control" required>
            <option>Seleccione</option>
        </select>
    </div>
    <div>
    <label for="Fecha de Vencimiento">Fecha de Vencimiento:</label><br>
    <input type="date" name="fecha_v" id="fecha_v" placeholder="Fecha de Vencimiento" class="form-control" required>
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
    <button type="button" class="btn btn-success" onclick="actualizar_producto();">Registrar</button>
</form>
</div>
<script src="<?php echo BASE_URL;?>views/js/functionsproducto.js"></script>
<script>listar_categorias();</script>
<script>listarProveedores();</script>
<script>
    const id_p=<? $pagina=explode("/", $_GET['views']); echo $pagina['1']; ?>;
    ver_producto(id_p);
</script>

