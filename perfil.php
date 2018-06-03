<!DOCTYPE html>
<html>
<head>
	<title>FullCar</title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./imagenes/icon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="./css/registrarse.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<center><div class="col-xl-12 text-left" class="col-lg-6 text-left" class="col-md-6 text-left" class="col-sm-6 text-left" style="padding-top: 15px; min-height: 100vh; display: grid;"> 
    <center><form class="formulario" method="post" accept-charset="utf-8">
  <fieldset>
	<h4>Bienvenid@
	<?php 
	error_reporting(0);
	session_start();
	echo $_SESSION[nombre];
	 ?></h4>
	 <form>
	 	<h2>Tus datos</h1>
	 		<br>
<div class="container-fluid">
  <div class="row">
    <div class="col-9">
    	<div class="form-group">
    <input class="form-control form-control-lg" type="text" placeholder="Hector Gonzalez Ariza">
  </div>
  <div class="form-group">
    <input class="form-control form-control-lg" type="text" placeholder="3164464337">
  </div>
   <div class="form-group">
    <input class="form-control form-control-lg" type="text" placeholder="tayzon1392@hotmail.com">
  </div>
</form>
    </div>
    <div class="col-3"><center>
		<br>
		<br>
    	<img src="imagenes/perfil1.png" style="width: 120%"></center></div>
  </div>
</div>
<br>
<form>
	 	<h2>Datos de tu vehiculo</h1>
	 		<br>

  <div class="form-group row">
  	<div class="col-6">
    <input class="form-control form-control-lg" type="text" placeholder="Ford Fiesta">
  </div>
  <div class="col-6">
    <input class="form-control form-control-lg" type="text" placeholder="Fiesta">
  </div>
</div>
   <div class="form-group row">
    <div class="col-6">
    <input class="form-control form-control-lg" type="text" placeholder="2018">
  </div>
  <div class="col-6">
    <input class="form-control form-control-lg" type="text" placeholder="XLM456">
  </div>
  </div>
</form>
<br>
<br>
	 <center><a href="./salir.php"><button type="button" class="btn btn-warning btn-lg btn-large" style="margin-bottom: 20px; border: solid 0.5px black ;">Cerrar Sesión</button></a></center>
	 			</fieldset>
      		</form></center>
    	</div>
    </center>
</body>
</html>