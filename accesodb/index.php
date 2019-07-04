<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listado de clientes</title>
</head>
<body>

	<ul>
	<?php 

		$conexion = new mysqli('127.0.0.1','root','','primerdb');
		$sql = "SELECT * FROM clientes";
		$resultado = $conexion->query($sql);

		while($registro = $resultado->fetch_assoc())
		{
			echo"<li>" .  $registro["nombre"] . "</li>";

		}
	

	
	 ?>

 </ul>
</body>
</html>
