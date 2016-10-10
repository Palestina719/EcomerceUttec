<?php
include '../conexion.php';
echo $Nombre=$_POST['nombre'];
echo $Empresa=$_POST['empresa'];
echo $Precio=$_POST['precio'];
echo $Desripcion=$_POST['descripcion'];

$consulta="select id_proveedor from proveedor where empresa='".$Empresa."'";
$g=mysqli_fetch_array(mysqli_query($conexion,$consulta));	
echo $g[0];


$rs = mysqli_query($conexion,"call insertProducto('$Nombre','$g[0]','$Precio','$Desripcion')");
$id='3';
header("Location: ../Administrador.php?id=$id");
?>