<!DOCTYPE html>
<html>
  <head>
    <title>Buscar ruta</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./imagenes/icon.ico" type="image/x-icon" />
  
  <!-- librería de ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <style>
    .res{
      border-color: black;
      border-style: solid;
      border-width: 1px;
      margin:10px;
      padding: 5px;
    }
  </style>

  </head>
  <body>
    <center>
      <div id="buscador"> 
        <form action="" id="buscar1" method="POST" accept-charset="utf-8">
          <select name="tipo">
            <option value="lugar">Lugar</option>
            <option value="cra" selected="true">Cra</option>
            <option value="cll">Calle</option>
            <option value="barrio">Barrio</option>
            <option value="todos" selected="true">Todos</option>
          </select>
          <input type="text" name="buscar" style="width: 40vw" required="true">
          <input type="submit"  name="submit" value="Buscar">
        </form>
      </div>

      <!-- Div de resultados -->
      <div id="result">
          <br>
          <br>
          No hay resultados aún
      </div>
    </center>
  </body>
  <script src="./js/buscar.js" type="text/javascript"></script>
</html>
