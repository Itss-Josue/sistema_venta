
<footer style="margin-top: 5%;" id="footer" class="footer-modern">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!-- Sección Moda -->
                <div class="col-lg-3 col-md-6 footer-content">
                    <h3>Moda</h3>
                    <p>Lo mejor de la moda al mejor precio.</p>
                    <ul>
                        <li><a href="<?php echo BASE_URL ?>modahombre">Hombre</a></li>
                        <li><a href="<?php echo BASE_URL ?>calzado">Calzados</a></li>
                        <li><a href="<?php echo BASE_URL ?>mejoresmarcas">Mejores Marcas</a></li>
                    </ul>
                    <div class="contact-info">
                        <p><i class="fas fa-phone"></i> Teléfono: <strong>956 896 596</strong></p>
                        <p><i class="fas fa-envelope"></i> Email: <strong>josuegomezc21@gmail.com</strong></p>
                    </div>
                </div>

                <!-- Enlaces Útiles -->
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Enlaces Útiles</h4>
                    <ul>
                        <li><a href="<?php echo BASE_URL ?>calzado">Calzados</a></li>
                        <li><a href="<?php echo BASE_URL ?>modahombre">Moda Hombre</a></li>
                        <li><a href="<?php echo BASE_URL ?>contacto">Contacto</a></li>
                        <li><a href="<?php echo BASE_URL ?>carrito">Carrito</a></li>
                        <li><a href="">Política y Privacidad</a></li>
                    </ul>
                </div>

                <!-- Servicios -->
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Nuestros Servicios</h4>
                    <p>Todos nuestros servicios a tu disposición.</p>
                    <ul>
                        <li><a href="">Teléfono</a></li>
                        <li><a href="">Reloj</a></li>
                        <li><a href="">Electrodomésticos</a></li>
                    </ul>
                </div>

                <!-- Redes Sociales -->
                <div class="col-lg-3 col-md-6 footer-social">
                    <h4>Síguenos</h4>
                    <p>Conéctate con nosotros en redes sociales:</p>
                    <div class="social-links">
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<style>
    /* General */
.footer-modern {
    background: #111;
    color: #fff;
    padding: 40px 0;
    font-family: 'Roboto', sans-serif;
}

.footer-top {
    padding-bottom: 20px;
    border-bottom: 1px solid #444;
}

.footer-content h3,
.footer-links h4,
.footer-social h4 {
    color: #f39c12;
    font-size: 18px;
    margin-bottom: 15px;
    text-transform: uppercase;
}

.footer-content p,
.footer-links ul,
.footer-social p {
    font-size: 14px;
    line-height: 1.8;
}

.footer-links ul,
.footer-content ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links ul li,
.footer-content ul li {
    margin-bottom: 10px;
}

.footer-links ul li a,
.footer-content ul li a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-links ul li a:hover,
.footer-content ul li a:hover {
    color: #f39c12;
}

.contact-info p {
    margin: 5px 0;
}

.footer-social .social-links a {
    display: inline-block;
    margin-right: 10px;
    font-size: 18px;
    color: #fff;
    background: #333;
    padding: 10px;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.footer-social .social-links a:hover {
    background: #f39c12;
    color: #fff;
}

.footer-bottom {
    text-align: center;
    margin-top: 20px;
    padding: 10px 0;
    background: #222;
    font-size: 14px;
    border-top: 1px solid #444;
}

.footer-bottom p {
    margin: 0;
    color: #bbb;
}

.footer-bottom p a {
    color: #f39c12;
    text-decoration: none;
    font-weight: bold;
}

/* Animaciones */
.footer-modern ul li a {
    position: relative;
}

.footer-modern ul li a::before {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    background: #f39c12;
    bottom: 0;
    left: 0;
    transition: 0.3s;
}

.footer-modern ul li a:hover::before {
    width: 100%;
}
</style>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="<?php echo BASE_URL ?>views/js/functionslogin.js"></script>>
