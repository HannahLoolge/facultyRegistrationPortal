<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	
	<div class="container">

		<div class="row justify-content-center"> 

			<div class="col-md-8 mt-5" >
				<h2 class="text-center">Edit User</h2>
				<form action="php/update.php" method = "POST"> 
					<!--<a href="userlist.php" class="btn btn-success btn-block">User List</a>-->

					<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
					
					<div class="form-group">
					    <label for="username">username</label>
					    <input type="string" class="form-control" id="username" name="Username" value="<?php echo $_GET["username"]; ?>">
				  	</div>

				  	<div class="form-group">
					    <label for="publication">Publication</label>
					    <input type="text" class="form-control" id="publication" name="Publication" value="<?php echo $_GET["publication"]; ?>">
				  	</div>

				  	<div class="form-group">
					    <label for="grant">Grant</label>
					    <input type="text" class="form-control" id="grant" name="Grant" value="<?php echo $_GET["grant"]; ?>">
				  	</div>

				  	<div class="form-group">
					    <label for="award">Award</label>
					    <input type="text" class="form-control" id="award" name="Award" value="<?php echo $_GET["award"]; ?>">
				  	</div>

				  	<div class="form-group">
					    <label for="password">password</label>
					    <input type="password" class="form-control" id="password" name="Password" value="<?php echo $_GET["password"]; ?>">
				  	</div>

				  	<input type="submit" value="UPDATE" class="btn btn-primary btn-block">
				</form>


			</div>
	
		</div>

	</div>	
		
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
