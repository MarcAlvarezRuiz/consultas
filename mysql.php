<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action='mysql1.php' method='get'>
	
		<select name='pais'>
			<?php
				$conexion = mysqli_connect("localhost","marc","marc123");

				mysqli_select_db($conexion,'world');

				$listaPaises = "SELECT * from country;";

				$resultado = mysqli_query($conexion, $listaPaises);

				while ($registre = mysqli_fetch_assoc($resultado)) {
					echo "<option  value='".$registre["Code"]."'>".$registre["Name"]."\n</option>";
				}

				$CC = $_GET["pais"];
			?>
		</select>

		<input type='submit'>
	
	</form>
</body>
</html>