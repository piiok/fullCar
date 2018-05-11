<html>
<head>
	<title>Registro</title>
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
	<script src="./librerias/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
	<center><div class="col-xl-12 text-left" class="col-lg-6 text-left" class="col-md-6 text-left" class="col-sm-6 text-left" style="padding-top: 15px; min-height: 100vh; display: grid;"> 
		<form id="form_reg1" name="form_reg1" action="./registrarse_2.php" method="POST" class="formulario" accept-charset="utf-8" enctype="multipart/form-data" >
			<!-- El enctype="multipart/form-data" es necesario para enviar los FILES -->
  	<fieldset>
    	<legend><center><h1>Registro</h1></center></legend>
	    <center>
			<hr>
			<div id="visualizar">
		     	<img id="image" src="./imagenes/perfil.png" style="width:70%;">
			</div>
			<div class="celular form-group">
			<div class="input-group mb-3">
		  	    <div class="custom-file">
				<input class="custom-file-input" type="file" id="file" name="foto" accept="image/*" placeholder="Selecciona una imagen">
				<label style="text-align: left;" class="custom-file-label" for="inputGroupFile02">Su foto aquí... </label>
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
		</center>
    	<hr>
	    <div class="celular form-group">
			<label for="exampleInputEmail1" >Nombre</label>
			<input type="text" name="nombre" placeholder="Ingrese su nombre" required="true" class="form-control" id="exampleInputEmail1">
    	</div>
		<div class="celular form-group">
			<label for="exampleInputEmail1" >Celular</label>
			<input type="number" id="cel" name="cel" placeholder="Ingrese su número de celular" required="true" class="form-control"> 
	    </div>
	    <div class="celular form-group">
	    	<label for="exampleInputEmail1" >Correo</label>
	    	<input type="email" id="correo" name="correo" placeholder="Ingrese su número de celular" required="true"  class="form-control">
    	</div>
    	<div class="celular form-group">
			<label for="exampleInputPassword1">Contraseña</label>
			<input type="password" id="pass" name="pass" placeholder="Contraseña" required="true" class="form-control" class="form-control"> 
		</div>
		
		<fieldset class="celular form-group">
	      <div class="form-check ">
	        <label class="form-check-label">
	          <input class="form-check-input" type="checkbox" name="spam" value="" checked="">
	          <p class="checkkk"><strong>Enviar informacion a mi correo</strong></p> 
	        </label>
	      </div>
	    </fieldset>	
	      <center><button type="submit" class="btn btn-warning btn-lg btn-large" style="margin-bottom: 15px;border: solid 0.5px black;">Continuar</button></center>
	    </fieldset>
		</form>
	<!-- <script src="./js/registrarse_ajax.js" type="text/javascript"></script> -->
</body>
</html>