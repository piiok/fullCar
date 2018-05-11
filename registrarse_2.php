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
	<link rel="stylesheet" type="text/css" href="./css/registrarse2.css">
	<link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<script src="./librerias/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
	<center><div class="col-xl-12 text-left" class="col-lg-6 text-left" class="col-md-6 text-left" class="col-sm-6 text-left" style="padding-top: 15px; min-height: 100vh; display: grid;"> 
	<form class="formulario" id="form_reg1" name="form_reg1" action="./registrarse_3.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data" >
			<!-- El enctype="multipart/form-data" es necesario para enviar los FILES -->
		<fieldset>
		  <legend><center><h1>Registro</h1></center></legend>
		  <center><img src="imagenes/logofull1.png" style="width: 50%"></center>
		  	  <div class="celular form-group">
		  	  <div class="input-group mb-3">
		  	    <div class="custom-file">
		  	      <input type="file" class="custom-file-input" type="file" name="p_conducir" accept="application/pdf" placeholder="Selecciona una imagen">
		  	      <label class="custom-file-label" for="inputGroupFile02">Sube tu licencia acá</label>
		  	    </div>
		  	    <!-- <div class="input-group-append">
		  	      <span class="input-group-text" id="">Upload</span>
		  	    </div> -->
		  	  </div>
		  	</div>
			<div class="celular texto">
			    <p>Es necesario que nos proporciones tu permiso de conducir, ya que esta aplicacion es dirigida a personas que poseen un vehiculo o que conducen uno. El documento debe proporcinarse como archivo .pdf y NO DEBE SUPERAR LOS 500Kb</p>
			</div>
			<hr>	
			<div class="celular texto2" style="background-color: black; opacity: 0.7; border-radius: 5px;padding: 13px;">
			 	<h4 style="color: white;">Aviso de legalidad</h4>
			    <p><strong style="color: white;">Al finalizar el registro usted acepta que Fullcar utilice sus datos personales, con fines del mejoramiento de este.</strong></p>
			</div>
			<center><button type="submit" class="btn btn-warning btn-lg btn-large" style="margin-top: 30px; margin-bottom: 15px;border: solid 0.5px black;">Finalizar</button></center>
			    </div>
	</center>
</form>
	<!-- <script src="./js/registrarse_ajax.js" type="text/javascript"></script> -->
</body>
</html>