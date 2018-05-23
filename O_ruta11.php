<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="imagenes/icon.ico" type="image/x-icon" />
    <title>Ofrecer Ruta</title>
  </head>
  <body>

    <center>
      <form action="O_ruta2.php" method="post" accept-charset="utf-8">
      
        <br>
        <br>
        <h3>Ofrecer Ruta</h3> <br>
        <br>
        Fecha de partida: <input type="date" id="Date" name="Date" onchange=""><br><br><br>
        Hora de partida: <input type="time" id="HPartida" step="hh:mm" name="HPartida" > <br><br><br>
        Hora estimada de llegada: <input type="time" name="HLlegada" id="HLlegada" value="12:00"> <br><br><br>
        Cantidad de cupos disponibles: <input type="number" name="cupos"><br><br><br>

        <button class="continuar" type="submit">Continuar</button>
      </form>
    </center>
    <script>
      var f=new Date(); 
      document.getElementById("HPartida").value=f.getHours()+":"+f.getMinutes();
      var x=f.getMonth()+1;
      if (x<10) {
        x="0"+x;
      }
      var y=f.getDate();
      if (y<10) {
        y="0"+y;
      }
      document.getElementById("Date").value = f.getUTCFullYear()+"-"+x+"-"+y;
      //document.getElementById("HPartida").value=f.getHours()+":"+f.getMinutes();
    </script>
   
    
  </body>
</html>
