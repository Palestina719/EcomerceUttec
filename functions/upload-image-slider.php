<?php
//Connect to BDD
include ("connect.php");
$connect = connect();

$productA = $_POST['SelectProductA'];
$productB = $_POST['SelectProductB'];
$productC = $_POST['SelectProductC'];

$product = array(0 => $productA, $productB, $productC);

$path = "http://localhost/files/products/";

$name_array = $_FILES['file_array']['name'];
$tmp_name_array = $_FILES['file_array']['tmp_name'];
$type_array = $_FILES['file_array']['type'];
$size_array = $_FILES['file_array']['size'];
$error_array = $_FILES['file_array']['error'];

for($i = 0; $i < count($tmp_name_array); $i++):

if($name_array[$i]!=""):
$name_images = $name_array[$i];
else:
$name_images = "slide-image-default.png";
endif;

$route = "../files/slider/".$name_images;

$query = $connect -> query("CALL insert_slider_image('$name_images','$route',$product[$i]);");
$consulta = "CALL insert_slider_image('$name_images','$route',$product[$i]);";
echo "ANTES DE SUBIR IMAGEN ".$consulta."<br>";

if(move_uploaded_file($tmp_name_array[$i], $route)):

header('location: ../slider-admin.php?var_success=798');
else:
echo "move_uploaded_file function failed for ".$name_array[$i]."<br>";
endif;

endfor;
?>
