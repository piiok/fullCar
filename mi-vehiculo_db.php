<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php 
		include("./conexion.php");
		extract($_POST);
		extract($_FILES);

		$foto_user  = "./docs/foto_usuario/".$cel.".jpg";
		$p_conducir_user = "./docs/p_conducir/".$cel.".pdf";


		$cons="INSERT INTO usuario(cel,nombre,pass,spam,p_conducir,foto) VALUES ('".$cel."','".$nombre."', '".$pass."', '".$spam."', '".$p_conducir_user."','".$foto_user."')";

		$res = mysqli_query ($conn ,$cons);
		if(empty($res)){
 			echo 'Error al registrarse'.mysqli_error($conn);
		}else{
			if (!empty($foto)) {
				if (move_uploaded_file($foto['tmp_name'], $foto_user)) {
					echo "El fichero es valido y se subió con éxito";
				}else{
					echo "¡Posible error en la subida de los ficheros!";
				}
			}
			if (!empty($p_conducir)) {
				if (move_uploaded_file($p_conducir['tmp_name'], $p_conducir_user)) {
					echo "El fichero es valido y se subió con éxito";
				}else{
					echo "¡Posible error en la subida de los ficheros!";
				}
			}
		}
		$conn->close();
		

 	?>
</body>
</html>
