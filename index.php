<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php 
		session_start();
		if (empty($_SESSION[sesion]) or $_SESSION[sesion]==false) {
			header("Location: ./inicio.php");
		}else{
			header("Location: home.php");
		}
	 ?>
</body>
</html>