<?php

require_once("conexion.php");

$link = Conect();
$array = array();

$sql = "SELECT * FROM noticias  where id_inmobiliaria2 = 8 order by id desc";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
while ($field = mysqli_fetch_array($result)) {
    $nombre = $field['nombre'];
    $id = $field['id'];
    $descripcion = $field['descripcion'];
    $imagen = $field['imagen'];
    $noticia = $field['noticia'];
    $fecha = $field['fecha'];
    $archivo = $field['archivo'];
    $noticias_array[] = array(
        'titulo' => $nombre,
        'id' => $id,
        'descripcion' => $descripcion,
        'imagen' => $imagen,
        'noticia' => $noticia,
        'fecha' => $fecha,
        'archivo' => $archivo
    );
}

function modelo_ultima_noticia($r)
{
    $cantidad_noticias = 1;
    for ($i = 0; $i < $cantidad_noticias; $i++) {
        echo '
    <div class="col-11 col-md-6 col-lg-4 ">
        <div class="card text-center">
            <div class="card-body">
             <h5 class="card-title">' . $r[$i]['titulo'] . '</h5>
                <p class="card-text">' . $r[$i]['descripcion'] . '</p>
                <a href="detalle-noticia.php?co=' . $r[$i]['id'] . '" class="btn btn-primary">Ver más</a>
            </div>
            <div class="card-footer text-muted">
                publicado el: ' . $r[$i]['fecha'] . '
            </div>
        </div>
    </div>';
    }
}


function modelo_noticia($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $nombre = $r[$i]['titulo'];
      $descrip = $r[$i]['descripcion'];
        $limite_de_cadena1 = 124;
        $limite_de_cadena11 = 120;
        $limite_de_cadena2 = 24;
        // recortar cadena
        //pedniente recortar cadena de descripcion corta
        if (strlen($nombre) >= $limite_de_cadena2) {
            $nombre = substr($nombre, 0, $limite_de_cadena2) . '...';
        }else {
            $nombre = $nombre . '...';
        }if (strlen($descrip) >= $limite_de_cadena1) {
            $descrip = substr($descrip, 0, $limite_de_cadena1) . '...';
        }else {
            $descrip = $descrip . '...';
        }
        $ruta_imagen = "./Prosegura-Admin/admin/" . $r[$i]['imagen'];
        echo '
        <div class="col-lg-4 col-md-6 col-12 mb-3">
        <div class="card" style="border-color: white; padding: 0px 15px;">
        <img style="object-fit: cover;width: 100%;height: 255px;" src="'.$ruta_imagen.'" class="card-img-top" alt="...">  
            <div class="card-body espacio_tageta mt-4">
                <h4 class="card-title"><strong>'  .$nombre. '</strong></h4>
                <p>' . $r[$i]['fecha'] .'</p>
                <p style="border-bottom: 1px dashed #646464; margin-bottom: 30px;padding-bottom: 30px;" class="card-text">' . $descrip. '</p>
                <a id="botton" href="./detalle-noticia.php?co=' . $r[$i]['id'] . '" class="btn boton_index_not text-center rounded-0">Ver más</a>
            </div>
        </div>
    </div>
    ';
    }
}

