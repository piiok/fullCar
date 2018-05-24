<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="imagenes/icon.ico" type="image/x-icon" />
    <title>Ofrecer Ruta</title>
  </head>
  <body>
    <script>
      var cant = 0; //Contador de escalas
    </script>
    <center>
      <form action="O_ruta_db.php" method="post" accept-charset="utf-8">
      
        <br>
        <br>
        <h3>Ofrecer Ruta</h3> <br>
        <br>
        Fecha de partida: <input type="date" id="Date" name="Date" onchange=""><br><br><br>
        Hora de partida: <input type="time" id="HPartida" step="hh:mm" name="HPartida" > <br><br><br>
        Hora estimada de llegada: <input type="time" name="HLlegada" id="HLlegada" value="12:00"> <br><br><br>
        Cantidad de cupos disponibles: <input type="number" name="cupos"><br><br><br>
        Origen: 
        <select name="TipoOrigen">
          <option value="lugar"  >Lugar</option>
          <option value="cra" selected="true">Cra</option>
          <option value="cll">Calle</option>
          <option value="Barrio">Barrio</option>
        </select> 
        <input type="text" name="Origen">
        <br>
        <hr style="width: 60vw;"> 
        Destino: 
        <select name="TipoDestino">
          <option value="lugar"  >Lugar</option>
          <option value="cra" selected="true">Cra</option>
          <option value="cll">Calle</option>
          <option value="Barrio">Barrio</option>
        </select> 
        <input type="text" name="Destino">
        <br>
        <hr style="width: 60vw;">
        Escalas <br>
        <div id="escalas"> 
          <div id="1" name="holi">
            
          </div>
          <!-- acá se irán agregando las escalas gracias al botón agregar parada -->
        </div>
        <br>
        <input type="button" onclick="agregarEscala()" value="Agregar Parada"><br><br>

        <button class="continuar" type="submit">Continuar</button>
      </form>
    </center>
    <script>

      var f=new Date(); //Este objeto contiene la hora y fecha del momento en que se crea

      //Arreglamos la hora y los minutos para que el type time lo reciba bn, y luego se lo pasamos. Esto le asigna al input la hora actual
      var h = f.getHours()<10?"0"+f.getHours():f.getHours(); //if comprimido si cumple esto "?" entonces pasa esto si no ":" pasa lo otro
      var m = f.getMinutes()<10?"0"+f.getMinutes():f.getMinutes();
      document.getElementById("HPartida").value=h+":"+m;

      //Arreglamos el mes y el día para que el type date lo reciba bn, y luego se lo pasamos. Esto le asigna al input la fecha actual
      var x=(f.getMonth()+1)<10?"0"+(f.getMonth()+1):f.getMonth()+1;
      var y=f.getDate()<10?"0"+f.getDate():f.getDate();
      document.getElementById("Date").value = f.getUTCFullYear()+"-"+x+"-"+y;

      //funciones

      function agregarEscala(){
        divE=document.getElementById("escalas"); //div en donde van las escalas
        divE.innerHTML+="<br>"; //se agrega un enter para que las lineas no queden tan pegadas

        //Agregando un nuevo select

        var inp = document.createElement('select'); //Se crea un select
        inp.name="tipoEscala["+cant+"]"; //Se le asigna nombre
        inp.id="tipoEscala["+cant+"]"; //Se le asigna id
        divE.appendChild(inp); //Se agrega al div 


        //Agregando los option al select

        document.getElementById(inp.id).innerHTML+=
          "<option value='lugar'>Lugar</option>\n<option value='cra' selected='true'>Cra</option>\n<option value='cll'>Calle</option>\n<option value='Barrio'>Barrio</option>";
        divE.innerHTML+=" \n";

        //Agregando el input type text, muy similar al anterior
        var inp2 = document.createElement('input');
        inp2.type="text";
        inp2.name="Escala["+cant+"]";
        inp2.id="Escala["+cant+"]";
        divE.appendChild(inp2);

        divE.innerHTML+="<br>"; //Para que no quede tan pegado jiji
        cant+=1;//Aumentamos la cantidad de escalas existentes
      }
    </script>
   
    
  </body>
</html>
