<?php
  include('conectar.php');
  session_start();
   
  if(!isset($_SESSION['email'])){
    header("Location: index.html"); 
  }

  $name     = $_POST['name'];
  $lastName = $_POST['lastName'];
  $address  = $_POST['address'];
  $phone    = $_POST['phone'];
  $city     = $_POST['city'];
  $message  = $_POST['message'];
  $date_r   = date('Y-m-d');

  $sql = "INSERT INTO contacts (name,last_name,address,phone,city,message,date_r,active) VALUES ('$name','$lastName','$address','$phone','$city','$message','$date_r',1)";
	$query = $mysqli->query($sql);

	if($query){
	  	$message = "<div class='alert alert-primary' role='alert'>
									  Datos Enviados Con Exito.
									</div>
									<div class='alert alert-primary' role='alert'>
										En 5 segundos sera direccionado nuevamente a la menu principal.
									</div>";

			$script =  "<script>
										setTimeout(function(){ location.href = 'menu.php'; }, 5000);
									</script>";
	}
	else{
	  	$message = "<div class='alert alert-primary' role='alert'>
									  Error al enviar datos.
									</div>";

			$script =  "<script>
										setTimeout(function(){ window.history.back(); }, 3000);
									</script>";	
	}

  echo "<html>
				<head>
					<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>
					<link rel='stylesheet' href='style.css'>
				</head>
				<body class='container'>
  				$message
				</body>
			</html>$script";
?>