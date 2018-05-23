<html>
<head>
	<?php 
		error_reporting(0);
		session_start();
		#echo $_SESSION[cel];
		include("./conexion.php");
		$sql="SELECT * FROM full_car.vehiculo WHERE cel_v='".$_SESSION[cel]."'";
		#echo $sql;
		$res = mysqli_query($conn,$sql);
		$row=$res->fetch_array();

	 ?>

	<title>Mi Vehículo</title>
	<meta charset="UTF-8">
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
	
	<center>
		<form id="form_v1" name="form_v1" action="./mi-vehiculo_edit_db.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
			<!-- El enctype="multipart/form-data" es necesario para enviar los FILES -->
					<a name="parte1"></a>
					<section id="parte1">
						<br>
						<br>
						<h3>MI VEHÍCULO</h3> <br>
						<img style="width:150px;" src="<?php  
							if($row[foto]==""){
								echo "./imagenes/default-image.png";
							}else{
								echo $row[foto];
							}

						 ?>" ><br>
						<input type="file" name="foto" accept="image/*" > <br> 
						
						<br> 
						<!-- application/pdf -->
						<br>
						Tipo de vehículo: <select id="tipo" name="tipo" >
							<option checked value="1">Auto</option>
							<option value="2">Camioneta</option>
							<option value="3">Moto</option>
						</select><br>
						<br>
						Modelo: <input type="text" id="modelo" name="modelo" placeholder="Escribe el modelo de tu auto"> <br>
						<br>
						Color: <input type="color" id="color" name="color" placeholder="Ingrese el color de tu auto" required="true"> <br>
						<br>
						Placa: <input type="text" id="placa" maxlength="6" name="placa" placeholder="xxx123" required="true"> <br>
						<br>
						<h4>Información: </h4>
						<p style="width: 80vw;">
							Esta información excepto los documentos serán compartida con quienes usted elija como pasajeros, con el fin de ubicar eficazmente el vehículo.
						</p><br> 
						<br>
						<a style="text-decoration: none;" href="#parte2" title="Continuar">
						<input type="button" id="c1" value="Continuar"></a>
					</section>
					<a name="parte2"></a>
					<section id="parte2">
						<br>
						<br>
						<h3>MI VEHÍCULO</h3> <br>
						<h4 style="font-weight: bold;">Actualizacion de documentos:</h4> <br>
						Tarjeta de propiedad: <input type="file" name="t_propiedad" accept="application/pdf" > <br>
						<!-- application/pdf -->
						<br>
						Técnico mecánico: <input type="file" name="t_mecanico" accept="application/pdf" > <br>
						<br>
					
						<h4 style="font-weight: bold;">Documentos antiguos:</h4> <br>
						Tarjeta de propiedad: 
						<a href="<?php 
							echo $row[t_propiedad]
						 ?>" alt="No hay documento" download>
						 <?php 
						 if ($row[t_propiedad]=="") {
							echo "</a>No hay documento.";
						 }else{
						 	echo $row[t_propiedad]."</a>";
						 }
						 ?>
						 	
						 
						 <br>
						 Técnico mecánico: <a href="<?php 
							echo $row[t_mecanico]
						 ?>" alt="No hay documento" download>
						 <?php 
						 if ($row[t_mecanico]=="") {
							echo "</a>No hay documento.";

						 }else{
						 	echo $row[t_mecanico]."</a>";
						 }
						 ?>
						<h4>Información: </h4>
						<p style="width: 80vw;">
							Los documentos que acá se le solicitan no son obligatorios. Pero si sube estos documentos su confiabilidad como conductor subirá. Estos documentos NO serán compartidos.
						</p>
						<a href="#parte1" style="text-decoration: none;" title="Atras">
						<input type="button" id="a2" value="Atras">
						</a>
						<button type="submit">Actualizar</button>
						 <br><br>
					</section>
		</form>
	</center>
	<script>
		var tipo = document.getElementById("tipo");
		var modelo = document.getElementById("modelo");
		var color = document.getElementById("color");
		var placa = document.getElementById("placa");
		tipo.value = "<?php echo $row[tipo] ?>";
		modelo.value = "<?php echo $row[modelo] ?>";
		color.value = "<?php echo $row[color] ?>";
		placa.value = "<?php echo $row[placa] ?>";

		
	</script>
</body>
</html>