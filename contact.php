<?php
	session_start();
	if(!isset($_SESSION['email'])){
    header("Location: index.html"); 
  }
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Contact</h1>
			<div class="center">
				<form class="form-horizontal form" method="post" action="register_contact.php">
			   	<div class="form-group row">
				    <label class="col-sm-4 col-form-label">Name</label>
				    <div class="col-sm-8">
				      <input name="name" type="text" class="form-control" id="inputName" required>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-4 col-form-label">Last Name</label>
				    <div class="col-sm-8">
				      <input name="lastName" type="text" class="form-control" id="inputLastName" required>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-4 col-form-label">Address</label>
				    <div class="col-sm-8">
				      <input name="address" type="text" class="form-control" id="inputAddress" required>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-4 col-form-label">Phone</label>
				    <div class="col-sm-8">
				      <input name="phone" type="number" class="form-control" id="inputPhone" required>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-4 col-form-label">City</label>
				    <div class="col-sm-8">
				      <input name="city" type="text" class="form-control" id="inputCity" required>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-4 col-form-label">Message</label>
				    <div class="col-sm-8">
				    	<textarea name="message" class="form-control" id="inputMessage" rows="3"></textarea>
				    </div>
				  </div>
				  <button id="registerButton" type="submit" class="btn btn-primary">Sent</button>
				  <a href="menu.php"><button type="button" class="btn btn-primary">Back</button></a>
				</form>
			</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>