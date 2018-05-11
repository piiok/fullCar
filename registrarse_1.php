<html>
<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="./imagenes/icon.ico" type="image/x-icon" />
</head>
<body>
	<script src="./librerias/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
	
		<form id="form_reg1" name="form_reg1" action="./registrarse_2.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data" >
			<!-- El enctype="multipart/form-data" es necesario para enviar los FILES -->
						<br>
						<br>
						<h3>REGISTRARSE</h3> <br>
						Foto de perfil: <input type="file" name="foto" accept="image/*" placeholder="Selecciona una imagen"> <br> 
						<!-- application/pdf -->
						<br>
						Nombre: <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required="true" > <br>
						<br>
						Celular: <input type="number" id="cel" name="cel" placeholder="Ingrese su número de celular" required="true"> <br>
						<br>
						Contraseña: <input type="password" id="pass" name="pass" placeholder="Contraseña" required="true"> <br>
						<br>
						Correo: <input type="email" id="correo" name="correo" placeholder="Ingrese su número de celular" required="true"> <br>
						<br>
						<input type="checkbox" name="spam"> Deseo recibir información a mi correo electrónico.<br>
						<br>
						<a href="./index.php" title="Atras" style="text-decoration: none;">
						<input type="button" id="a1" value="Atras">
						</a>
						<button type="submit">Continuar</button>
		</form>
	<!-- <script src="./js/registrarse_ajax.js" type="text/javascript"></script> -->
</body>
</html>