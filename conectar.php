<?php
	//Conectar BD
	$mysqli = new mysqli("localhost", "root", "", "proimpo");
  if($mysqli->connect_errno){
    echo "Error en la conexion a la BD.";
  }
?>