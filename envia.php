<!DOCTYPE html>
<html>
<head>
	<title>Envia</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php 
	session_start();

	include("./conexion.php");
	extract($_POST);


	#echo $cel;

	$res = mysqli_query ($conn ,"SELECT * FROM usuario WHERE cel=".$cel);

	if(empty($res)){
 		echo 'Error al registrarse'.mysqli_error($conn);
	}else{ 
		if($res->num_rows == 0){
			header("Location: ./inicio.php?error=NoCel");	
		}else{
			echo "row complet";
			$row = $res->fetch_assoc();

			if ($row["pass"]==md5($pass)) {
				$_SESSION["sesion"] = "si";
				$_SESSION["cel"] =$cel;
				$_SESSION["nombre"]=$row[nombre];
				header("Location: ./index.php");
			}else{
				header("Location: ./inicio.php?error=NoPass");	
			}
		}
	}

 ?>
</body>
</html>
