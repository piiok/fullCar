<!DOCTYPE html>
<html>
  <head>
    <title>Buscar ruta</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./imagenes/icon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="./css/registrarse.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  
  <!-- librería de ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <style>
    .res{
      background-color: rgb(0, 0, 0, 0.6);
      border-radius: 5px;
      border-color: black;
      border-style: solid;
      border-width: 1px;
      margin:10px;
      padding: 5px;
    }
  </style>

  </head>
  <body>
    <center><div class="col-xl-12 text-left" class="col-lg-6 text-left" class="col-md-6 text-left" class="col-sm-6 text-left" style="padding-top: 15px; min-height: 100vh; display: grid;"> 
    <center><form class="formulario" id="buscar1" action="" method="post" accept-charset="utf-8">
  <fieldset>
    <br>
        <br>
        <h1>Buscar Ruta</h1> <br>
        <center><img src="imagenes/logofull1.png" style="width: 50%"></center>
    <br>
    <br>
    <!-- ############ -->
    <center>
      <div id="buscador" > 
        <form action="" id="buscar1" method="POST" accept-charset="utf-8">
          <div class="input-group">
          <select name="tipo" >
            <option value="lugar">Lugar</option>
            <option value="cra" selected="true">Cra</option>
            <option value="cll">Calle</option>
            <option value="barrio">Barrio</option>
            <option value="todos" selected="true">Todos</option>
          </select>
          <input type="text" class="form-control" name="buscar" style="width: 40vw" placeholder="¿A donde te diriges?" required="true">
        <input class="btn btn-secondary" type="submit"  name="submit" value="Buscar">
          </div> 
        </form>
      </div>
      <br>
      <br>
      <!-- Div de resultados -->
      <div id="result" class="celular">
          <br>
          <br>
          No hay resultados aún
      </div>
    </center>
    <br>
    <br>
    <a href="./home.php"><input class="continuar btn btn-warning btn-lg" style="margin-bottom: 15px;border: solid 0.5px black;" value="Regresar"></a>
    </fieldset>
      </form></center>
    </div>
    </center>
  </body>
  <script src="./js/buscar.js" type="text/javascript"></script>
</html>
