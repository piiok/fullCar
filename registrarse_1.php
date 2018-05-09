<html>
<head>
	<title>Registro</title>
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
	
		<form id="form_reg1" name="form_reg1" action="./registrarse_db.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data" >
			<!-- El enctype="multipart/form-data" es necesario para enviar los FILES -->
				
					
					<section id="parte1">
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
						<input type="checkbox" name="spam"> Deseo recibir información a mi correo electrónico.<br>
						<br>
						<a href="./index.php" title="Atras" style="text-decoration: none;">
						<input type="button" id="a1" value="Atras">
						</a>
						<a href="#parte2" title="Continuar" style="text-decoration: none;">
						<input type="button" id="c1" value="Continuar">
						</a>
					</section>
					<a name="parte2"></a>
					<section id="parte2">
						<br>
						<br>
						<h3>REGISTRARSE</h3> <br>
						<input type="file" name="p_conducir" accept="application/pdf" placeholder="Selecciona una imagen"> <br> 
						<!-- application/pdf -->
						<br>
						<p style="width: 80vw;">
							Es necesario que nos proporciones tu permiso de conducir, ya que esta aplicación es dirigida hacia personas con auto o que conducen uno.
							El documento debe proporcionarse como archivo .pdf, y no debe superar los 500Kb.
						</p>
						<a href="#parte1" title="Atras" style="text-decoration: none;">
						<input type="button" id="a2" value="Atras">
						</a>
						<a href="#parte3" title="Continuar" style="text-decoration: none;">
						<input type="button" id="c2" value="Continuar">
						</a>

					</section>
					<a name="parte3"></a>
					<section id="parte3" >
						<br>
						<br>
						<h3>REGISTRARSE</h3> <br>
						<h1 style="text-decoration:underline;">Aviso legal</h1> <br>
						<p style="width: 80vw;">
							Al finalizar el registro usted acepta que FullCar utilice sus datos personales, con fines del mejoramiento de la experiencia con la aplicación.
						</p>
						<a href="#parte2" title="Atras" style="text-decoration: none;">
						<input type="button" id="a3" value="Atras">
						</a>
						<button type="submit">Finalizar</button>
						<!-- <input type="button" name="send" value="Finalizar" onclick="form_reg1.submit()">  -->
						<!-- El botón debe ser un tag input para evitar el auto-envió con el enter -->
					</section>
		</form>
	<!-- <script src="./js/registrarse_ajax.js" type="text/javascript"></script> -->
</body>
</html>