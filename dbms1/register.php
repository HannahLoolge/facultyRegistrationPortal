<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	
	<?php
        include 'topnav.php';
    ?>

	<div class="container mt-5">

		<div class="row justify-content-center"> 

			<div class="col-md-8 mt-5" >
				<h2 class="text-center">Register</h2>
				<form action="php/register.php" method = "POST"> 
					<div class="form-group">
					    <label for="username">Username</label>
					    <input type="string" class="form-control" id="username" name="username" placeholder="Enter Username">
				  	</div>

				  	<div class="form-group">
					    <label for="publication">Publication</label>
					    <input type="text" class="form-control" id="publication" name="publication" placeholder="Enter Publications">
				  	</div>

				  	<div class="form-group">
					    <label for="grant">Grant</label>
					    <input type="text" class="form-control" id="grant" name="grant" placeholder="Enter Grants">
				  	</div>

				  	<div class="form-group">
					    <label for="award">Award</label>
					    <input type="text" class="form-control" id="award" name="award" placeholder="Enter Awards">
				  	</div>

				  	<div class="form-group">
					    <label for="password">Password</label>
					    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
				  	</div>

				  	<div class="form-group">
					    <label for="confirm">Confirm Password</label>
					    <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Confirm Password">
				  	</div>

				  	<input type="submit" name="REGISTER" class="btn btn-primary btn-block">
				</form>


			</div>
	
		</div>

	</div>	
		
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript">
		var password = document.getElementById("password")
		 , confirm_password = document.getElementById("confirm");

		function validatePassword(){
		  if(password.value != confirm_password.value) {
		    confirm_password.setCustomValidity("Passwords Don't Match");
		  } else {
		    confirm_password.setCustomValidity('');
		  }
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;

	</script>

</body>
</html>
