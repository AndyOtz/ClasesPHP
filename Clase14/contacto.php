<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>
	<link rel="stylesheet" href="estilos.css">
</head>

<body>
	<?php
		include("header.php")
	?>

	<article>

		<form action="login.php" method="GET">
			<label for="usuario">Usuario:</label>
			<input name="usuario" type="text">
			<label for="pass">Contraseña</label>
			<input name= "pass" type="password">
			<input type="submit" value="Ingresar">
		</form>
		
		<a href="index.php">Ir a página de inicio</a>
	</article>

	<footer>
		Pie de pagina
	</footer>
	
</body>
</html>