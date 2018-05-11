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
	<script src="./librerias/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>

			<!-- El enctype="multipart/form-data" es necesario para enviar los FILES -->
						<br>
						<br>
						<h3>REGISTRARSE</h3> <br>
						<h1 style="text-decoration:underline;">Aviso legal</h1> <br>
						<p style="width: 80vw;">
							Al finalizar el registro usted acepta que FullCar utilice sus datos personales, con fines del mejoramiento de la experiencia con la aplicación.
						</p>
						<a href="#parte2" title="Atras" style="text-decoration: none;">
						<input type="button" id="a3" value="Atras">
						</a>
						<a href="./mi-vehiculo_1.php" title="Continuar"><button>Continuar</button></a>
						<!-- <input type="button" name="send" value="Finalizar" onclick="form_reg1.submit()">  -->
						<!-- El botón debe ser un tag input para evitar el auto-envió con el enter -->
		</form>

	<!-- <script src="./js/registrarse_ajax.js" type="text/javascript"></script> -->
</body>
</html>