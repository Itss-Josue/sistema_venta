
<h1 style="margin-top:5%; margin-left:5%;" >Tabla de productos</h1>
<a style="margin-left:5%;" href="<?php BASE_URL;?>PanelAdministrador" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left-circle"></i> Regresar
                </a>
<div style="padding:5%;" class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
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
                
            </tr>
        </tbody>
    </table>
</div>

<script src="<?php echo BASE_URL;?>views/js/functionsproducto.js"></script>