<HTML>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link href="css/estilos.css" rel="stylesheet" type="text/css"/>
		<title></title>
	</head>
	<body>
		<div id="nuevo">
			<?php
			include '../conexion.php';
					$cons1="select empresa from proveedor";
					$res1=mysqli_query($conexion, $cons1);

			?>
			<fieldset>
				<h2>Registro de Productos</h2>
				<form name="frmusuario" action="paginas/newProductos.php" method="POST">
					<input type="text" name="nombre" required placeholder="Nombre" class="caja">
					
					<select class="caja" name="empresa">
						<option>Selecione un proveedor</option>
						<?php
						while($myrow1 = mysqli_fetch_row($res1)){
							echo "<option>$myrow1[0]</option>";
						}
						?>	
					</select>





					<input type="number" name="precio" required placeholder="Precio" class="caja">
					<textarea name="descripcion" required placeholder="Descripción" class="caja"></textarea>

					<input type="submit" name="btn" value="Enviar" class="btn">
				</form>
				<a onclick="proveedores()"><input type="button" name="btn" value="Cancelar" class="btn" style="margin-top:-10px;"></a>
			</fieldset>
		</div>
	</body>
</HTML>