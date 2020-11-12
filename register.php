<?php
	include('conectar.php');	

	$user     = $_POST['user'];
	$password = md5($_POST['password']);

	$sql = "SELECT id FROM users WHERE user = '$user'";
	$query = $mysqli->query($sql);
	$row = $query->fetch_assoc();
  $user_bd = $row['id'];

  if($user_bd > 0){
  	$message = "<div class='alert alert-primary' role='alert'>
								  El usuario, ya existe.
								</div>";

		$script =  "<script>
									setTimeout(function(){ window.history.back(); }, 3000);
								</script>";

  }
  else{
		$sql = "INSERT INTO users (user,password,active) VALUES ('$user','$password',1)";
	  $query = $mysqli->query($sql);

	  if($query){
	  	$message = "<div class='alert alert-primary' role='alert'>
									  Usuario Creado Con Exito.
									</div>
									<div class='alert alert-primary' role='alert'>
										En 5 segundos sera direccionado nuevamente a la pagina principal.
									</div>";

			$script =  "<script>
										setTimeout(function(){ location.href = 'index.html'; }, 5000);
									</script>";
	  }
	  else{
	  	$message = "<div class='alert alert-primary' role='alert'>
									  Error al crear usuario.
									</div>";

			$script =  "<script>
										setTimeout(function(){ location.href = 'register.html'; }, 3000);
									</script>";	
	  }
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