<?php require 'variables/variables.php';
$page = 'Quienes' ?>
<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include 'layout/archivosheader.php' ?>

  <title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>
</head>

<body>
  <?php include 'layout/menu.php' ?>

  <div class="contaider-fluid body">

    <!-- Contador -->
    <section id="contador" class="wow bounceInLeft" data-wow-Duration="3s">
      <div class="col-11 col-md-12 col-lg-12 container section-padding p-1">
        <div class="container centrar">
          <h2 class="text-center titulo main-title"><?php echo $texto_quienes_somos['quienes_somos']['titulo'] ?></h2>
          <div class="row ">
            <div style="text-align: justify;" id="texto_reseña" class="col-12 col-md-12 ">
              <p><?php echo $texto_quienes_somos['quienes_somos']['parrafo']  ?></p>

            </div>

            <div id="valores" class="col-12 col-md-12 row data text-center mb-5">

              <div id="bg4" class="col-12 col-md-6 mb-3 margen_boton wow bounceInLeft" data-wow-Duration="5s">
                <div class=" counter-wrapper">
                  <i class="far fa-handshake"></i><br>
                  <h2 class="font-weight-bold">Responsabilidad</h2>
                </div>
              </div>
              <div id="bg4" class="col-12 col-md-6 wow zoomInDown" data-wow-Duration="3s">
                <div class="counter-wrapper">
                  <i class="fas fa-balance-scale"></i><br>
                  <h2 class="font-weight-bold">Honestidad</h2>
                </div>
              </div>
              <div id="bg4" class="col-12 col-md-6 mb-3 margen_boton wow zoomInUp" data-wow-Duration="3s">
                <div class="counter-wrapper bg4">
                  <i class="fas fa-clipboard-check"></i><br>
                  <h2 class="font-weight-bold">Cumplimiento</h2>
                </div>
              </div>
              <div id="bg4" class="col-12 col-md-6 wow bounceInRight" data-wow-Duration="5s">
                <div class="counter-wrapper bg4 pl-0 pr-0">
                  <i class="far fa-star"></i><br>
                  <h2 class="font-weight-bold">Transparencia</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- fin de contador -->

    <div id='parallax' class="img_static ">
      <section>
        <figure>
          <span class="efecto_somos2">
          </span>
          <h1 class="text-center tex_parallax2 main-title2 wow zoomIn" data-wow-Duration="4s">PUBLICA TU INMUEBLE CON NOSOTROS</h1>
        </figure>
      </section>
    </div>

    <div class="container wow fadeInUpBig" style="margin-bottom: 15px;">
      <h2 class="main-title contenido_completo text-center p-4"> Misión y Visión</h2>
      <div class="col-12">
        <div class="row">
          <div class="container col-12 col-md-6 col-sm-12 contenedor_servicios">
            <div class="text_img">
              <?php $r = $texto_quienes_somos['mision'];
              echo '
          <img src="' . $r['imagen'] . '" class="w-100" alt="">'; ?>
            </div>
          </div>
          <div class="col-11 col-md-6 col-sm-12 div_textos container ">
            <div class="cont_mision">
              <h3><?php echo $texto_quienes_somos['mision']['titulo'] ?></h3>
              <p style="text-align: justify;"><?php echo $texto_quienes_somos['mision']['parrafo'] ?></p>
            </div>
            <div>
              <h3><?php echo $texto_quienes_somos['vision']['titulo'] ?></h3>
              <p style="text-align: justify;"><?php echo $texto_quienes_somos['vision']['parrafo'] ?></p>
            </div>
            <br>

          </div>
        </div>
        <div class="row objetivos_cont text-center">
          <div class="col-12 col-md-6 col-sm-12 imagen_text_posicon contenedor_servicios margen">
            <div class="text_img">
              <div>
                <h3><?php echo $texto_quienes_somos['objetivos']['titulo'] ?></h3>
                <p style="text-align: justify;"><?php echo $texto_quienes_somos['objetivos']['parrafo'] ?></p>
              </div>

            </div>
          </div>
          <div class="col-12 col-md-6 col-sm-12 imgen_posicion">
            <?php $r = $texto_quienes_somos['objetivos'];
            echo '
          <img src="' . $r['imagen'] . '" class="w-100" alt="">'; ?>
          </div>
        </div>


      </div>






    </div>


  </div>


  <?php include 'layout/footer.php' ?>

  <?php include('layout/archivosfooter.php'); ?>
  <!-- <script src='js/countUp.min.js'></script>
  <script src="js/counter-propertys.js"></script> -->


</body>

</html>