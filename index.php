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
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slide_1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/slide_2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/slide_3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <section id="buscador">
      <?php include 'layout/buscador.php' ?>
    </section>

    <section id="propiedades_destacadas" class="container mt-4 ">
      
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
      
    </section>

    <section id="" class="separador-p bg-gris">
      <div class="container ">
        <div class="row ">
          <div class="">
            <div class=" extra-info separador col-lg-12 col-md-12 col-sm-12 ">
              <figure id="targeta" class="">
                <img id="card_img" src="img/quienes_somos.jpg">
              </figure>
              <div id="cuadro_cards" class="extra-info-text margin-control col-lg-12 col-md-12 col-sm-12 ">
                <h3>PROSEGURA</h3>
                <p> Somos una empresa del sector inmobiliario, enfocada al sector privado, ofreciendo servicios de arrendamiento y venta de inmuebles.</p>
                <a href="quienes_somos.php" class="btn rounded-0 color_azul">Ver más</a>
              </div>
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
              <div id="cuadro_cards2" class=" margin-control">
                <h3>PORTAFOLIO DE SERVICIOS</h3>
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

    <section class="bg-gris">
      <div class="row justify-content-around" style="  margin-right: 0px;margin-left: 0px;">
        <div class="col-12 p-4  ">
          <h2 class="main-title text-center"> Zona Clientes</h2>
        </div>
        <div class="col-12">
          <p class="text-center"> Te facilitamos todas las operaciones, sin que salgas de casa accede a nuestros servicios con un solo clic y de forma segura.</p>
        </div>

        <div class="container contenedor_total_img mt-5 ">
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
               <img src="' . $r['imagen'] . '" class="w-100 imagen_zona" alt="' . $r['alt'] . '">'; ?>
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
          <h3 id="titulo_not" class="text-center">NOTICIAS DE INTÉRES</h3>
          <div class="card-body">
            <p class="card-text"> Entérate de todas las novedades que tenemos para ti. Accede a nuestras noticias y demás temas de interés.</p>
            <a href="noticia.php" class="btn color_azul rounded-0">Ver más</a>
          </div>
        </div>
      </div>
    </section>
<!--
    <section id="">

      <div class="">
        <div class="col-12 p-2">
          <h2 class="main-title text-center">Nuestros Aliados</h2>
        </div>
        <div class="col-12">
          <p class="text-center"> Contamos con aliados de primer nivel para asegurar una
            experiencia de servicio confiable.</p>
        </div>
        <div class="col-12">
          <div class="owl-carousel owl-theme" id="aliados_slide">
            <div class="item" style="height: 180px;">
              <a href="https://www.ciencuadras.com/ " target="_blank"><img style="height: 100%; object-fit: contain;" src="img/LOGO CIEN CUADRAS.png" alt=""></a>
            </div>
            <div class="item" style="height: 180px;">
              <a href="https://www.datacredito.com.co/" target="_blank"><img style="height: 100%; object-fit: contain;" src="img/LOGO DATA CREDITO.png" alt=""></a>
            </div>
            <div class="item" style="height: 180px;">
              <a href="https://www.davivienda.com/wps/portal/personas/nuevo " target="_blank"><img style="height: 100%; object-fit: contain;" src="img/LOGO DAVIVIENDA.png" alt=""></a>
            </div>
            <div class="item" style="height: 180px;">
              <a href="http://www.ellibertador.co/wps/portal/el-libertador/home " target="_blank"><img style="height: 100%; object-fit: contain;" src="img/LOGO EL LIBERTADOR.png" alt=""></a>
            </div>
            <div class="item" style="height: 180px;">
              <a href="https://www.fincaraiz.com.co/ " target="_blank"><img style="height: 100%; object-fit: contain;" src="img/LOGO FINCA RAIZ.png" alt=""></a>
            </div>
            <div class="item" style="height: 180px;">
              <a href="https://www.segurosmundial.com.co/" target="_blank"><img style="height: 100%; object-fit: contain;" src="img/LOGO SEGUROS MUNDIAL.png" alt=""></a>
            </div>
            <div class="item" style="height: 180px;">
              <a href="http://tae-ltda.com/" target="_blank"><img style="height: 100%; object-fit: contain;" src="img/LOGO SIMI.png" alt=""></a>
            </div>
          </div>
        </div>

      </div>


    </section>
-->
  </div>


  <?php include 'layout/footer.php' ?>

  <?php include('layout/archivosfooter.php'); ?>


</body>


</html>