<?php 

	session_start();
	$_SESSION["usuario"] = "Andres";

	if (isset($session_start["usuario"])){
		echo "Hi" . $_SESSION["usuario"];
	}
	else{
		echo "Usuario no ingresado";
	}
 ?>