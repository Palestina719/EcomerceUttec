<?php
	require_once("sesion.class.php");
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");	
	if( $usuario == false )
	{
			
		header("Location: login.php");
		
	}
	else 
	{
		$usuario = $sesion->get("usuario");	
		$sesion->termina_sesion();	
		echo "<script> alert ('Su Sesión ha finalizado')</script>";
		header("location: login.php");
	}
?>
