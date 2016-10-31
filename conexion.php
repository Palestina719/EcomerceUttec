
<?php

$conexion = mysqli_connect('localhost', 'root', 'secret');
//$conexion = mysqli_connect("localhost","root","palestina");
mysqli_select_db($conexion, 'ecommerce')

Or die("ERROR: NO SE PUEDE ESTABLECER CONEXION");

?>
