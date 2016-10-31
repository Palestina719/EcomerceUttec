<?php
include '../conexion.php';
$Nombre = $_POST['nombre'];
$Paterno = $_POST['paterno'];
$Materno = $_POST['materno'];
$Correo = $_POST['email'];
$Telefono = $_POST['telefono'];
$Pass = $_POST['password'];
$permiso = $_POST['permiso'];
$rs = mysqli_query($conexion, "call insertUsuario('$Nombre','$Paterno','$Materno','$Correo','$Telefono','$Pass','$permiso')");
header('Location: ../layouts/admin/e-administrator.php?id=1');