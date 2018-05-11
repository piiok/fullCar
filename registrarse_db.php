<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="imagenes/icon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php 
		include("./conexion.php");
		extract($_POST);
		extract($_FILES);

		$foto_user  = "./docs/foto_usuario/".$cel.".".end(explode(".", $foto["name"]));
		$p_conducir_user = "./docs/p_conducir/".$cel.".pdf";

		if ($foto['tmp_name']=="") {
			$foto_user  = "";
		}

		if ($p_conducir['tmp_name']=="") {
			$p_conducir_user="";
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
			if ($p_conducir['tmp_name']!="") {
				if (move_uploaded_file($p_conducir['tmp_name'], $p_conducir_user)) {
					echo "El fichero es valido y se subió con éxito<br>";
				}else{
					echo "¡Posible error en la subida de los ficheros!<br>";
				}
			}
		}
		$conn->close();
		header("Location: ./index.php");
		

 	?>
</body>
</html>
