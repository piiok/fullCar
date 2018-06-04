	<?php 
		#error_reporting(0);
		session_start();
		extract($_REQUEST);
		include("./conexion.php");
		if ($tipo=="todos") {
			$sql="SELECT * FROM full_car.ruta WHERE (origen like '%$buscar%') or ( destino like '%$buscar%')";
			$sql1="SELECT * FROM full_car.escalas WHERE (lugar like '%$buscar%')";
		}else{
			$sql="SELECT * FROM full_car.ruta WHERE (origen_tipo='$tipo' and origen like '%$buscar%') or (destino_tipo='$tipo' and destino like '%$buscar%')";
			$sql1="SELECT * FROM full_car.escalas WHERE (lugar_tipo='$tipo' and lugar like '%$buscar%')";
		}		
		
		$res = mysqli_query($conn,$sql);
		$res1 = mysqli_query($conn,$sql1);
		#$row=$res->fetch_array();
		#$row1=$res1->fetch_array();

		while($row=$res->fetch_array()){
			#print_r($row);
			#echo "<br>";
			?>
			<div class="res" id="<?php $row[0] ?>">
				Origen: <?php echo $row[5]." ".$row[4]?> <br>
				Destino: <?php echo $row[7]." ".$row[6]?> 
			</div>

			<?php
		}

		while ($row1=$res1->fetch_array()) {
			#print_r($row1);
			#echo "<br>";
			$sql2="SELECT * FROM full_car.ruta WHERE id_ruta='$row1[0]'";
			$res2 = mysqli_query($conn,$sql2);
			$row2 = $res2->fetch_array();
			#print_r($row2);
			?>
			<div class="res" id="<?php $row1[0] ?>">
				Origen: <?php echo $row2[5]." ".$row2[4]?> <br>
				Destino: <?php echo $row2[7]." ".$row2[6]?> <br>
				Escala: <?php echo $row1[2]." ".$row1[1]; ?>
			</div>

			<?php
		}
		#echo $res->num_rows;
		#echo $res1->num_rows;
		$conn->close();
	 ?>