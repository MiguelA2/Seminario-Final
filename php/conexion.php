<?php
	$servidor    = "localhost";
	$usuario     = "root";
	$contrasenha = "";
	$BD          = "parcialF";
	
	$conexion = new mysqli ($servidor, $usuario, $contrasenha, $BD);
	
	if(!$conexion) {
		echo '<script language="javascript">alert("Fallo la conexion.");window.location.href="../index.html"</script>';
		die("connection failed: " . mysqli_connect_error());
	}
?>