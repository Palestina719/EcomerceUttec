<?php
include '../conexion.php';
$producto=$_POST['producto'];
$Empresa=$_POST['empresa'];
$Cantidad=$_POST['cantidad'];
$Fecha="2016/10/10";


$cons="SELECT id_producto from productos where nombre='".$producto."'";

$res=mysqli_query($conexion,$cons);
$row=mysqli_fetch_array($res);



$cons1="SELECT id_proveedor from proveedor where empresa='".$Empresa."'";

$res1=mysqli_query($conexion,$cons1);
$row1=mysqli_fetch_array($res1);



$rs = mysqli_query($conexion,"call insertCompra('$producto','$row[0]','$row1[0]','$Cantidad','2016/09/08')");
$id='4';
header("Location: ../Administrador.php?id=$id");
?>