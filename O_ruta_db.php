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

		$cons="INSERT INTO full_car.ruta(fecha,hora_salida,hora_llegada,origen,origen_tipo,destino,destino_tipo,cel_r) VALUES ('".$Date."','".$HPartida."','".$HLlegada."','".$Origen."','".$TipoOrigen."','".$Destino."','".$TipoDestino."','".$_SESSION[cel]."');";
		echo $cons;
		$res = mysqli_query ($conn ,$cons);
		if(empty($res)){
 			echo 'Error: '.mysqli_error($conn);
		}else{
			$cons1="SELECT id_ruta FROM full_car.ruta ORDER BY id_ruta desc";
			$rest = mysqli_query ($conn ,$cons1);
			$id_ruta=$rest->fetch_array()[0]; #Machetico chan
			print_r($tipoEscala);
			print_r($Escala);
			$i=0;
			$tipo=$tipoEscala[0];
			echo $tipo;
			while (!empty($tipo)) {
				if($Escala[$i]!=""){
					$consi="INSERT INTO full_car.escalas(lugar,lugar_tipo,id_ruta_e) VALUES ('".$Escala[$i]."','".$tipo."','".$id_ruta."');";
					$resti = mysqli_query($conn ,$consi);
					if(empty($resti)){
			 			echo 'Error al registrarse'.mysqli_error($conn);
					}
				}		
				$i+=1;
				$tipo=$tipoEscala[$i];
			}
		}
		$conn->close();
		header("Location:./OfrecerRutaLoad.html");

 	?>
</body>
</html>
