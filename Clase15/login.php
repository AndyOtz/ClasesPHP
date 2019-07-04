<?php 
	
	session_start();


	if ( isset($_GET["nombre"]) && isset($_GET["pass"])){

		$conexion = new mysqli("localhost", "root","", "primerdb");

		$consulta = "SELECT * " .
		"FROM usuario " .
		"WHERE nombre= '" . $_GET ["nombre"] . "' " .
		"AND password= '" . $_GET["pass"] . "'";

		

		$resultado = $conexion->query( $consulta );

		if ( $resultado -> num_rows == 1 ){
				$_SESSION[" usuario"] = "Andres";
			
				echo "Ingreso";
			}

			else {
				echo "usuario y/o contraseña no valida/s";
			}
	
		}

		if ( !isset($_SESSION["usuario"]))
		{
 ?>

 <form action="">
		
		<label for="nombre">Nombre</label>
 		<input name="nombre" type="text">
 		
 		<label for="pass">Contraseña</label>
 		<input name="pass" type="password">
		
		<input type="submit" value="ingresar">
 </form>

 <?php } ?>