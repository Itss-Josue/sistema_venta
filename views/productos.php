
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nro</th>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Stock</th>
                <th scope="col">Categoria</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody id="tbl_producto">
            <tr>
                <td>1</td>
                <td>12345</td>
                <td>Producto</td>
                <td>10</td>
                <td>categoria</td>
                <td>yo</td>
                <td>
                    <button class="btn btn-sm btn-primary">Editar</button>
                    <button class="btn btn-sm btn-danger">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script src="<?php echo BASE_URL;?>views/js/functionsproducto.js"></script>