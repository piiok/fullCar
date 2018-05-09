<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<center>
	<form action="envia.php" method="POST" accept-charset="utf-8">
		<h3>INICIO DE SESIÓN</h3> <br>
		<input type="number" name="cel" placeholder="Ingrese su numero de celular" required="true"> <br>
		<br>
		<input type="password" name="pass" placeholder="Contraseña" required="true"> <br>
		<div style="color:red;">
		<?php 
			error_reporting(0);
			extract($_GET);
			if ($error=="NoCel") {
				echo "Celular no registrado.";
			}elseif ($error=="NoPass") {
				echo "Contraseña incorrecta.";
			}
		 ?>	
		</div>
		<br>
		<input type="checkbox" name="recuerdame" > Recordar mis datos<br>
		<br>
		<button type="submit">Enviar</button> <br> <br>
		<a href="./registrarse_1.php"> Registrarse </a>
	</form>
	</center>
</body>
</html>