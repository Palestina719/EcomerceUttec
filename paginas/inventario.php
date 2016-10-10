<!DOCTYPE >
<html>
<head>
	<meta charset="utf-8"/>
	<title>Acceso a Usuarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='css/style.css' rel='stylesheet'/>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="src/js/funciones.js"></script>
	<script>
		function confirmar($id)
		{
			if(confirm('¿Estas seguro de visitar esta url?'))
			{
				alert "hola";
			}
			else
			{
				return false;
			}	
		}
	</script>
</head>
<body>
	<div class="bienvenida1">
		<h2>Inventario</h2>
		
	</div>

	<div id="Resultados">
		<?php
		include '../conexion.php';
		$cons="select *from inventario";
		$res=mysqli_query($conexion, $cons);

		echo "<br>";
		echo "<br>";
		echo "<center>";
		echo "<table>\n";
		echo "<tr>
		<td id='JO'>ID:</td>
		<td id='JO'>Producto:</td>
		<td id='JO'>id_producto:</td>
		<td id='JO'>id_proveedor:</td>
		<td id='JO'>Cantidad:</td>
		<td id='JO'>Modificar:</td>
		<td id='JO'>Eliminar:</td>
	</tr>";
				//$myrow = mysql_fetch_row($res);

	while ($myrow = mysqli_fetch_row($res)){
		?>
		<tr>
			<td id="F"><?php echo "$myrow[0]" ?></td>
			<td id="F"><?php echo "$myrow[1]" ?></td>
			<td id="F"><?php echo "$myrow[2]" ?></td>
			<td id="F"><p><?php echo "$myrow[3]" ?></p></td>
			<td id="F"><?php echo "$myrow[4]" ?></td>
			<td id="F"><?php echo "<a onClick='modificarUsuario(id=$myrow[0])'><center><img src='images/modificar.jpg' width='50'; height:'50';/></center></a>" ?></td>
			<td id="F"><?php echo "<a href=paginas/delUsuario.php?id=$myrow[0]><center><img src='images/eliminar.png' width='50'; height:'50';/></center></a>" ?></td>						
		</tr>			
		<?php
	}
	?>
</div>
</body>
</html>