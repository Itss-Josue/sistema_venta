<main>
      <div class="container-carrito">
              
                  <h2>Realizar Compra</h2>
                  <form id="procesar-pago" action="#" method="POST">
                      <div class="contenido titulo">
                          <label for="cliente" class="">Cliente :</label>
                          <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Ingrese su nombre" onkeypress="return sololetras(event)" onpaste="return false" required>
                      </div>
                      <div class="contenido titulo">
                          <label for="email" class="">Correo :</label>
                          <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo" required>
                      </div>

                      <div id="carrito" class="contenido">
                          <table class="tabla" id="lista-compra">
                              <thead>
                                  <tr>
                                      <th scope="col">Imagen</th>
                                      <th scope="col">Nombre</th>
                                      <th scope="col">Precio</th>
                                      <th scope="col">Cantidad</th>
                                      <th scope="col">Sub Total</th>
                                      <th scope="col">Eliminar</th>
                                  </tr>
                              </thead>
                              <tbody>

                              </tbody>
                              <tr>
                                  <th colspan="4" scope="col" class="">SUB TOTAL :</th>
                                  <th scope="col">
                                      <p id="subtotal"></p>
                                  </th>
                              </tr>
                              <tr>
                                  <th colspan="4" scope="col" class="">IGV :</th>
                                  <th scope="col">
                                      <p id="igv"></p>
                                  </th>
                              </tr>
                              <tr>
                                  <th colspan="4" scope="col" class="">TOTAL :</th>
                                  <th scope="col">
                                    <input type="text" id="total" name="monto_total" readonly>
                                  </th>
                              </tr>
                          </table>
                      </div>

                      <div class="" id="loaders">
                          <img id="cargando" src="<?php echo BASE_URL ?>views/assets/img/cargando.gif" width="220">
                      </div>

                      <div class="botones-envio">
                              <a href="<?php echo BASE_URL ?>productos" class="button" id="volver">Seguir comprando</a>
                              <input type="submit" class="button" id="procesar-compra" onclick="validarCorreo(form.correo.value)"value="Realizar compra">
                      </div>
                  </form>

      </div>
  </main>