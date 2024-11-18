<form id="frmRegistrarCompra" action="" class="form-control"    >
    <div class="form-group">   
        
    <div class="campo-contenedor">
            <label for="producto" class="etiqueta-flotante">producto:</label>
            <select name="id_producto" id="id_producto"  class="entrada-destacada">
                <option  class="entrada-destacada" >Seleccione</option>
            </select>
        </div>
        <label for="cantidad">cantidad:</label><br>
        <input id="cantidad" name="cantidad" type="number" placeholder="cantidad" required>

        <label for="precio">precio:</label><br>
        <input id="precio" name="precio" type="number" placeholder="Precio" required>

        <div class="campo-contenedor">
            <label for="trabajador" class="etiqueta-flotante">Trabajador:</label>
            <select name="id_trabajador" id="id_trabajador"  class="entrada-destacada">
                <option  class="entrada-destacada" >Seleccione</option>
            </select>
        </div>

        <button type="button" class="btn btn-success" onclick="registrarCompra();">Registrar</button>
    </div>
</form>

<script src="<?php echo BASE_URL;?>views/js/functions_compras.js"></script>
<script>listarproductos();</script>
<script>listartrabajadores();</script>