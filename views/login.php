<body>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img  src="https://i.pinimg.com/564x/c7/22/37/c722371f49ea46389d426e9b2bc92faa.jpg" class="img-fluid"
            alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <form>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="email" id="form1Example13" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example13">Correo</label>
            </div>


            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" id="form1Example23" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example23">Contraseña</label>
            </div>

            <div class="d-flex justify-content-around align-items-center mb-4">

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                <label class="form-check-label" for="form1Example3">Recordar</label>
              </div>
              <a href="#!">¿Olvidaste tu contraseña?</a>
            </div>


            <div>
              <a href="<?php echo BASE_URL?>inicio"
                 type="submit" data-mdb-button-init data-mdb-ripple-init
                  class="btn btn-primary btn-lg btn-block">Inicia sesión</a>
            </div>
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0 text-muted">Continuar con: </p>
            </div>

            <a data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
              role="button">
              <i class="fab fa-facebook-f me-2"></i>Continuar con Facebook
            </a>
            <a data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
              role="button">
              <i class="fab fa-google-plus me-2"></i>Continuar con Google</a>

          </form>
        </div>
      </div>
    </div>
  </section>