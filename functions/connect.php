<?php

function connect(){
    return new mysqli("localhost","root","secret","ecommerce");
}

function get_id_product($name, $provider, $category, $price, $units, $buy, $url, $description){
    $connect = connect();
    $query = $connect -> query("CALL insert_product('$name', '$provider', '$category', '$price', '$units', '$buy', '$url', '$description');");
    mysqli_data_seek ($query, 0);
    $impress= mysqli_fetch_array($query);
    $last_id = $impress['id'];
    return $last_id;
}
function get_all_products(){
    $products = array();
    $connect = connect();
    $query=$connect->query("SELECT * FROM PRODUCTS ORDER BY ID_PRODUCT DESC");
    while($r=$query->fetch_object()):
    $products[] = $r;
    endwhile;
    return $products;
}
function get_images_slider_last(){
    $images_last = array();
    $connect = connect();
    $query=$connect->query("SELECT * FROM SLIDER_IMAGES ORDER BY ID_SLIDER DESC LIMIT 1");
    while($r=$query->fetch_object()):
    $images_last[] = $r;
    endwhile;
    return $images_last;
}
function get_images_slider(){
    $images = array();
    $connect = connect();
    $query=$connect->query("SELECT * FROM SLIDER_IMAGES ORDER BY ID_SLIDER DESC LIMIT 1, 2");
    while($r=$query->fetch_object()):
    $images[] = $r;
    endwhile;
    return $images;
}
function get_name_products(){
    $products = array();
    $connect = connect();
    $query = $connect -> query("SELECT * FROM PRODUCTS");
    while($r=$query->fetch_object()):
    $products[] = $r;
    endwhile;
    return $products;
}
function change_extension(){
    $directorio_imagenes = 'files/main_images/';
    if ($directorio = dir($directorio_imagenes)):
    while ($fichero = $directorio->read()):
    $info_fichero = pathinfo($fichero);
    // Si la extensión no está en minúsculas ponerla en minúsculas
    if (isset($info_fichero['extension']) && $info_fichero['extension']!=strtoupper($info_fichero['extension'])):
    $info_fichero['basename_we'] = substr($info_fichero['basename'], 0, -(strlen($info_fichero['extension']) + ($info_fichero['extension'] == '' ? 0 : 1)));
    rename(
        $directorio_imagenes . $info_fichero['basename'],
        $directorio_imagenes . $info_fichero['basename_we'] . '.' . strtoupper($info_fichero['extension'])
    );
    echo '<br/>' . $info_fichero['basename'] . ' cambiado.';
    endif;
    endwhile;
    endif;
}

function delete_product($id){
    $connect = connect();
    $connect->query("CALL delete_product($id);");
    header('location: all-products.php');
}

$nombre = "files/main_images/17-10-16_Slider_A.JPG";
$nombrethum = "files/main_images/resized_17-10-16_Slider_A.JPG";
$ancho = "800";
$alto = "300";

function resized_image_slider(){
    $size_height = "800";
    $size_weidth = "300";

}

function main_thumbnail_product(){
    $size_height = "320";
    $size_weidth = "150";


}

function thumbnail_product($nombreImagen){

    $size_height = "50";
    $size_weidth = "50";
    $nombre_thumbnail = "../files/products/products_thumbnails/thumbnail_".$nombreImagen;

    // Obtiene las dimensiones de la imagen.
    list($ancho, $alto) = getimagesize($nombreImagen);

    // Establece el alto para el thumbnail si solo se paso el ancho.
    if ($size_weidth == 0 && $size_height != 0){
        $factorReduccion = $ancho / $size_height;
        $size_weidth = $alto / $factorReduccion;
    }

    // Establece el ancho para el thumbnail si solo se paso el alto.
    if ($size_weidth != 0 && $size_height == 0){
        $factorReduccion = $alto / $size_weidth;
        $size_height = $ancho / $factorReduccion;
    }

    // Abre la imagen original.
    list($imagen, $tipo)= abrirImagen($nombreImagen);

    // Crea la nueva imagen (el thumbnail).
    $thumbnail = imagecreatetruecolor($size_height, $size_weidth);
    imagecopyresampled($thumbnail , $imagen, 0, 0, 0, 0, $size_height, $size_weidth, $ancho, $alto);

    // Guarda la imagen.
    guardarImagen($thumbnail, $nombre_thumbnail, $tipo);
}

