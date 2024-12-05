<div class="fo1">
<form class="form1" action="" id="formRegistrarCat" style="width: 100%;">
<h1 class="text-center mb-4 ">Editar categoria</h1>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="detalle">Detalle:</label>
            <input type="text" name="detalle" id="detalle" placeholder="Detalle" class="form-control" required>
        </div>
        <button type="button" class="btn btn-success" onclick="ActualizarCategoria();">Actualizar</button>
    </form>
</div>
<script src="<?php echo BASE_URL;?>views/js/functionscategoria.js"></script>
<script>listarcategorias();</script>
<script>listarproveedores();</script>