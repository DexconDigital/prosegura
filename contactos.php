<?php require 'variables/variables.php';
$page = 'Contacto' ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include 'layout/archivosheader.php' ?>

  <title>Contáctanos</title>
</head>

<body>
  <?php include 'layout/menu.php' ?>
  <div class="contaider body" id='page_contacto'>
    <div class="col-12 p-4 " id="contenedor_contacto">
      <h2 class="main-title text-center">Escríbenos</h2>
    </div>
    <div class="col-12 d-flex justify-content-around">
      <p class="text-center"> Pronto un asesor se contactará contigo:</p>
    </div>
    <div class="container-fluid  ">
      <div class="row justify-content-cente ">
        <div class="col-md-12 ">
          <div class="row">
            <div class="col-md-2 ">
            </div>
            <div class="col-md-4 ">
              <form role="form">
                <div class="form-group">
                  <label id="label" for="exampleInputEmail1">
                    Nombre:
                  </label>
                  <input type="text" class="form-control rounded-0" id="exampleInputEmail1" />
                </div>
                <div class="form-group">
                  <label id="label" for="exampleInputEmail1">
                    Apellido:
                  </label>
                  <input type="email" class="form-control rounded-0" id="exampleInputEmail1" />
                </div>
              </form>
            </div>
            <div class="col-md-4 ">
              <form role="form">
                <div class="form-group">
                  <label id="label" for="exampleInputEmail1">
                    Correo electrónico:
                  </label>
                  <input type="email" class="form-control rounded-0" id="exampleInputEmail1" />
                </div>
                <div class="form-group">
                  <label id="label" for="exampleInputPassword1">
                    Teléfono (Opcional):
                  </label>
                  <input type="password" class="form-control rounded-0" id="exampleInputPassword1" />
                </div>
            </div>
            <div class="col-md-2 ">
            </div>
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-2 ">
                </div>
                <div class="col-md-8">
                  <label id="label">Mensaje:</label>
                  <textarea id="texarea_contacto"></textarea>
                </div>
                <div>
                </div>
              </div>
            </div>
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-2 ">
                </div>
                <div class="col-md-9 col-12">

                  <div class="container">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Confimo que he leído, entendido y acepto la <a class="politicas_contac" href="POLITICA TRATAMIENTO DE DATOS.pdf" download="Politica de tratamiento de infromación.pdf">política de tratamiento de datos personales.</a></label>
                  </div>

                </div>
                <div>
                </div>
              </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center p-4">
              <button id="estilo_button_contacto" type="submit" class="btn-1 flat-btn ">
                <span>ENVIAR</span>
              </button>
            </div>
            </form>
          </div>
          <div class="row">
            <div class="col-12 p-0">
              <div class="contenedor-mapa_contacto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.716021290003!2d-74.07164198555337!3d4.644658043435028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a365d3e3b6f%3A0x6db27910fb7175ad!2sCl.%2057%20%2318-22%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1566996675146!5m2!1ses-419!2sco" height="600" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                <div class="contenedor-overlay border">
                  <div class="card" style="width=18rem;">
                    <h3 id="titulo_not" class="text-center ">Horario de atención </h3>
                    <div class="card-body text-center">
                      <h5>Lunes a Viernes de</h5>
                      <h5>8:00 am a 6:00 pm </h5>
                      <h5>Y Sábados de</h5>
                      <h5>8:00 am a 12:00 m</h5>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <section>
          <div class="container  col-lg-12 col-md-12 col-sm-12 col-12   ">
            <div class="row" style="    margin-bottom: 16px;">
              <div class=" col-lg-12 col-md-12 col-sm-12 col-12 p-4 mt-4  ">
                <h2 class="main-title text-center"> Datos de Contacto</h2>
              </div>
              <div class="col-lg-12 col-md-12 col-12  row justify-content-center espacio_contac">
                <div class="col-lg-4 col-md-4 col-12 text-center ">
                  <div class="col-12 card  style_info" style="">
                    <div class=" row card-body ">
                      <div class="col-auto col-md-12 "><i class="fas fa-map-marker-alt mr-2 icon"></i></div>
                      <div class="col-9 col-md-12"><a><?php echo $datos_contacto['direccion']['direccion'] ?></a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 text-center espacio_contac  ">
                  <div class="col-12 card  style_info" style="">
                    <div class=" row card-body ">
                      <div class="col-auto col-md-12 "> <i class="fas fa-phone-alt mr-2 icon"></i></div>
                      <div class="col-7 col-md-12">
                        <a style="color:black;" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 text-center espacio_contac ">
                  <div class="col-12 card  style_info" style="">
                    <div class=" row card-body ">
                      <div class="col-auto col-md-12 "> <i class="fas fa-mobile-alt mr-2 icon"></i></div>
                      <div class="col-7 col-md-12 margen_tel">
                        <a style="color:black;" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 text-center">
                  <div class="col-12 card  style_info" style="">
                    <div class=" row card-body ">
                      <div class="col-auto col-md-12 "> <i class="fas fa-mobile-alt mr-2 icon"></i></div>
                      <div class="col-7 col-md-12 margen_tel">
                        <a style="color:black;" href="tel:<?php echo $datos_contacto['celular2']['link'] ?>"><?php echo $datos_contacto['celular2']['imprimir'] ?></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 text-center ">
                  <div class="col-12 card  style_info" style="">
                    <div class=" row card-body ">
                      <div class="col-auto col-md-12 "><i class="fab fa-whatsapp mr-2 icon"></i></div>
                      <div class="col-5 col-md-12">
                        <a style="color:black;" target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>"><?php echo $datos_contacto['whatsapp']['imprimir'] ?></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12  text-center ">
                  <div class="col-12 card  style_info" style="">
                    <div class=" row card-body ">
                      <div class="col-auto col-md-12 container_ico "><i class="far fa-envelope mr-2 icon"></i></div>
                      <div class="col-auto col-md-12 correo_conter">
                        <a style="color:black;" href="mailto:<?php echo  $datos_contacto['correo']['correo'] ?>" class="correo_style"><?php echo $datos_contacto['correo']['correo'] ?></a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>

      </div>
    </div>



    <?php include 'layout/footer.php' ?>

    <?php include('layout/archivosfooter.php'); ?>


</body>

</html>