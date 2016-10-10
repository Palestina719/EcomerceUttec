
<?php

$conexion = mysqli_connect('localhost', 'root', 'palestina');
//$conexion = mysqli_connect("localhost","root","palestina");
mysqli_select_db($conexion, 'Ecomerce')

Or die("ERROR: NO SE PUEDE ESTABLECER CONEXION");

?>