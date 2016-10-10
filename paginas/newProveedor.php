<?php
include '../conexion.php';
$Nombre=$_POST['nombre'];
$Empresa=$_POST['empresa'];
$Correo=$_POST['email'];
$Telefono=$_POST['telefono'];
$Direccion=$_POST['direccion'];
$rs = mysqli_query($conexion,"call insertProveedor(1,'$Nombre','$Empresa','$Correo','$Telefono','$Direccion')");
$id='2';
header("Location: ../Administrador.php?id=$id");
?>