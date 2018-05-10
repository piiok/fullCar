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
    <legend><center>Bienvenido a Fullcar</center></legend>
    <br>
    <center><img src="imagenes/15.png" style="width: 50%"></center>
    <br>
    <center><h5>Inicia sesion</h5></center>
    <div class="form-group row">
      
    </div>
    <div class="form-group">

      <label for="exampleInputEmail1">Numero de Celular</label>
      <input type="num" name="cel" class="form-control" id="exampleInputEmail1" required="tru" aria-describedby="emailHelp" placeholder="Ingrese su numero">
     
    </div>

    <div class="form-group ">
      <label for="exampleInputPassword1">Contraseña</label>
      <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required="tru" placeholder="Contraseña">
    </div>
    <center style="font-weight: bolder; text-shadow:2px 1px 32px #000000;color:yellow;">
        <?php 

      extract($_GET);
      if ($error=="NoCel") {
        echo "Celular no registrado.";
      }elseif ($error=="NoPass") {
        echo "Contraseña incorrecta.";
      }
     ?>
     </center>
    
    <fieldset class="form-group">
      <div class="form-check ">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="recuerdame" value="" checked="">
          Recordar mis datos de inicio de sesion
        </label>
      </div>
    </fieldset>
    <center><button type="submit" class="btn btn-warning btn-lg btn-block" style="margin-bottom: 15px;max-width: ">Iniciar Sesion</button></center>
    <center><a href="./registrarse_1.php"><button type="button" class="btn btn-primary btn-sm col-sm-12" style="margin-bottom: 20px; border: solid 0.5px white ;">Registrarse</button></a></center>
  </fieldset>
</form>
</div>
</center>
</body>
</html>
