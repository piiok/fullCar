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
		$cons1 ="SELECT `AUTO_INCREMENT` FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'full_car' AND   TABLE_NAME   = 'vehiculo';";
		#$cons1 ="SELECT id_vehiculo FROM full_car.vehiculo order by id_vehiculo desc limit 1";
		$rest = mysqli_query ($conn ,$cons1);
		
		$row=$rest->fetch_array();

		$foto_v = "./docs/foto_vehiculo/".$row[0].".".end(explode(".", $foto["name"]));
		$t_mecanico_v = "./docs/t_mecanico/".$row[0].".pdf";
		$t_propiedad_v = "./docs/t_propiedad/".$row[0].".pdf";

		if ($foto['tmp_name']=="") {
			$foto_v  = "";
		}

		if ($t_mecanico['tmp_name']=="") {
			$t_mecanico_v="";
		}

		if ($t_propiedad['tmp_name']=="") {
			$t_propiedad_v="";
		}

		if ($spam) {
			$spam=1;
		}else{
			$spam=0;
		}
		$cons="INSERT INTO full_car.vehiculo(placa, modelo, color, t_propiedad, t_mecanico, tipo, foto) VALUES ('".$placa."','".$modelo."', '".$color."', '".$t_propiedad_v."', '".$t_mecanico_v."', '".$tipo."','".$foto_v."')";

		$res = mysqli_query ($conn ,$cons);
		if(empty($res)){
 			echo 'Error al registrarse'.mysqli_error($conn);
		}else{
			if ($foto['tmp_name']!="") {
				if (move_uploaded_file($foto['tmp_name'], $foto_v)) {
					echo "El fichero es valido y se subió con éxito";
				}else{
					echo "¡Posible error en la subida de los ficheros!";
				}
			}
			if ($t_propiedad['tmp_name']!="") {
				if (move_uploaded_file($t_propiedad['tmp_name'], $t_propiedad_v)) {
					echo "El fichero es valido y se subió con éxito";
				}else{
					echo "¡Posible error en la subida de los ficheros!";
				}
			}
			if ($t_mecanico['tmp_name']!="") {
				if (move_uploaded_file($t_mecanico['tmp_name'], $t_mecanico_v)) {
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
