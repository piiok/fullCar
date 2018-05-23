<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mi vehiculo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="imagenes/icon1.ico" type="image/x-icon" />
</head>
<body>
	<?php 
		include("./conexion.php");
		session_start();
		extract($_POST);
		extract($_FILES);
		$cons1 ="SELECT `AUTO_INCREMENT` FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'full_car' AND   TABLE_NAME   = 'vehiculo';";
		#$cons1 ="SELECT id_vehiculo FROM full_car.vehiculo order by id_vehiculo desc limit 1";
		$rest = mysqli_query ($conn ,$cons1);
		
		$row=$rest->fetch_array();

		$foto_v = "./docs/foto_vehiculo/".$row[0].".".end(explode(".", $foto["name"]));

		if ($foto['tmp_name']=="") {
			$foto_v  = "";
		}

		$cons="INSERT INTO full_car.vehiculo(placa, modelo, color, tipo, foto,cel_v) VALUES ('".$placa."','".$modelo."', '".$color."', '".$tipo."','".$foto_v."','".$_SESSION[cel]."')";

		$res = mysqli_query ($conn ,$cons);
		if(empty($res)){
 			echo 'Error al registrarse'.mysqli_error($conn);
		}else{
			if ($foto['tmp_name']!="") {
				if (move_uploaded_file($foto['tmp_name'], $foto_v)) {
					echo "la foto es valida y se subió con éxito";
				}else{
					echo "¡Posible error en la subida de la foto!";
				}
			}
		}
		$conn->close();

 	?>
	<script src="./librerias/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
	
	<center>
	<form class="formulario" id="form_v1" name="form_v1" action="mi-vehiculo_db.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data" >
						<br>
						<br>
						<h3>MI VEHÍCULO</h3> <br>
						Tarjeta de propiedad: <input type="file" name="t_propiedad" accept="application/pdf" > <br>
						<!-- application/pdf -->
						<br>
						Técnico mecánico: <input type="file" name="t_mecanico" accept="application/pdf" > <br>
						<br>
						<h4>Información: </h4>
						<p style="width: 80vw;">
							Los documentos que acá se le solicitan no son obligatorios. Pero si sube estos documentos su confiabilidad como conductor subirá. Estos documentos NO serán compartidos.
						</p>
						<a href="#parte1" style="text-decoration: none;" title="Atras">
						<input type="button" id="a2" value="Atras">
						</a>
						<input type="submit" name="send" value="Finalizar"> 
				
	</form>
	</center>
</body>
</html>