<div class="container" style="background-color: #f8f9fa; margin-top: 70px;">
    <h1 class="text-center mt-5 display-4">Panel de Administración</h1>
    <div class="row g-4 mt-4">
        <!-- Usuario -->
        <div class="col-md-4">
            <div class="card border-0 shadow h-100">
                <div class="card-header bg-primary text-white fw-bold">Usuario</div>
                <div class="card-body text-center">
                    <a href="<?php BASE_URL;?>nuevousuario" class="btn btn-outline-primary w-100 my-2 animate__animated animate__fadeInLeft">
                        <i class="fa fa-user-plus"></i> Registrar Usuario
                    </a>
                    <a href="<?php BASE_URL;?>usuarios" class="btn btn-outline-secondary w-100 my-2 animate__animated animate__fadeInLeft">
                        <i class="fas fa-users"></i> Ver Usuarios
                    </a>
                    
                </div>
            </div>
        </div>

        <!-- Proveedores -->
        <div class="col-md-4">
            <div class="card border-0 shadow h-100">
                <div class="card-header bg-success text-white fw-bold">Proveedores</div>
                <div class="card-body text-center">
                    <a href="<?php BASE_URL;?>usuarios#tabla_proveedores" class="btn btn-outline-success w-100 my-2 animate__animated animate__fadeInRight">
                        <i class="fas fa-users"></i> Ver Proveedores
                    </a>
                    
                </div>
            </div>
        </div>

        <!-- Productos -->
        <div class="col-md-4">
            <div class="card border-0 shadow h-100">
                <div class="card-header bg-warning text-white fw-bold">Productos</div>
                <div class="card-body text-center">
                    <a href="<?php BASE_URL;?>nuevoproducto" class="btn btn-outline-warning w-100 my-2 animate__animated animate__fadeInUp">
                        <i class="fa fa-box"></i> Registrar Producto
                    </a>
                    <a href="<?php BASE_URL;?>productos" class="btn btn-outline-secondary w-100 my-2 animate__animated animate__fadeInUp">
                        <i class="fas fa-boxes"></i> Ver Productos
                    </a>
                    
                </div>
            </div>
        </div>

        <!-- Categorías -->
        <div class="col-md-4">
            <div class="card border-0 shadow h-100">
                <div class="card-header bg-info text-white fw-bold">Categorías</div>
                <div class="card-body text-center">
                    <a href="<?php BASE_URL;?>nuevacategoria" class="btn btn-outline-info w-100 my-2 animate__animated animate__fadeInLeft">
                        <i class="fa fa-tag"></i> Registrar Categoría
                    </a>
                    <a href="<?php BASE_URL;?>categorias" class="btn btn-outline-secondary w-100 my-2 animate__animated animate__fadeInLeft">
                        <i class="fas fa-tags"></i> Ver Categorías
                    </a>
                    
                </div>
            </div>
        </div>

        <!-- Compras -->
        <div class="col-md-4">
            <div class="card border-0 shadow h-100">
                <div class="card-header bg-danger text-white fw-bold">Compras</div>
                <div class="card-body text-center">
                    <a href="<?php BASE_URL;?>nuevacompra" class="btn btn-outline-danger w-100 my-2 animate__animated animate__fadeInRight">
                        <i class="fas fa-cart-plus"></i> Registrar Compra
                    </a>
                    <a href="<?php BASE_URL;?>compras" class="btn btn-outline-secondary w-100 my-2 animate__animated animate__fadeInRight">
                        <i class="fas fa-shopping-cart"></i> Ver Compras
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<style>
        .card {
    border-radius: 12px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.btn {
    font-size: 1rem;
    border-radius: 20px;
    transition: all 0.3s ease;
}

.btn:hover {
    background-color: rgba(0, 0, 0, 0.1);
    transform: translateY(-3px);
}

.container h1 {
    color: #343a40;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
}

    </style>