function abrirImagen($nombre){
    $info = getimagesize($nombre);
    switch ($info["mime"]){
        case "image/jpg":
            $imagen = imagecreatefromjpg($nombre);
            break;
        case "image/jpeg":
            $imagen = imagecreatefromjpeg($nombre);
            break;
        case "image/gif":
            $imagen = imagecreatefromgif($nombre);
            break;
        case "image/png":
            $imagen = imagecreatefrompng($nombre);
            break;
        default :
            echo "Error: No es un tipo de imagen permitido.";
    }
    $resultado[0]= $imagen;
    $resultado[1]= $info["mime"];
    return $resultado;
}

function guardarImagen($imagen, $nombre, $tipo){

    switch ($tipo){
        case "image/jpeg":
            imagejpeg($imagen, $nombre, 100); // El 100 es la calidade de la imagen (entre 1 y 100. Con 100 sin compresion ni perdida de calidad.).
            break;
        case "image/gif":
            imagegif($imagen, $nombre);
            break;
        case "image/png":
            imagepng($imagen, $nombre, 9); // El 9 es grado de compresion de la imagen (entre 0 y 9. Con 9 maxima compresion pero igual calidad.).
            break;
        default :
            echo "Error: Tipo de imagen no permitido.";
    }
}

function crearThumbnailConBorde($nombreImagen, $nombreThumbnail, $nuevoAncho, $nuevoAlto){

    // Obtiene las dimensiones de la imagen.
    list($ancho, $alto) = getimagesize($nombreImagen);

    // Comprueba que medida es menor para ponerle luego bordes.
    if ($ancho > $alto){
        $anchoImagen = $nuevoAncho;
        $factorReduccion = $ancho / $nuevoAncho;
        $altoImagen = $alto / $factorReduccion;
    }
    else{
        $altoImagen = $nuevoAlto;
        $factorReduccion = $alto / $nuevoAlto;
        $anchoImagen = $ancho / $factorReduccion;
    }

    // Abre la imagen original.
    list($imagen, $tipo)= abrirImagen($nombreImagen);

    // Crea la nueva imagen (el thumbnail).
    $thumbnail = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
    imagecopyresampled($thumbnail , $imagen, ($nuevoAncho-$anchoImagen)/2, ($nuevoAlto-$altoImagen)/2, 0, 0, $anchoImagen, $altoImagen, $ancho, $alto);

    // Guarda la imagen.
    guardarImagen($thumbnail, $nombreThumbnail, $tipo);
}


function crearThumbnailRecortado($nombreImagen, $nombreThumbnail, $nuevoAncho, $nuevoAlto){

    // Obtiene las dimensiones de la imagen.
    list($ancho, $alto) = getimagesize($nombreImagen);


    if ($ancho/$nuevoAncho > $alto/$nuevoAlto){
        $altoImagen = $nuevoAlto;
        $factorReduccion = $alto / $nuevoAlto;
        $anchoImagen = $ancho / $factorReduccion;
    }
    else{
        $anchoImagen = $nuevoAncho;
        $factorReduccion = $ancho / $nuevoAncho;
        $altoImagen = $alto / $factorReduccion;
    }

    // Abre la imagen original.
    list($imagen, $tipo)= abrirImagen($nombreImagen);

    // Crea la nueva imagen (el thumbnail).
    $thumbnail = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

    if ($ancho/$nuevoAncho > $alto/$nuevoAlto){
        imagecopyresampled($thumbnail , $imagen, ($nuevoAncho-$anchoImagen)/2, 0, 0, 0, $anchoImagen, $altoImagen, $ancho, $alto);
    }  else {
        imagecopyresampled($thumbnail , $imagen, 0, ($nuevoAlto-$altoImagen)/2, 0, 0, $anchoImagen, $altoImagen, $ancho, $alto);
    }

    // Guarda la imagen.
    guardarImagen($thumbnail, $nombreThumbnail, $tipo);
}

