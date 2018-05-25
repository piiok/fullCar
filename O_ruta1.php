<!DOCTYPE html>
<html>
  <head>
    <title>Ofrecer ruta</title>
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
    <script>
      var cant = 0; //Contador de escalas
    </script>

      

    <center><div class="col-xl-12 text-left" class="col-lg-6 text-left" class="col-md-6 text-left" class="col-sm-6 text-left" style="padding-top: 15px; min-height: 100vh; display: grid;"> 
    <center><form class="formulario" action="O_ruta_db.php" method="post" accept-charset="utf-8">
  <fieldset>
    

    
      
        <br>
        <br>
        <h1>Ofrecer Ruta</h1> <br>
        <label for="exampleInputEmail1">Fecha de partida:</label>
        <input class="form-control col-6" type="date" id="Date" name="Date" onchange=""><br>
        <label for="exampleInputEmail1">Hora de partida:</label>
        <input class="form-control col-5" type="time" id="HPartida" step="hh:mm" name="HPartida" > <br>
        <label for="exampleInputEmail1">Hora de estimada de llegada:</label>
        <input class="form-control col-5" type="time" name="HLlegada" id="HLlegada" value="12:00"> <br>
        <!-- ############### -->
        
       <label for="exampleInputEmail1"> Cantidad de cupos disponibles:</label>
        <br>
        <div class="col-3">
        <input class="form-control" type="number" name="cupos" placeholder="0">
        </div>
        <!-- ############# -->
        <!-- Cantidad de cupos disponibles: <input type="number" name="cupos"><br><br> -->
        <br>
        <label for="exampleInputEmail1">Origen:</label> 
        <select name="TipoOrigen">
          <option value="lugar">Lugar</option>
          <option value="cra" selected="true">Cra</option>
          <option value="cll">Calle</option>
          <option value="Barrio">Barrio</option>
        </select> 
        <input class="form-control col-5" type="text" name="Origen" placeholder="Ejemplo 25 # 14-61">

        <hr style="width: 60vw;">

        <label for="exampleInputEmail1">Destino:</label> 
        <select name="TipoDestino">
          <option value="lugar"  >Lugar</option>
          <option value="cra" selected="true">Cra</option>
          <option value="cll">Calle</option>
          <option value="Barrio">Barrio</option>
        </select> 
        <input class="form-control col-5" type="text" name="Destino" placeholder="Ejemplo 33 # 36-43">

        <hr style="width: 60vw;">
        <label for="exampleInputEmail1" style="color: white;">Escalas:</label> 
        <div id="escalas"> 
          <div id="1" name="holi">
            
          </div>
          <!-- acá se irán agregando las escalas gracias al botón agregar parada -->
        </div>
        <br>
        <!-- ################### -->

        <button type="button" class="btn btn-primary btn-sm" onclick="agregarEscala()"style="border: solid 0.5px black;">Agregar parada</button>

        <!-- ################## -->
        <!-- <input type="button" onclick="agregarEscala()" value="Agregar Parada"> -->
        <br><br>
        

        <button class="continuar btn btn-warning btn-lg btn-large" type="submit" style="margin-bottom: 15px;border: solid 0.5px black;">Continuar</button>
        <!-- <button class="continuar" type="submit" style="margin-bottom: 20px;">Continuar</button> -->
      </fieldset>
      </form></center>
    </div>
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
