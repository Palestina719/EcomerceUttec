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
				<h2>Registro de Proveedores</h2>
			<form name="frmusuario" action="paginas/newProveedor.php" method="POST">
							<input type="text" name="nombre" required placeholder="Nombre" class="caja">
							<input type="text" name="empresa" required placeholder="Empresa" class="caja">
							<input type="email" name="email" required placeholder="Correo" class="caja">
							<input type="number" name="telefono" required placeholder="Telefono" class="caja">
							<input type="text" name="direccion" required placeholder="Dirección" class="caja">
							<input type="submit" name="btn" value="Guardar" class="btn">
						</form>
						<a onclick="proveedores()"><input type="button" name="btn" value="Cancelar" class="btn" style="margin-top:-10px;"></a>
				</fieldset>
		</div>
</body>
</HTML>