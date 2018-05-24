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

		$cons="UPDATE full_car.vehiculo SET t_propiedad ='".$t_propiedad_v."', t_mecanico = '".$t_mecanico_v."' WHERE cel_v='".$_SESSION[cel]."';";

		#$res = mysqli_query ($conn ,$cons);
		if(empty($res)){
 			echo 'Error al registrarse'.mysqli_error($conn);
		}else{

		}
		$conn->close();
		header("Location:./home.php");

 	?>
</body>
</html>
