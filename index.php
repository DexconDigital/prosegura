<?php require 'variables/variables.php';
require 'controllers/indexController.php';
$page = 'Inicio' ?>
<!doctype html>
<html lang="es">
<script>
  var page = 'inicio';
</script>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include 'layout/archivosheader.php'; ?>

  <title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>
</head>

<body>
  <?php include 'layout/menu.php' ?>
  <div class="container-fluid body">
    <section id="hero">
      <div style="position: relative;" id="slide_hero" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="view">
              <img class="d-block w-100" src="img/slide_1.jpg" alt="First slide">
              <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption wow fadeInUp" data-wow-delay="0.6s" style="top:183px;">
            </div>
          </div>
          <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
              <img class="d-block w-100" src="img/slide_2.jpg" alt="Second slide">
              <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption wow fadeInLeft" data-wow-delay="0.6s" style="top:183px;">
            </div>
          </div>
          <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
              <img class="d-block w-100" src="img/slide_3.jpg" alt="Third slide">
              <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption wow fadeInDown" data-wow-delay="0.6s" style="top:183px;">
            </div>
          </div>
        </div>
        <div class="overlay"></div>
        <a class="carousel-control-prev" href="#slide_hero" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slide_hero" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <section id="buscador">
      <?php include 'layout/buscador.php' ?>
    </section>

    <section id="propiedades_destacadas" class="container mt-4 ">
      <div class="row">
        <div class="col-12 p-4  ">
          <h2 class="main-title text-center"> Propiedades destacadas</h2>
        </div>
        <div class="col-12">
          <p class="text-center text-uppercase"> Nuestros inmuebles destacados en este momento</p>
        </div>
        <div class="col-md-12 col-12 col-lg-12  justify-content-center">
          <div class="owl-carousel owl-theme" id="owl_propiedades_destacadas">
            <?php inmuebles_destacados($api);  ?>
          </div>
        </div>
      </div>
    </section>

    <section id="" class="separador-p bg-gris">
      <div class="container border border-secondary">
        <div class="row border border-secondary">
          <div class="">
            <div class=" extra-info separador col-lg-12 col-md-12 col-sm-12 border border-secondary">
              <figure id="targeta" class="">
                <img id="card_img" src="img/quienes_somos.jpg">
              </figure>
            </div>
            <div id="cuadro_cards" class="extra-info-text margin-control col-lg-12 col-md-12 col-sm-12 ">
              <h3> Propiedad Segura Inmobiliaria PROSEGURA</h3>
              <p> Somos una Empresa con más de 30 años de
                experiencia en el sector Inmobiliario, arrendando y vendiendo en Bogotá, nos caracterizamos por la
                honestidad y cumplimiento en nuestras actividades y por prestar de manera personalizada y cordial
                un servicio profesional a nuestros clientes.</p>
              <a href="quienes_somos.php" class="btn rounded-0 color_azul">Ver más</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="">
              <figure id="targeta2" class="">
                <?php $r = $imagenes['banner_servicios_home'];
                echo '
               <img src="' . $r['imagen'] . '" class="w-100" alt="' . $r['alt'] . '">'; ?>
              </figure>
              <div id="cuadro_cards2" class="e margin-control">
                <h3> Portafolio de Servicios</h3>
                <p>Su inmueble
                  será publicado en los portales especializados en propiedad raíz con fotos y video, se le instalaran
                  avisos de ventana de diferentes tamaños o pendones según cada caso, se cruzará la información de
                  su inmueble con nuestra base de datos de requerimientos diarios, de manera que podamos
                  encontrar coincidencias entre la oferta y la demanda</p>
                <a href="servicios.php" class="btn color_azul rounded-0">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="asesores" class="container mt-4">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-4  ">
          <h2 class="main-title text-center"> Nuestros Asesores</h2>
        </div>
        <div class="col-12">
          <p class="text-center"> Nadie conoce nuestras ciudades tan bien como nosotros</p>
        </div>
        <div class="col-12 d-flex justify-content-center">
          <div class="col-12 col-md-6 col-lg-4  ">
            <div class="card" style="">
              <div class="property">
                <a href="">
                  <div class="property-image">
                    <img alt="" src="img/no_image.png"></div>
                </a>
              </div>
              <div class=" row col-12 p-4">
                <div class="col-12">
                  <p class="mb-1">Nombre:</p>
                </div>
                <div class="col-12">
                  <p class="mb-1">Apellido:</p>
                </div>
                <div class="col-12">
                  <p class="mb-1">Celular:</p>
                </div>
                <div class="col-12">
                  <p class="mb-1">Correo:</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="bg-gris">
      <div class="row justify-content-around">
        <div class="col-12 p-4  ">
          <h2 class="main-title text-center"> Zona Clientes</h2>
        </div>
        <div class="col-12">
          <p class="text-center"> Te facilitamos todas las operaciones, sin que salgas de casa accede a nuestros servicios con un solo clic y de forma segura.</p>
        </div>

        <div class="container mt-5 ">
        <div class="card-deck">
            <div class="card contenedor_img_zona" id="cad">
              <a href="" target="_blank">
                <?php $r = $imagenes['banner_clientes_home']['propietarios'];
                echo '
               <img  src="' . $r['imagen'] . '" class="w-100 imagen_zona" alt="' . $r['alt'] . '">'; ?>
              </a>
              <div>
                <h3 class="text-center"><a class=" color_zona_cliente " href="" target="_blank">Propietarios</a></h3>
              </div>
            </div>

            <div class="card contenedor_img_zona" id="cad">
              <a href="" target="_blank">
                <?php $r = $imagenes['banner_clientes_home']['arrendatarios'];
                echo '
               <img src="' . $r['imagen'] . '" class="w-100 imagen_zona" alt="' . $r['alt'] . '">'; ?>
              </a>
              <h3 class="text-center"> <a class=" color_zona_cliente " target="_blank" href="">Arrendatarios</a></h3>
            </div>

            <div class="card contenedor_img_zona" id="cad">
              <a href="" target="_blank">
                <?php $r = $imagenes['banner_clientes_home']['pagos_pse'];
                echo '
               <img style="object-fit: contain;" src="' . $r['imagen'] . '" class="w-100 imagen_zona" alt="' . $r['alt'] . '">'; ?>
              </a>
              <h3 class="text-center"> <a class=" color_zona_cliente " href="" target="_blank">Pagos en Línea</a></h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id='parallax4'>
      <div class="overlay">
      </div>
      <div class="contenedor" id="noticia">
        <div class="card cuadro_completo">
          <h3 id="titulo_not" class="text-center">Noticias de interés</h3>
          <div class="card-body">
            <p class="card-text"> Entérate de todas las novedades que tenemos
              para ti.</p>
            <a href="noticias.php" class="btn color_azul rounded-0">Ver más</a>
          </div>
        </div>
      </div>
    </section>

    <section id="aliados">

      <div class="row d-flex justify-content-around">
        <div class="col-12 p-4">
          <h2 class="main-title text-center">Nuestros Aliados</h2>
        </div>
        <div class="col-12">
          <p class="text-center"> Contamos con aliados de primer nivel para asegurar una
            experiencia de servicio confiable.</p>
        </div>
        <div class="col-12">
          <div class="owl-carousel owl-theme" id="aliados_slide">
            <div class="item" style="height: 150px;">
              <img style="height: 100%; object-fit: contain;" src="img/LOGO CIEN CUADRAS.png" alt="">
            </div>
            <div class="item" style="height: 150px;">
              <img style="height: 100%; object-fit: contain;" src="img/LOGO DATA CREDITO.png" alt="">
            </div>
            <div class="item" style="height: 150px;">
              <img style="height: 100%; object-fit: contain;" src="img/LOGO DAVIVIENDA.png" alt="">
            </div>
            <div class="item" style="height: 150px;">
              <img style="height: 100%; object-fit: contain;" src="img/LOGO EL LIBERTADOR.png" alt="">
            </div>
            <div class="item" style="height: 150px;">
              <img style="height: 100%; object-fit: contain;" src="img/LOGO FINCA RAIZ.png" alt="">
            </div>
            <div class="item" style="height: 150px;">
              <img style="height: 100%; object-fit: contain;" src="img/LOGO SEGUROS MUNDIAL.png" alt="">
            </div>
            <div class="item" style="height: 150px;">
              <img style="height: 100%; object-fit: contain;" src="img/LOGO SIMI.png" alt="">
            </div>
          </div>
        </div>
      </div>


    </section>

  </div>


  <?php include 'layout/footer.php' ?>

  <?php include('layout/archivosfooter.php'); ?>


</body>


</html>