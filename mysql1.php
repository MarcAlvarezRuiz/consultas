<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		$conexion = mysqli_connect("localhost","marc","marc123");

		mysqli_select_db($conexion,'world');

		$CC = $_GET["pais"];
		
		$consulta = "select name from city where CountryCode='".$CC."';";
	

		$resultado = mysqli_query($conexion, $consulta);

		while ($registre = mysqli_fetch_assoc($resultado)) {
			echo $registre["name"];
			echo "<br>";

		}


	?>

</body>
</html>