<?php require 'variables/variables.php';
$page = 'Contacto' ?>
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
  <div class="contaider body" id='page_contacto'>
    <div class="col-12 p-4 " id="contenedor_contacto">
      <h2 class="main-title text-center">Escríbenos</h2>
    </div>
    <div class="col-12 d-flex justify-content-around">
      <p class="text-center"> Pronto un asesor se contactará contigo:</p>
    </div>

    <div class="container">
      <div class="col-10 m-auto">
        <form action="email/enviarCorreo.php" method="POST">
          <div class="row">
            <div class="col-12 col-md-5 col-lg-5 m-auto">
              <div class="form-group">
                <label id="label" for="exampleInputEmail1">
                  Nombres y Apellidos:
                </label>
                <input type="text" class="form-control rounded-0" id="name" name="name" required>
              </div>
            </div>
            <div class="col-12 col-md-5 col-lg-5 m-auto">
              <div class="form-group">
                <label id="label" for="">
                  Teléfono (Opcional):
                </label>
                <input type="number" class="form-control rounded-0" id="tel" name="tel" required>
              </div>
            </div>
            <div class="col-12 col-md-11 col-lg-11 m-auto">
              <div class="form-group">
                <label id="label" for="">
                  Correo electrónico:
                </label>
                <input type="email" class="form-control rounded-0" id="email" name="email" required>
              </div>
            </div>
            <div class="col-12 col-md-11 col-lg-11 m-auto">
              <label id="label">Mensaje:</label>
              <textarea id="texarea_contacto" name="mess" required></textarea>
            </div>
            <div class="col-11 m-auto">
              <div class="container">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">Confimo que he leído, entendido y acepto la <a class="politicas_contac" href="POLITICA TRATAMIENTO DE DATOS.pdf" download="Politica de tratamiento de infromación.pdf">política de tratamiento de datos personales.</a></label>
              </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center p-4">
              <button id="estilo_button_contacto" type="submit" class="btn-1 flat-btn ">
                <span>ENVIAR</span>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-12 mt-3">
      <div class="">
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
  </div>



  <?php include 'layout/footer.php' ?>

  <?php include('layout/archivosfooter.php'); ?>


</body>

</html>