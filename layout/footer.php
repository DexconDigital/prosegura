<i class="fas fa-angle-double-up subir"></i>
<hr style=" width:82%">
<footer class="wow flash" data-wow-delay=".8s">
  <section>
    <div class="container ">
      <div class="footer-wrapper section-padding ">
        <div class="row">
          <div class="col-12 col-lg-4 col-md-12 col-sm-6 ">
            <div class="col-12 col-lg-12 col-sm-10" style="    margin-top:3%;">
              <img class="tamaño_logo" src="<?php echo $logo_empresa['src']; ?>" alt="">
            </div>
            <p class="text-center mt-2" style="    font-size: 14px;">Calle 57 # 18-22 oficina 604, Bogotá</p>
            <ul style="list-style: none;" class="p-0">
              <li class=" col-lg-12 col-md-12 col-12 ">
                <div class=" col-md-12 row col-sm-2" style="justify-content: center;">
                  <div class="col-md-2 col-2 col-sm-1 mr-1 icon_foot"><a class="color_face " href="<?php echo $redes_sociales['facebook']['link'] ?>" target="_blank"><i class="fab fa-facebook-f "></i></a></div>
                  <div class="col-md-2 col-2 col-sm-1 mr-2 icon_foot"><a href="<?php echo $redes_sociales['twitter']['link'] ?>" target="_blank"><i class="fab fa-twitter "></i></a></div>
                  <div class="col-md-2 col-2 col-sm-1 mr-2 icon_foot"><a href="<?php echo $redes_sociales['instagram']['link'] ?>" target="_blank"><i class="fab fa-instagram color_insta "></i></a></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-12 col-lg-4 col-md-6 col-sm-6 aseguradoras" style="width: 25%; ">
            <h6 class="tit_foot"></h6>

            <div class="col-12  text-center margen_formulario_footer" style="margin-top: -17%; padding: 4% 0px;padding-right: 0px; ">
              <a class="focus_modal" href="" data-toggle="modal" data-target="#exampleModal">
                <div class="" style="margin-top: 17%;">
                  <i class="far fa-file-pdf" style="font-size: 60px; color:#808184; margin-top: 9%;"></i>
                  <p class="text-center mt-2" style="color:black;font-weight: 700;">Descargue Aquí</p>
                  <p class="texto_formularios" style="color:black; margin-top: -50%; margin-bottom: 54%;">Formularios aseguradoras</p>
                </div>
              </a>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="titulo_modal" id="exampleModalLabel">Formularios aseguradoras</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <ul class="modal_lista">
                    <div class="item" style="height: 30px; margin-bottom: 4%;">
                      <a href="http://www.ellibertador.co/wps/portal/el-libertador/home " target="_blank"><img style="height: 120%; object-fit: contain;" src="img/libertador_modal.png" alt=""></a>
                    </div>
                    <li class="margen">
                      <a class="color_black_2" href="<?php echo $formularios_aseguradoras[0]['ruta'] ?>" target="_blank"><i></i> <?php echo $formularios_aseguradoras[0]['nombre'] ?> </a>
                    </li>
                    <li class="margen">
                      <a class="color_black_2" href="<?php echo $formularios_aseguradoras[1]['ruta'] ?>" target="_blank"><i></i> <?php echo $formularios_aseguradoras[1]['nombre'] ?> </a>
                    </li>
                    <div class="item" style="height: 65px; margin-bottom: 4%; margin-top: 10%;">
                    <a href="https://www.segurosmundial.com.co/" target="_blank"><img style="height: 100%; object-fit: contain;" src="img/mundial_modal.png" alt=""></a>
                    </div>
                    <li class="margen">
                      <a class="color_black_2" href="<?php echo $formularios_aseguradoras[2]['ruta'] ?>" target="_blank"><i></i> <?php echo $formularios_aseguradoras[2]['nombre'] ?> </a>
                    </li>
                    <li class="margen">
                      <a class="color_black_2" href="<?php echo $formularios_aseguradoras[3]['ruta'] ?>" target="_blank"><i></i> <?php echo $formularios_aseguradoras[3]['nombre'] ?> </a>
                    </li>
                  </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn boton_formualrio rounded-0" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-6 col-sm-6 " style="width: 25%;">
            <div class="container" style="margin: 13px;margin: 6px 0px 4px 2px;">
              <h6 class="tit_foot2 text-center"> Ubícanos</h6>
              <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.716021290003!2d-74.07164198555337!3d4.644658043435028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a365d3e3b6f%3A0x6db27910fb7175ad!2sCl.%2057%20%2318-22%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1566996675146!5m2!1ses-419!2sco" width="600" frameborder="0" style="border:0;object-fit: contain;width: 100%;" allowfullscreen=""></iframe>
              </div>
              <div class="color_gris"><a target="_blank" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.716021290003!2d-74.07164198555337!3d4.644658043435028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a365d3e3b6f%3A0x6db27910fb7175ad!2sCl.%2057%20%2318-22%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1566996675146!5m2!1ses-419!2sco" class="btn color_boton_llegar rounded-0 col-12">Como llegar</a></div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <hr style=" width:82%">
  <div class="container text-center" style="    padding: 28px;">
    <p class="">
     Diseñado y Desarrollado por <a style="color: #2658A3;" href="">Dexcon Digital</a> ©Copyright 2020 para Inmobiliaria Prosegura. Todos los derechos reservados.
    </p>
  </div>
