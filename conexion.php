<?php
$server = "localhost";
$user = "hci";
$pass = "admin";
$db = "full_car";

$conn = mysqli_connect($server, $user, $pass, $db); 
// SI DESCOMENTAS LO DE ARRIBA DAÑAS EL LOGEOO DE SESION !!!!



//$conn = mysqli_connect("localhost", "20172D103", "1VNnMSsHHQ", "20172D103");

// Check connection
if (!$conn) {
    die("Fallo la conexion " . mysqli_connect_error());
}else{
	//echo "Conexion satisfactoria";
}
?> 