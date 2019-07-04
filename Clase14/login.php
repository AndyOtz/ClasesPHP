<?php 
	
	$usuarioGuardado= "Andres";
	$passwordGuardada= "123123";

	if ($_GET["usuario"] == $usuarioGuardado && $_GET["pass"] == $passwordGuardada)
	{
		echo "Bienvenido" . " " . $_GET["usuario"];
	}
	else {
		echo " Usuario o password incorrecta ";
	}
	
	
	

 ?>	
