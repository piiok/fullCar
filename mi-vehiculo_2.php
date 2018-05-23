<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mi vehiculo2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="imagenes/icon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="css/mivehiculo.css">
  <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
		include("./conexion.php");
		session_start();
		extract($_POST);
		extract($_FILES);
		$cons1 ="SELECT `AUTO_INCREMENT` FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'full_car' AND   TABLE_NAME   = 'vehiculo';";
		#$cons1 ="SELECT id_vehiculo FROM full_car.vehiculo order by id_vehiculo desc limit 1";
		$rest = mysqli_query ($conn ,$cons1);
		
		$row=$rest->fetch_array();

		$foto_v = "./docs/foto_vehiculo/".$row[0].".".end(explode(".", $foto["name"]));

		if ($foto['tmp_name']=="") {
			$foto_v  = "";
			echo "]Entro al if";
		}

		$cons="INSERT INTO full_car.vehiculo(placa, modelo, color, tipo, foto,cel_v) VALUES ('".$placa."','".$modelo."', '".$color."', '".$tipo."','".$foto_v."','".$_SESSION[cel]."')";

		$res = mysqli_query ($conn ,$cons);
		if(empty($res)){
 			echo 'Error al registrarse'.mysqli_error($conn);
		}else{
			if ($foto['tmp_name']!="") {
				if (move_uploaded_file($foto['tmp_name'], $foto_v)) {
					echo "la foto es valida y se subió con éxito";
				}else{
					echo "¡Posible error en la subida de la foto!";
				}
			}
		}
		$conn->close();

 	?>
	<script src="./librerias/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
	
<!-- ############ -->

<center><div class="col-xl-12 text-left" class="col-lg-6 text-left" class="col-md-6 text-left" class="col-sm-6 text-left" style="padding-top: 15px; min-height: 100vh; display: grid;"> 
	<form class="formulario" id="form_v1" name="form_v1" action="mi-vehiculo_db.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data" >
			<!-- El enctype="multipart/form-data" es necesario para enviar los FILES -->
<fieldset>
					
	<center><h1>Mi vehículo</h1></center>

	

<div class="celular form-group">

						
			<div id="visualizar">
		     	<center><img id="image" src="imagenes/logofull1.png" style="width:70%;"></center>
			</div>
			
<br>
    <div class="celular form-group">
    <center><h5>!Son indispensable estos documentos!</h5></center>
    <br>
      <div class="form-group">
        <h6>Sube una foto de la tarjeta de propiedad del vehiculo:</h6>
    <center><img src="imagenes/propiedad.png" style="width: 70%"></center>
     <div class="container" style="margin-top: 20px;">
    <div class="row">
      
        <div class="col-lg-12 col-sm-12 col-md-12 col-xl-12">
            <center><label class="btn btn-block btn-dark" style="border: solid white 0.5px;">
                Subir  T . Propiedad&hellip; <input type="file" name="t_propiedad" accept="application/pdf" style="display: none;">
            </label></center>
        </div>
        
    </div>
</div>
  </div>


						

<div class="form-group">
    <h6>Sube una foto del SOAT del vehiculo por ambas caras:</h6>
    <center><img src="imagenes/soat.png" style="width: 70%"></center>
     <div class="container" style="margin-top: 20px;">
    <div class="row">
      
        <div class="col-lg-12 col-sm-12 col-md-12 col-xl-12">
            <center><label class="btn btn-block btn-dark" style="border: solid white 0.5px;">
                Subir SOAT&hellip; <input type="file" name="t_mecanico" accept="application/pdf" style="display: none;">
            </label></center>
        </div>
        
    </div>
</div>
    </div>

						
						<!-- application/pdf -->

						


 <div class="cajatexto" style="background-color: rgb(0, 0, 0, 0.6);border-radius: 5px; margin-right: -20px;margin-left: -20px;">
 <div class="celular texto" style=" padding-right: 20px; padding-left: 20px; padding-bottom: 5px; padding-top: 12px;">
 <h4 style="color: white; text-align: center;">Infomacion</h4>
 <div class="linea" style="border: solid white 0.5px; margin-right: -20px; margin-left: -20px; margin-bottom: 10px;"></div>
      <p>Los documentos solicitados, aumentan tu nivel de confiabilidad, ademas estos archivos son personales y NO seran compartidos de ninguna manera.</p>
    </div>
    </div>

						
						<!-- <a href="#parte1" style="text-decoration: none;" title="Atras">
						<input type="button" id="a2" value="Atras">
						</a> -->
						<!-- ###################### -->
<br>
    <center><button type="submit" class="btn btn-warning btn-lg btn-large" name="send" value="Finalizar" style="margin-bottom: 15px;border: solid 0.5px black;">Finalizar</button></center>
						<!-- ################### -->
						<!-- <input type="submit" name="send" value="Finalizar">
</div> -->
</div>
</fieldset>			
</form>
</div>
</center>
</body>
</html>