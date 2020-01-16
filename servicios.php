<?php require 'variables/variables.php';
$page = 'Servicios' ?>
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
    <div class="text-center centrar">
        <div class="container">
            <div class="col-12 p-4   ">
                <h2 class="main-title text-center"> Nuestros Servicios</h2>
            </div>
            <section id="servicios">
                <div class="conatienr ">
                    <!-- Imagen Der Representacion -->
                    <div class="col-12 mt-4 wow fadeInRightBig" data-wow-Duration="2s">

                        <div class="">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6 texto_pequeño">
                                    <div class="container">
                                        <h3><?php echo $texto_servicios['representacion']['titulo'] ?></h3>
                                        <p class="text"><?php echo $texto_servicios['representacion']['parrafo'] ?></p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <img src="img/representante-legal.jpg" alt="<?php echo $texto_servicios['arrendamientos']['alt'] ?>">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Imagen iz arrendamiento -->
                    <div class="col-12 mt-4 wow fadeInLeftBig" data-wow-Duration="2s" data-wow-delay=".5s">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <img class="imagen_arrendamientos" src="img/arrendamientos.jpg " alt="<?php echo $texto_servicios['arrendamientos']['alt'] ?>">

                            </div>
                            <div class="col-12 col-md-6 col-lg-6 texto_mediano">
                                <div class="container">
                                    <h3><?php echo $texto_servicios['arrendamientos']['titulo'] ?></h3>
                                    <p class="text"><?php echo $texto_servicios['arrendamientos']['parrafo'] ?></p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Imagen Der venta -->
                    <div class="col-12 mt-4 wow fadeInRightBig" data-wow-Duration="2s">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6 texto_mediano">
                                <div class="container">
                                    <h3><?php echo $texto_servicios['ventas']['titulo'] ?></h3>
                                    <p class="text"><?php echo $texto_servicios['ventas']['parrafo'] ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <img src="img/ventas.jpg" alt="<?php echo $texto_servicios['ventas']['alt'] ?>">
                            </div>
                        </div>
                    </div>
                    <!-- Imagen iz publicidad -->
                    <div class="col-12 mt-4 wow fadeInLeftBig" data-wow-Duration="2s">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <img class="publicidad" src="img/publici.jpg" alt="<?php echo $texto_servicios['publicidad']['alt'] ?>">

                            </div>
                            <div class="col-12 col-md-6 col-lg-6 texto_mediano">
                                <div class="container">
                                    <h3><?php echo $texto_servicios['publicidad']['titulo'] ?></h3>
                                    <p class="text"><?php echo $texto_servicios['publicidad']['parrafo'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Imagen Der pago -->
                    <div class="col-12 mt-4 wow fadeInRightBig" data-wow-Duration="2s">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6 texto_pequeño ">
                                <div class="container">
                                    <h3><?php echo $texto_servicios['pagos']['titulo'] ?></h3>
                                    <p class="text"><?php echo $texto_servicios['pagos']['parrafo'] ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <img src="img/pagos.jpg" alt="<?php echo $texto_servicios['pagos']['alt'] ?>">
                            </div>
                        </div>
                    </div>
                    <!-- Imagen iz seguros -->
                    <div class="col-12 mt-4 wow fadeInLeftBig" data-wow-Duration="2s">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <img class="seguros" src="img/seguro.jpg" alt="<?php echo $texto_servicios['seguros']['alt'] ?>">
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 texto_mediano">
                                <div class="container">
                                    <h3><?php echo $texto_servicios['seguros']['titulo'] ?></h3>
                                    <p class="text"><?php echo $texto_servicios['seguros']['parrafo'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Imagen Der reparacion-->
                    <div class="col-12 mt-4 wow fadeInRightBig" data-wow-Duration="2s">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6 texto_pequeño">
                                <div class="container">
                                    <h3><?php echo $texto_servicios['reparaciones']['titulo'] ?></h3>
                                    <p class="text"><?php echo $texto_servicios['reparaciones']['parrafo'] ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <img src="img/reparaciones.jpg" alt="<?php echo $texto_servicios['reparaciones']['alt'] ?>">
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