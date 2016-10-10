<?php
include '../conexion.php';
echo $Nombre=$_POST['nombre'];
echo $Paterno=$_POST['paterno'];
echo $Materno=$_POST['materno'];
echo $Correo=$_POST['email'];
echo $Telefono=$_POST['telefono'];
echo $Pass=$_POST['password'];
echo $permiso=$_POST['permiso'];
$rs = mysqli_query($conexion,"call insertUsuario('$Nombre','$Paterno','$Materno','$Correo','$Telefono','$Pass','$permiso')");
$id='1';
header("Location: ../Administrador.php?id=$id");
?>