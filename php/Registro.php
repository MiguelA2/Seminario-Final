<?php
		include 'conexion.php';
?>

	<!DOCTYPE html>
	<html>
	<head>
		
	</head>
	<body>
		<?php
		$Id = $_POST['codigo'];
		$Nombre = $_POST['nombre'];
		$Descripcion = $_POST['descripcion'];
		$Precio = $_POST['precio'];
		$sql = "INSERT INTO restaurante(IdRest, NombreCli, Descrip, Precio)
			values('$Id','$Nombre','$Descripcion','$Precio')";
			if($conexion->query($sql) == TRUE ){
				echo ("Insercion exitosa");
			}
			else{
				echo("Insercion Rechazada");
			}

			?>		
	</body>
	</html>>