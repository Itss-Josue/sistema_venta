
<h1 style="margin-top:5%; margin-left:5%;" >Tabla de productos</h1>
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
    <button class="btn btn-secondary" onclick="window.history.back();">
        <i class="bi bi-arrow-left-circle me-1"></i> Volver Atrás
    </button>
</div>

<script src="<?php BASE_URL?>views/js/functionsproducto.js"></script>