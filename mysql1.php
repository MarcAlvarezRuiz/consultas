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
		
		$consulta = "SELECT city.name Ciutat,country.name Pais FROM city, country where city.CountryCode=country.Code AND 
             city.CountryCode='".$CC."';";
	

		$resultado = mysqli_query($conexion, $consulta);

		while ($registre = mysqli_fetch_assoc($resultado)) {
			echo $registre["Ciutat"]."---------------";
            echo $registre["Pais"];
            echo "<br>";
            
		}


	?>

</body>
</html>