<?php require 'variables/variables.php';
$page = 'Quienes' ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include 'layout/archivosheader.php' ?>

  <title>Quienes Somos</title>
</head>

<body>
  <?php include 'layout/menu.php' ?>

  <div class="contaider-fluid body">

    <div class="col-12  section-padding p-5">
      <div class="container">
        <h2 class="text-center titulo main-title"><?php echo $texto_quienes_somos['quienes_somos']['titulo'] ?></h2>
        <div class="row ">
          <div style="text-align: justify;" id="texto_reseña" class="col-12 col-md-12 ">
            <p><?php echo $texto_quienes_somos['quienes_somos']['parrafo']  ?></p>
          </div>

          <div class="col-12 col-md-12 row data text-center">
            <div class="col-12 col-md-6 ">
              <div class="counter-wrapper bg4">
                <h2>Experiencia</h2>

              </div>
            </div>
            <div class="col-12 col-md-6 ">
              <div class=" counter-wrapper bg4">
                <h2>Total Inmuebles</h2>

              </div>
            </div>
            <div class="col-12 col-md-4 ">
              <div class="counter-wrapper bg4">
                <h2>Inmuebles en arriendo</h2>

              </div>
            </div>
            <div class="col-12 col-md-4 ">
              <div class="counter-wrapper bg4">
                <h2>Inmuebles en venta</h2>

              </div>
            </div>
            <div class="col-12 col-md-4 ">
              <div class="counter-wrapper bg4">
                <h2>Inmuebles en arriendo/venta</h2>

              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    <div id='parallax' class="img_static ">
      <section>
        <figure>
          <span class="efecto_somos2">
          </span>
          <h1 class="text-center tex_parallax2 main-title2">Texto</h1>
        </figure>
      </section>
    </div>

    <div class="container" style="margin-bottom: 15px;">
      <h2 class="main-title contenido_completo text-center p-4"> Misión y Visión</h2>
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-md-6 col-sm-12">
            <div class="text_img">
              <?php $r = $texto_quienes_somos['mision'];
              echo '
          <img src="' . $r['imagen'] . '" class="w-100" alt="">'; ?>
            </div>
          </div>
          <div class="col-12 col-md-6 col-sm-12">
            <div>
              <h5><?php echo $texto_quienes_somos['mision']['titulo'] ?></h5>
              <p style="text-align: justify;"><?php echo $texto_quienes_somos['mision']['parrafo'] ?></p>
            </div>
            <div>
              <h5><?php echo $texto_quienes_somos['vision']['titulo'] ?></h5>
              <p style="text-align: justify;"><?php echo $texto_quienes_somos['vision']['parrafo'] ?></p>
            </div>

          </div>
        </div>
        <div class="row" style="margin-top: 8%;">
          <div class="col-12 col-md-6 col-sm-12">
            <div class="text_img" style="margin-top: 8%;">
              <div>
                <h5><?php echo $texto_quienes_somos['objetivos']['titulo'] ?></h5>
                <p style="text-align: justify;"><?php echo $texto_quienes_somos['objetivos']['parrafo'] ?></p>
              </div>

            </div>
          </div>
          <div class="col-12 col-md-6 col-sm-12">
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


</body>

</html>