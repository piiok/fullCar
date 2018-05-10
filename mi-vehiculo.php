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
	<link rel="shortcut icon" href="imagenes/icon.ico" type="image/x-icon" />
</head>
<body>
	<script src="./librerias/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
	
	<center>
		<form id="form_v1" name="form_v1" >
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

						 ?>" >
						<br> 
						<!-- application/pdf -->
						<br>
						Tipo de vehículo: <select id="tipo" name="tipo" disabled>
							<option checked value="Carro">Carro</option>
							<option value="Moto">Moto</option>
							<option value="Buseta">Buseta</option>
							<option value="Bus">Bus</option>
							<option value="Otro">Otro</option>
						</select><br>
						<br>
						Modelo: <input type="text" id="modelo" name="modelo" placeholder="Escribe el modelo de tu auto" disabled> <br>
						<br>
						Color: <input type="text" id="color" name="color" placeholder="Ingrese el color de tu auto" required="true" disabled> <br>
						<br>
						Placa: <input type="text" id="placa" maxlength="6" name="placa" placeholder="xxx123" required="true" disabled> <br>
						<br>
						<h4>Información: </h4>
						<p style="width: 80vw;">
							Esta información excepto los documentos serán compartida con quienes usted elija como pasajeros, con el fin de ubicar eficazmente el vehículo.
						</p>
						<h4 style="font-weight: bold;">Documentos:</h4> <br>
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
							echo $row[t_macanico]
						 ?>" alt="No hay documento" download>
						 <?php 
						 if ($row[t_mecanico]=="") {
							echo "</a>No hay documento.";

						 }else{
						 	echo $row[t_mecanico]."</a>";
						 }
						 ?>
						 	
						 
						 <br><br>
						<a style="text-decoration: none;" href="./mi-vehiculo_edit.php" title="Editar">
						<input type="button" id="c1" value="Editar"></a>
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