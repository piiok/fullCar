<?php 
	#error_reporting(0);
	session_start();
	include("./conexion.php");
	extract($_POST);
	extract($_FILES);
	if ($_SESSION[sesion]=="si") {

		$p_conducir_user = "./docs/p_conducir/".$_SESSION[cel].".pdf";
		if ($p_conducir['tmp_name']=="") {
					$p_conducir_user="";
				}

		$cons="UPDATE full_car.usuario SET p_conducir='".$p_conducir_user."' WHERE cel='".$_SESSION[cel]."'";

		$res = mysqli_query ($conn ,$cons);
		if(empty($res)){
 			echo 'Error al registrarse: '.mysqli_error($conn);
		}else{
			if ($p_conducir['tmp_name']!="") {
				if (move_uploaded_file($p_conducir['tmp_name'], $p_conducir_user)) {
					echo "El fichero es valido y se subió con éxito<br>";
				}else{
					echo "¡Posible error en la subida de los ficheros!<br>";
				}
			}
		}
	}
	 ?>
<html>
<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="./imagenes/icon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		section{
			width: 100vw;
			height: 100vh;
		}
	</style>
	<link rel="shortcut icon" href="imagenes/icon.ico" type="image/x-icon" />
</head>
<body>
	<?php 
	header("Location: ./mi-vehiculo_1.php");
	 ?>
</body>
</html>