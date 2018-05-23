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
	<link rel="stylesheet" type="text/css" href="./css/registrarse2.css">
	<link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<script src="./librerias/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
	  <center><div class="col-xl-12 text-left" class="col-lg-6 text-left" class="col-md-6 text-left" class="col-sm-6 text-left" style="padding-top: 15px; min-height: 100vh; display: grid;"> 
		<fieldset>
	  	<center><h1>Mi vehículo</h1></center>
	  	<center><img src="<?php  
							if($row[foto]==""){
								echo "./imagenes/default-image.png";
							}else{
								echo $row[foto];
							}

						 ?>" style="width: 50%"></center>
	  <br>
			<!-- El enctype="multipart/form-data" es necesario para enviar los FILES -->
						<div class="celular form-group">
						<div class="linea" style="border: solid black 0.5px; margin-bottom: 15px;"></div>
     						<div class="form-group">
							Tipo de vehículo: <select class="custom-select " id="tipo" name="tipo" disabled>
							<option checked value="1">Auto</option>
							<option value="2">Camioneta</option>
							<option value="3">Moto</option>
						</select>
						</div>
						</div>
						<div class="celular form-group">
						<label for="exampleInputEmail1" >Modelo:</label>
						<input class="form-control" type="text" id="modelo" name="modelo" placeholder="" disabled> <br>
    					</div>
    					<div class="celular form-group">
						<label for="exampleInputEmail1">Color: </label>
						<input  class="form-control" type="color" id="color" name="color" placeholder="" required="true" disabled> <br>
						</div>
   						<div class="celular form-group">
						<label for="exampleInputEmail1" >Placa</label>
						<input class="form-control" type="text" id="placa" maxlength="6" name="placa" placeholder="" required="true" disabled> <br>
						<br>
						<h4 style="font-weight: bold;">Documentos:</h4> <br>
						Tarjeta de propiedad: 
						<a href="<?php 
							echo $row[t_propiedad]
						 ?>" alt="No hay documento" download>
						 <?php 
						 if ($row[t_propiedad]=="") {
							echo "</a>No hay documento.";
						 }else{
						 	echo "Descargalo aquí.</a>";
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
						 	echo "Decargalo aquí.</a>";
						 }
						 ?>
						 <br>
						 <br>
						 <div class="celular texto2" style="background-color: black; opacity: 0.7; border-radius: 5px;padding: 13px;">
						 	<h4 style="color: white;">Información: </h4>
							<p><strong style="color: white;">
								Esta información excepto los documentos serán compartida con quienes usted elija como pasajeros, con el fin de ubicar eficazmente el vehículo.
							</strong></p>
						</DIV>
						 	
						<a style="text-decoration: none;color:transparent;" href="./mi-vehiculo_edit.php" title="Editar">
						<button class="btn btn-warning btn-lg btn-large" 
						style="
							margin-bottom: 15px;
							border: solid 0.5px black;
							position: fixed;
							bottom: 5px;
							right: 35px;
							font-size: 1.5em;
							">Editar</button></a>
				</center>
		</form>
	
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