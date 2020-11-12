<?php
  include('conectar.php');
  session_start();
   
  if(!isset($_SESSION['email'])){
    header("Location: index.html"); 
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Menu</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container">
			<h2 class="col-md-8">Welcome <strong><?php echo $_SESSION['email']; ?></strong></h2>
			<div class="row">
				<div class="col-md-2">
					<div class="btn-group-vertical">
					  <button onclick="location.href='contact.php';" class="btn btn-primary">Contact</button>
					  <button onclick="location.href='logout.php';" class="btn btn-primary">Logout</button>
					</div>
				</div>
				<div class="col-md-10">
					<h3>My Records</h3>
					<table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Name</th>
					      <th scope="col">Last Name</th>
					      <th scope="col">Phone</th>
					      <th scope="col">Message</th>
					      <th scope="col">Date Register</th>
					    </tr>
					  </thead>
					  <tbody id="content-rows">
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script type="text/javascript">		
		$(document).ready(function(){
			$.ajax({
        type: "POST",
        url: 'records.php',
        dataType: "json",
        data: $(this).serialize(),
        success: function(data){
        	tableContent = document.getElementById('content-rows');
        	rowContents = "";

        	if(data == null || data == ""){
        		tableContent.innerHTML = "<tr><td class='text-center' colspan='6'><h3>No Records</h3></td></tr>";
        		return;
        	}

        	data.forEach( function(value,index,array){
        		rowContents += "<tr><td>" + value.cont + "</td><td>" + value.name + "</td><td>" + value.last_name + "</td><td>" + value.phone + "</td><td>" + value.message + "</td><td>" + value.date_r + "</td></tr>";
        	});

        	tableContent.innerHTML = rowContents;
      	}
      });
		});
	</script>
</html>