</footer>

<section>
  <div class="modal fade show" id="consigna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Consignar Inmueble</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <form action="email/consignainmueble.php" class="row" method="post">
              <div class="form-group col-12">
                <input type="text" placeholder="Nombre" name="nombre" class="form-control" requiered="">
              </div>
              <div class="form-group col-12">
                <input type="mail" placeholder="Correo" name="email" class="form-control" required="">
              </div>
              <div class="form-group col-12">
                <input type="Telefono" placeholder="Teléfono" name="telefono" class="form-control" requiered="">
              </div>
              <div class="form-group col-12">
                <select class="form-control select_color" name="transaccion" requiered="">
                  <option selected="" disabled="">Tipo de Transacción</option>
                  <option value="arriendo">Arriendo</option>
                  <option value="arriendo/venta">Arriendo/venta</option>
                  <option value="venta">Venta</option>
                  <option value="avaluos">avalúos</option>
                </select>
              </div>
              <div class="form-group col-12">
                <select class="form-control select_color" id="tipo_inm" name="tipo_inm" requiered="">
                  <option selected="" disabled="">Tipo de Inmueble</option>
                  <option value="Apartamento">Apartamento</option>
                  <option value="Casa">Casa</option>
                  <option value="Consultorio">Consultorio</option>
                  <option value="Oficina">Oficina</option>
                  <option value="Local">Local</option>
                  <option value="Bodega">Bodega</option>
                  <option value="Lote">Lote</option>
                  <option value="Finca">Finca</option>
                  <option value="Parqueadero">Parqueadero</option>
                  <option value="Edificio">Edificio</option>
                  <option value="Apartaestudio">Apartaestudio</option>
                  <option value="Hotel">Hotel</option>
                </select>
              </div>
              <div class="form-group col-12">
                <input type="number" placeholder="Valor" name="valor" class="form-control" requiered="">
              </div>
              <div class="form-group col-12">
                <input type="number" placeholder="Área" name="area" class="form-control" requiered="">
              </div>
              <div class="form-group col-12">
                <input type="text" placeholder="Ciudad" name="ciudad" class="form-control" requiered="">
              </div>
              <div class="form-group col-12">
                <input type="text" placeholder="Dirección" name="direccion" class="form-control" requiered="">
              </div>
              <div class="form-group col-12">
                <textarea name="mensaje" placeholder="Mensajes" class="form-control" id="mensaje" rows="6" requiered=""></textarea>
              </div>
              <div class="form-group col-12">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" requiered="">
                  <label class="form-check-label" for="exampleCheck1">Acepto <a class="politicas_contac" href="POLITICA TRATAMIENTO DE DATOS.pdf" class="a-terminos" target="blank">la política y tratamiento de datos</a></label>
                </div>
              </div>
              <div class="form-group col-12">
                <button type="submit" class="btn btn-primary btn-sm btn-block color_azul">Enviar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn color_gris blanco" data-dismiss="modal">Cancelar</button>

        </div>
      </div>
    </div>
  </div>
</section>