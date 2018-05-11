<?php 
	error_reporting(0);
	session_start();
	include("./conexion.php");
	extract($_POST);
	extract($_FILES);
	if ($_SESSION[sesion]=="") {

		$foto_user  = "./docs/foto_usuario/".$cel.".".end(explode(".", $foto["name"]));

		if ($foto['tmp_name']=="") {
			$foto_user  = "";
		}

		if ($spam) {
			$spam=1;
		}else{
			$spam=0;
		}

		$cons="INSERT INTO usuario(cel,nombre,pass,spam,p_conducir,foto,correo) VALUES ('".$cel."','".$nombre."', '".md5($pass)."', '".$spam."', '".$p_conducir_user."','".$foto_user."','".$correo."')";

		$res = mysqli_query ($conn ,$cons);
		if(empty($res)){
 			echo 'Error al registrarse: '.mysqli_error($conn);
		}else{
			if ($foto['tmp_name']!="") {
				if (move_uploaded_file($foto['tmp_name'], $foto_user)) {
					echo "El fichero es valido y se subió con éxito<br>";
				}else{
					echo "¡Posible error en la subida de los ficheros!<br>";
				}
			}
		}
		$_SESSION["sesion"] = "si";
		$_SESSION["cel"] =$cel;
		$_SESSION["nombre"]=$nombre;
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
	
		<form id="form_reg1" name="form_reg1" action="./registrarse_3.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data" >
			<!-- El enctype="multipart/form-data" es necesario para enviar los FILES -->
						<br>
						<br>
						<h3>REGISTRARSE</h3> <br>
						Permiso de conducir: <input type="file" name="p_conducir" accept="application/pdf" placeholder="Selecciona una imagen"> <br> 
						<!-- application/pdf -->
						<br>
						<p style="width: 80vw;">
							Es necesario que nos proporciones tu permiso de conducir, ya que esta aplicación es dirigida hacia personas con auto o que conducen uno.
							El documento debe proporcionarse como archivo .pdf, y no debe superar los 500Kb.
						</p>
						<button type="submit">Continuar</button>
		</form>
	<!-- <script src="./js/registrarse_ajax.js" type="text/javascript"></script> -->
</body>
</html>