<?php
//conectamos a la BD (sustituye por tus datos de conexión al servidor)
$server = mysqli_connect("localhost", "root", "secret", "imagen");
//include(conexi);

//aqui van las imagenes (Carpeta o ruta que usaras)
$path = "http://localhost/pruebas/test_uploads/";


//Hacemos un poco de código verificando que se recibieron las imagenes
if(isset($_FILES['file_array'])){

    //almacenamos las propiedades de las imagenes
    $name_array = $_FILES['file_array']['name'];
    $tmp_name_array = $_FILES['file_array']['tmp_name'];
    $type_array = $_FILES['file_array']['type'];
    $size_array = $_FILES['file_array']['size'];
    $error_array = $_FILES['file_array']['error'];

    //recorremos el array de imagenes para subirlas al simultaneo
    for($i = 0; $i < count($tmp_name_array); $i++){
        if(move_uploaded_file($tmp_name_array[$i], "files/products/".$name_array[$i])){

            //guardamos en la base de datos el nombre
            mysqli_query($server,"INSERT INTO imagenes (imagen) VALUES ('$name_array[$i]')");

            //mostramos las imagenes para verificar que se subieron :)
            echo "<img src='".$path.$name_array[$i]."'> Se ha subido exitosamente<br>";
        }
        else
        {
            //si ocurrio algun problema entonces
            echo "move_uploaded_file function failed for ".$name_array[$i]."<br>";
        }
    }
}
?>
