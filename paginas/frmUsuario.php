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
				<h2>Registro de Usuarios</h2>
				<form name="frmusuario" action="paginas/newUserAd.php" method="POST">
					<input type="text" name="nombre" required placeholder="Nombre" class="caja">
					<input type="text" name="paterno" required placeholder="Paterno" class="caja">
					<input type="text" name="materno" required placeholder="Materno" class="caja">
					<input type="number" name="telefono" required placeholder="Telefono" class="caja">
					<input type="text" title="usuario@dominio.com" name="email" required placeholder="Mail" class="caja" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
					<input type="password" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Minimo 8 caracteres con mayuscula, minuscula,caracter especial y numero" required placeholder="Contraseña" class="caja">
					<select name="permiso" class="caja">
						<option>Usuario</option>
						<option>Administrador</option>
					</select>


					<input type="submit" name="btn" value="Enviar" class="btn">
				</form>
				<a onclick="proveedores()"><input type="button" name="btn" value="Cancelar" class="btn" style="margin-top:-10px;"></a>
			</fieldset>
		</div>
	</body>
</HTML>