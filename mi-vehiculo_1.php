<html>
<head>
	<title>Mi Vehículo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="imagenes/icon.ico" type="image/x-icon" />
	<style>
		section{
			width: 100vw;
			height: 100vh;
		}
	</style>
</head>
<body>
	<script src="./librerias/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
	
	<center>
		<form id="form_v1" name="form_v1" action="mi-vehiculo_db.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data" >
			<!-- El enctype="multipart/form-data" es necesario para enviar los FILES -->
					<a name="parte1"></a>
					<section id="parte1">
						<br>
						<br>
						<h3>MI VEHÍCULO</h3> <br>
						<input type="file" name="foto" accept="image/*" placeholder="Selecciona una imagen"> <br> 
						<!-- application/pdf -->
						<br>
						Tipo de vehículo: <select name="tipo">
							<option value="Carro">Carro</option>
							<option value="Moto">Moto</option>
							<option value="Buseta">Buseta</option>
							<option value="Bus">Bus</option>
							<option value="Otro">Otro</option>
						</select><br>
						<br>
						Modelo: <input type="text" id="modelo" name="modelo" placeholder="Escribe el modelo de tu auto" > <br>
						<br>
						Color: <input type="text" id="color" name="color" placeholder="Ingrese el color de tu auto" required="true"> <br>
						<br>
						Placa: <input type="text" id="placa" maxlength="6" name="placa" placeholder="xxx123" required="true"> <br>
						<br>
						<h4>Información: </h4>
						<p style="width: 80vw;">
							Esta información será compartida con quienes usted elija como pasajeros, con el fin de ubicar eficazmente el vehículo.
						</p>
						<a style="text-decoration: none;" href="#parte2" title="Continuar">
						<input type="button" id="c1" value="Continuar"></a>
					</section>
					<a name="parte2"></a>
					<section id="parte2">
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
						<input type="button" name="send" value="Finalizar" onclick="form_v1.submit()"> 
					</section>
		</form>
	</center>
</body>
</html>