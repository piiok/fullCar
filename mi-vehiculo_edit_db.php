<!DOCTYPE html>
<html>
<head>
	<title>Mi vehículo</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="imagenes/icon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php 
		include("./conexion.php");
		session_start();
		extract($_POST);
		extract($_FILES);
		$cons1 ="SELECT id_vehiculo FROM  full_car.vehiculo WHERE cel_v='".$_SESSION[cel]."'";
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
		$cons="UPDATE full_car.vehiculo SET placa='".$placa."', modelo='".$modelo."', color='".$color."', t_propiedad='".$t_propiedad_v."', t_mecanico='".$t_mecanico_v."' , tipo='".$tipo."', foto='".$foto_v."' WHERE cel_v='".$_SESSION[cel]."'";

		$res = mysqli_query ($conn ,$cons);
		if(empty($res)){
 			echo 'Error al registrarse'.mysqli_error($conn);
		}else{
			if ($foto['tmp_name']!="") {
				unlink($foto_v);
				if (move_uploaded_file($foto['tmp_name'], $foto_v)) {
					echo "El fichero es valido y se subió con éxito<br>";
				}else{
					echo "¡Posible error en la subida de los ficheros!<br>";
				}
			}
			if ($t_propiedad['tmp_name']!="") {
				unlink($t_propiedad_v);
				if (move_uploaded_file($t_propiedad['tmp_name'], $t_propiedad_v)) {
					echo "El fichero es valido y se subió con éxito<br>";
				}else{
					echo "¡Posible error en la subida de los ficheros!<br>";
				}
			}
			if ($t_mecanico['tmp_name']!="") {
				unlink($t_mecanico_v);
				if (move_uploaded_file($t_mecanico['tmp_name'], $t_mecanico_v)) {
					echo "El fichero es valido y se subió con éxito<br>";
				}else{
					echo "¡Posible error en la subida de los ficheros!<br>";
				}
			}
		}
		$conn->close();
		header("Location: ./mi-vehiculo.php");

 	?>
</body>
</html>