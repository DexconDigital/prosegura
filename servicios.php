<?php require 'variables/variables.php';
$page = 'Servicios' ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'layout/archivosheader.php' ?>

    <title>Servicios</title>
</head>

<body>
    <?php include 'layout/menu.php' ?>
    <div class="pricing-wrapper index inner-section-padding text-center">
        <div class="container">
            <div class="col-12 p-4   ">
                <h2 class="main-title text-center"> Nuestros Servicios</h2>
            </div>

            <div class="row">
                <div class="col-12 col-md-12 p-4 margen_contenido">
                    <div class="pricing">
                        <ul style="text-align: justify;">
                            <li class="li_servicios" style="color: #13294B;"><a style="color:black"><?php echo $texto_servicios['parrafos'][0]; ?></a></li>
                            <li class="li_servicios"><a style="color:black"><?php echo $texto_servicios['parrafos'][1]; ?></a></li>
                            <li class="li_servicios"><a style="color:black"><?php echo $texto_servicios['parrafos'][2]; ?></a></li>
                            <li class="li_servicios"><a style="color:black"><?php echo $texto_servicios['parrafos'][3]; ?></a></li>
                            <li class="li_servicios"><a style="color:black"><?php echo $texto_servicios['parrafos'][4]; ?></a></li>
                        </ul>

                    </div>
                </div>
            </div>



        </div>

    </div>



    <?php include 'layout/footer.php' ?>

    <?php include('layout/archivosfooter.php'); ?>


</body>

</html>