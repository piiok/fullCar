<?php 
error_reporting(0);
session_start();
if ($_SESSION[sesion]=="si") {
  header("Location: ./index.php");
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fullcar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="imagenes/icon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="./css/index2.css">
  <link rel="shortcut icon" href="imagenes/icon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
    <center><div class="col-xl-12 text-left" class="col-lg-6 text-left" class="col-md-6 text-left" class="col-sm-6 text-left" style="padding-top: 15px; min-height: 100vh; display: grid;"> 
    <form class="formulario" action="envia.php" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend><center><h5>Bienvenido a</h5></center></legend>
    <center><h1>Fullcar</h1></center>
    <center><img src="./imagenes/logofull1.png" style="width: 50%"></center>
    <br>
    <center><h5>Inicia sesion</h5></center>
    <div class="form-group row">
      
    </div>
    <div class="celular form-group">

      <label for="exampleInputEmail1" >Numero de Celular</label>
      <input type="num" name="cel" class="form-control" id="exampleInputEmail1" required="tru" aria-describedby="emailHelp" placeholder="Por favor ingresa tu numero">
     
    </div>

    <div class="celular form-group ">
      <label for="exampleInputPassword1">Contraseña</label>
      <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required="tru" placeholder="Por favor ingresa tu contraseña">
    </div>
    
    <fieldset class="celular form-group">
      <div class="form-check ">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="recuerdame" value="" checked="">
          Recordar mi contraseña de inicio
        </label>
      </div>
      <div style="color:red;">
    <?php 
      error_reporting(0);
      extract($_GET);
      if ($error=="NoCel") {
        echo "Celular no registrado.";
      }elseif ($error=="NoPass") {
        echo "Contraseña incorrecta.";
      }
     ?> 
    </div>
    </fieldset>
    <center><button type="submit" class="btn btn-warning btn-lg btn-large" style="margin-bottom: 15px;border: solid 0.5px black;">Iniciar Sesion</button></center>
    <center><a href="./registrarse_1.php"><button type="button" class="btn btn-primary btn-sm btn-small" style="margin-bottom: 20px; border: solid 0.5px white ;">Registrarse</button></a></center>
  </fieldset>
</form>
</div>
</center>
</body>
</html>
