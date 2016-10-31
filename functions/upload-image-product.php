<?php
//conectamos a la BD (sustituye por tus datos de conexión al servidor)
$server = mysqli_connect("localhost", "root", "secret", "ecommerce");
include("connect.php");
$connect = connect();

$name = $_POST['InputName'];
$price = $_POST['InputPrice'];
$units = $_POST['InputUnits'];
$buy = $_POST['SelectBuy'];
$provider = $_POST['SelectProvider'];
$category = $_POST['SelectCategory'];
$description = $_POST['TextAreaDescription'];
$url = $_POST['InputURL'];


$last_id = get_id_product($name, $provider, $category, $price, $units, $buy, $url, $description);

$path = "http://localhost/files/products/";

$name_array = $_FILES['file_array']['name'];
$tmp_name_array = $_FILES['file_array']['tmp_name'];
$type_array = $_FILES['file_array']['type'];
$size_array = $_FILES['file_array']['size'];
$error_array = $_FILES['file_array']['error'];

for ($i = 0; $i < count($tmp_name_array); $i++):

    if ($name_array[$i] != ""):
        $name_images = $name_array[$i];
    else:
        $name_images = "product-image-main-default.png";
    endif;

    $route = "../files/products/" . $name_images;

    $query = $connect->query("INSERT INTO product_images (id_image, name, route, date, id_product) VALUES (NULL, '$name_images', '$route', now(), '$last_id')");

//thumbnail_product($name_array[$i]);

    if (move_uploaded_file($tmp_name_array[$i], $route)):

        header('location: ../slider-admin.php?var_success=798');

    else:
        echo "move_uploaded_file function failed for " . $name_array[$i] . "<br>";
    endif;

endfor;


?>
