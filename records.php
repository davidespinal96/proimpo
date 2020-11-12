<?php
	include('conectar.php');

	$sql = "SELECT name,last_name,phone,message,date_r FROM contacts";
	$query = $mysqli->query($sql);

	$cont = 1;
	$rowTable = "";

	while($row = $query->fetch_assoc()){
		$rowTable[] = array(
			"cont" => $cont,
			"name" => $row['name'],
			"last_name" => $row['last_name'],
			"phone" => $row['phone'],
			"message" => $row['message'],
			"date_r" => $row['date_r']		
		);

		$cont++;
	}

	echo json_encode($rowTable);
?>