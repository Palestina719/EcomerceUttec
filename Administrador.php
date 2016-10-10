<?php
include "conexion.php";
require_once("sesion.class.php");
$sesion = new sesion();
$usuario = $sesion->get("usuario");
$id=$_GET['id'];

if( $usuario == false ){	
	header("Location: index.php");		
}else 
{
	?>
	<HTML>
		<head>
			<meta charset="utf-8"/>
			<title>Acceso a Usuarios</title>
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<link href='css/style.css' rel='stylesheet'/>
			<link rel="stylesheet" type="text/css" href="css/estilos.css">
			<script type="text/javascript" src="src/js/funciones.js"></script>
		</head>
		<body>
			<div class="bienvenida">
				<h2>Bienvenido(a):</h2>
				<h2><?php echo $sesion->get("usuario");?></h2>						
				
			</div>
			<div class="operaciones">
				<ul>
					<li><a onclick="usuarios();"><h2>Usuarios</h2></a></li>
					<li><a onclick="proveedores()"><h2>Proveedores</h2></a></li>
					<li><a onclick="Productos()"><h2>Productos</h2></a></li>
					<li><a onclick="Pedidos()"><h2>Pedidos</h2></a></li>
					<li><a onclick="Inventario()"><h2>Inventario</h2></a></li>
					<li><a href="cerrarsesion.php"><h2>Cerrar Sesión</h2></a></li>
				</ul>				
			</div>
			<div id="myDiv">
				<?php
				if ($id==0) {
					
					?>
					
					<?php
				}
				if ($id==1) {
					?>
					<script>
						window.onload = function() {
							usuarios();
						};
					</script>

					<?php
				}
				?>
				<?php
				if ($id==2) {
					?>
					<script>
						window.onload = function() {
							proveedores();
						};
					</script>

					<?php
				}
				?>
				<?php
				if ($id==3) {
					?>
					<script>
						window.onload = function() {
							Productos();
						};
					</script>

					<?php
				}
				?>
				<?php
				if ($id==4) {
					?>
					<script>
						window.onload = function() {
							Pedidos();
						};
					</script>

					<?php
				}
				?>

			</div>
			<footer>
				<div class="gg">
					<div class="contenedor1">
						<label>About</label>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="contenedor1">
							<label>Eventos</label>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.l</p>
							</div>
							<div class="h">
								<hr>		
							</div>
							<div class="contenedor2">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
							<div class="contenedor3">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. 
							</div>
							<div class="h" style="padding-bottom:20px; margin-top:10px;">
								<hr>		
							</div>
						</div>	
					</footer>
				</body>
			</HTML>
			<?php 
		}

		?>
