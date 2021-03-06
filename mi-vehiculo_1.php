<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mi vehiculo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="imagenes/icon1.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="css/mivehiculo.css">
  <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<script src="./librerias/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
	
	<center><div class="col-xl-12 text-left" class="col-lg-6 text-left" class="col-md-6 text-left" class="col-sm-6 text-left" style="padding-top: 15px; min-height: 100vh; display: grid;"> 
	<form class="formulario" id="form_v1" name="form_v1" action="mi-vehiculo_2.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data" >
			<!-- El enctype="multipart/form-data" es necesario para enviar los FILES -->
<fieldset>
					
	<center><h1>Mi vehículo</h1></center>
    <!-- <center><img src="imagenes/logofull1.png" style="width: 50%"></center> -->
    <div class="celular form-group">

						
			<div id="visualizar">
		     	<center><img id="image" src="imagenes/logofull1.png" style="width:70%;"></center>
			</div>
<div class="container" style="margin-top: 20px;">
    <div class="row">
      
        <div class="col-lg-12 col-sm-12 col-md-12 col-xl-12">
            <center><label class="btn btn-block btn-dark" style="border: solid white 0.5px;">
                Sube una foto de tu vehiculo&hellip; <input id="foto" type="file" style="display: none;" class="custom-file-input" name="foto" accept="image/*" placeholder="Selecciona una imagen">
            </label></center>
        </div>
        
    </div>
</div>

			<script>
              	document.getElementById("file").onchange = function(e) {
	  				let reader = new FileReader();
	  
	  				reader.onload = function(){
		    			let preview = document.getElementById('visualizar'),
		        		image = document.getElementById('image');

		    			image.src = reader.result;
					};
	 
	  				reader.readAsDataURL(e.target.files[0]);
				}	
     	 	</script>
<br>
<div class="linea" style="border: solid black 0.5px; margin-right: -10px; margin-left: -10px; margin-bottom: 15px;"></div>
     <div class=" celular form-group">
    <select class="custom-select" name="tipo">
      <option selected="">¿Que tipo de vehiculo tienes?</option>
      <option value="1">Auto</option>
      <option value="2">Camioneta</option>
      <option value="3">Moto</option>
    </select>
  </div>
     <div class="form-group row">
     	<div class="col-6">
	 <label for="exampleInputEmail1" >Marca:</label>
      <input type="num" name="marca" class="form-control" id="marca" required="tru" aria-describedby="emailHelp" placeholder="Ford">
     	</div>
     <div class="col-6">
	 <label for="exampleInputEmail1" >Modelo:</label>
      <input type="num" name="modelo" class="form-control" id="modelo" required="tru" aria-describedby="emailHelp" placeholder="Mustang">
     	</div>
    </div>
	<div class="form-group row">
		<div class="col-6">
      <label for="exampleInputEmail1" >Año:</label>
      <input type="num" name="año" class="form-control" id="año" required="tru" aria-describedby="emailHelp" placeholder="2005">
      	</div>
     <div class="col-6">
      <label for="exampleInputEmail1">Placa</label>
      <input type="num" name="placa" class="form-control" id="placa" required="tru" aria-describedby="emailHelp" placeholder="FUL007">
      	</div>
    </div>
	<div class="celular form-group">
      <label>Selecciona el color de tu vehiculo</label>
    <center><input type="color" id="color" name="color" value="#000000" onchange="cambiarcolor()" style="width: 100px; height:39px;"/></center>
    <hr>
    <img id="espacio" src="imagenes/carro3.png" style="width: 40%; border: solid black 1px;">
    <script>
      function cambiarcolor() {
  let color = document.getElementById("color").value;
  document.getElementById("espacio").style.backgroundColor = color;
}
    </script>     
    </div>
						
<br>
   <div class="cajatexto" style="background-color: rgb(0, 0, 0, 0.6);border-radius: 5px; margin-right: -10px; margin-left: -10px;">
  <div class="celular texto" style=" padding-right: 20px; padding-left: 20px; padding-bottom: 5px; padding-top: 12px;">
    <h4 style="color: white; text-align: center;">Infomacion</h4>
    <div class="linea" style="border: solid white 0.5px; margin-right: -20px; margin-left: -20px; margin-bottom: 10px;"></div>
      <p>Esta infomacion será compartida con quienes usted elija como pasajeros, con el fin de ubicar eficazmente el vehiculo</p>
    </div>
</div>
  <br>
					<center><button type="submit" class="btn btn-warning btn-lg btn-large" style="margin-bottom: 15px;border: solid 0.5px black;">Continuar</button></center>
  


					<!-- <div><a style="text-decoration: none;" href="#parte2" title="Continuar">
						<input type="button" id="c1" value="Continuar"></a>
					</section>
					<a name="parte2"></a>
					<section id="parte2">
						<br>
						<br>
						<h3>MI VEHÍCULO</h3> <br>
						Tarjeta de propiedad: <input type="file" name="t_propiedad" accept="application/pdf" > <br> -->
						<!-- application/pdf -->
						<!-- <br>
						Técnico mecánico: <input type="file" name="t_mecanico" accept="application/pdf" > <br>
						<br>
						<h4>Información: </h4>
						<p style="width: 80vw;">
							Los documentos que acá se le solicitan no son obligatorios. Pero si sube estos documentos su confiabilidad como conductor subirá. Estos documentos NO serán compartidos.
						</p>
						<a href="#parte1" style="text-decoration: none;" title="Atras">
						<input type="button" id="a2" value="Atras">
						</a>
						<input type="button" name="send" value="Finalizar" onclick="form_v1.submit()"> 
					</section>
				</div>
	 -->
	</fieldset>
	</form>
	</div>
	</center>
</body>
</html>