<?php $page = "Noticias";
require 'variables/variables.php';
require_once('controllers/detalle_noticiasController.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias</title>
    <?php include 'layout/archivosheader.php'; ?>
</head>

<body>
    <?php include 'layout/menu.php' ?>

    <div class="container-fluid cont_noticias mt-5">
        <div class="container">
            <div class="col-12 text-center mb-4">
                <h2><?php echo $nombre ?></h2>
            </div>
            <div class="col-12">
                <img id="cont_img_noticia" class="img-fluid-top mr-4 img_notica" src="<?php echo $ruta_imagen ?>" alt="">
                <p class="text-justify"> <?php echo $noticia ?></p>
            </div>
        </div>
        <div class="container col-10 text-center mb-4 ">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-12">

                    <span class="text-muted"> Publicado el: <?php echo $fecha_complete; ?></span>
                </div>
                <div class="col-lg-4 col-md-2 col-1 mt-2 mb-2">
                </div>
                <div class="col-lg-4 col-md-5 col-12">
                    <?php if ($ruta_archivo != $comparador . "") {
                        echo '<a style="color:black;" href="' . $ruta_archivo . '" download="Noticias.pdf"><i style="color:red;" class="fas fa-file-pdf mr-3"></i>Descargar Archivo Adjunto</a>';
                    } ?>
                </div>
            </div>
        </div>

    </div>
    <footer>
        <?php include 'layout/footer.php' ?>
    </footer>

    <?php include('layout/archivosfooter.php'); ?>
</body>

</html>