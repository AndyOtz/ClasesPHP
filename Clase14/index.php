<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="estilos.css">
</head>

<body>
	<?php
		include("header.php");

		$nombre= "Andrés";
		$num1= "10";
		$num2= "50";
		$suma= $num1 + $num2;

		if ($suma> 10){
			echo "es mayor que 10";
		}
		else {
			echo "No es mayor que 10";
		}
		
	?>

	<article>
		<p>Contenido del index</p>
		<a href="contacto.php">Ir a contactos</a>
	</article>

	<footer>
		Pie de pagina
	</footer>
	
</body>
</html>