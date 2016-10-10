<HTML>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link href="css/estilos.css" rel="stylesheet" type="text/css"/>
		<title></title>
	</head>
	<body>
		<div id="nuevo">
			
			<fieldset>
				<h2>Pedidos</h2>
				<form name="frmusuario" action="paginas/newPedido.php" method="POST">
					<?php

					include '../conexion.php';
					$cons="select nombre,id_proveedor from productos";
					$res=mysqli_query($conexion, $cons);

					$cons1="select empresa from proveedor";
					$res1=mysqli_query($conexion, $cons1);
					?>	
					<select class="caja" name="producto">
						<option>Selecione un producto</option>
						<?php
						while($myrow = mysqli_fetch_row($res)){
							echo "<option>$myrow[0]</option>";
						}
						?>	
					</select>
					<select class="caja" name="empresa">
						<option>Selecione un proveedor</option>
						<?php
						while($myrow1 = mysqli_fetch_row($res1)){
							echo "<option>$myrow1[0]</option>";
						}
						?>	
					</select>
					<input type="number" name="cantidad" required placeholder="Cantidad" class="caja">
					<input type="submit" name="btn" value="Guardar" class="btn">
				</form>

			</fieldset>
		</div>
	</body>
</HTML>