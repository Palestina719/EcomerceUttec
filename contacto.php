<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='css/style.css' rel='stylesheet'/>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/slimmenu.min.css">
	<script src="src/js/jquery-1.12.0.min.js"></script>
	<style>
		body {
			font-family: 'Lucida Sans Unicode', 'Lucida Console', sans-serif;
			padding: 0;
		}
		a, a:active { text-decoration: none }
	</style>
	<style>

		/* Swipe 2 required styles */

		.swipe {
			overflow: hidden;
			visibility: hidden;
			position: relative;
		}
		.swipe-wrap {
			overflow: hidden;
			position: relative;
		}
		.swipe-wrap > div {
			float:left;
			width:100%;
			position: relative;
		}

		/* END required styles */

	</style>
</head>
<body>
	<div class="contenedor">	
		<div class="head">
			<div class="logo">
				<img src="images/logo.jpg">
			</div>
			<div class="buscador">
				<div class="flexsearch">
					<div class="flexsearch--wrapper">
						<form class="flexsearch--form" action="#" method="post">
							<div class="flexsearch--input-wrapper">
								<input class="flexsearch--input" type="search" placeholder="search">
							</div>
							<input class="flexsearch--submit" type="submit" value="&#10140;"/>
						</form>
					</div>
				</div>
			</div>
			<div class="telefono">
				<img src="images/redes.jpg">
			</div>
			<div class="categorias">
				<div class="ico">
					<img src="images/Menu.png">
				</div>
				<div class="text">
					<span><b>Categorías</b></span>
				</div>
			</div>
			<div id="menu">
				<ul class="slimmenu">
					<li>
						<a href="index.php">Inicio</a>
					</li>
					<li><a href="somos.html">Nosotros</a></li>
					<li>
						<a href="#">Productos</a>

					</li>
					<li><a href="contacto.php">Contacto</a></li>
					<li><a href="login.php">Acceder</a></li>
				</ul>

				<script src="src/js/jquery.slimmenu.js"></script>
				<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> -->
				<script>
					$('.slimmenu').slimmenu(
					{
						resizeWidth: '860',
						collapserTitle: 'Main Menu',
						animSpeed:'medium',
						indentChildren: true,
						childrenIndenter: '&raquo;'
					});
				</script>
			</div>
			<div class="Lcategorias">
				<div class="cat">
					<ul>
						<li><a href="#">TV/VIDEO</a></li>
						<hr>
						<li><a href="#">Mobiles</a></li>
						<hr>
						<li><a href="#">Computadoras</a></li>
						<hr>
						<li><a href="#">Electrodomesticos</a></li>
						<hr>
						<li><a href="#">Electrónica</a></li>
					</ul>
				</div>
				<div class="encabezados">
					Special
				</div>
				<div class="prodE">
					<div class="imagen">
						<img src="images/i1.png">	
					</div>
					<div class="descrip">
						<p>
							Iphone 6 S Diferentes colores y diferentes capacidades
						</p>
						<a href="producto1.html">Ver Más</a>
					</div>
				</div>
				<div class="prodE">
					<div class="imagen">
						<div><img src="images/ip1.png" style="width:100%; padding:3px;"></div>
					</div>
					<div class="descrip">
						<p>Ipad air diferentes colores y capacidades</p>
						<a href="producto2.html">Ver Más</a>
					</div>
				</div>
				<div class="prodE">
					<div class="imagen">
						<div><img src="images/m1.png" style="width:100%; padding:3px;"></div>
					</div>
					<div class="descrip">
						<p>Macbook pro de 128gb diferentes colores</p>
						<a href="producto4.html">Ver Más</a>
					</div>
				</div>

				<div class="encabezados">
					Mejores ventas
				</div>
				<div class="prodE">
					<div class="imagen">
						<div><img src="images/tv1.png" style="width:100%; padding:3px;"></div>
					</div>
					<div class="descrip">
						<p>Apple tv</p>
						<a href="producto2.html">Ver Más</a>
					</div>
				</div>
			</div>
			<section>
				<div class="contact">
					<?php
					if (isset($_POST['txtnom'])) {
				//echo $_POST['txtnom'];
				//echo $_POST['txttel'];
				//echo $_POST['txtmail'];
				//echo $_POST['txtobs'];
						$Vnombre=$_POST['txtnom'];
						$Vtelefono=$_POST['txttel'];
						$Vmail= $_POST['txtmail'];
						$Vobserv=$_POST['txtobs'];

						$Asunto="Solicitud de Informacion";
						$Mensaje="El usuario".$_POST['txtnom']."ha solicitado informacion del sitio: Sus datos son:".$Vtelefono." ".$Vmail." ".$Vobser;
						$destinatario=$Vmail;
						$remitente="m_palestina719@hotmail.com";

						mail($destinatario,$Asunto,$Mensaje,$remitente);

						echo "<h2> Mensaje enviado</h2>";

						?>
						<h1>Contacto</h1>
						<form method="post" action="contacto.php">
							<input type="text" name="txtnom" required placeholder="Nombre" class="caja">
							<input type="number" name="txttel" required placeholder="Telefono" class="caja">
							<input type="email" name="txtmail" required placeholder="Mail" class="caja">
							<textarea name="txtobs" required placeholder="Comentarios" class="caja"></textarea>
							<input type="submit" name="btn" value="Enviar" class="btn">
						</form>
					<?php
						}else{
						?>
						<h1>Contacto</h1>
						<form method="post" action="contacto.php">
							<input type="text" name="txtnom" required placeholder="Nombre" class="caja">
							<input type="number" name="txttel" required placeholder="Telefono" class="caja">
							<input type="email" name="txtmail" required placeholder="Mail" class="caja">
							<textarea name="txtobs" required placeholder="Comentarios" class="caja"></textarea>
							<input type="submit" name="btn" value="Enviar" class="btn">
						</form>
						<?php
					}
					?>
				</div>
			</section>
			
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
					<script src='css/swipe.js'></script>
					<script>

// pure JS
var elem = document.getElementById('mySwipe');
window.mySwipe = Swipe(elem, {
	startSlide: 4,
	auto: 3000,
	continuous: true,
	disableScroll: true,
	stopPropagation: true,
	callback: function(index, element) {},
	transitionEnd: function(index, element) {}
});

// with jQuery
// window.mySwipe = $('#mySwipe').Swipe().data('Swipe');

</script>
</body>
</html>