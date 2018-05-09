<!DOCTYPE html>
<html>
<head>
	<title>FullCar</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="imagenes/icon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h3>Bienvenid@ 
	<?php 
	error_reporting(0);
	session_start();
	echo $_SESSION[nombre];
	 ?></h3><br><br>
	 <a href="./salir.php" title="Cerrar sesión">Cerrar Sesión</a>
</body>
</html>