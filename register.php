<?php 

	if(file_exists('form-check.php')){
		require 'form-check.php';
	}


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register Form</title>

	<!-- Bootstrat CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!--  Custom CSS File -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	



	<div class="form">
		<h2 class="text-center text-uppercase fw-bolder border-bottom">Registration Form</h2>
		<form action="#" method="POST">

			


			<?php 


				if(isset($error['success'])){
					echo '
						<div class="alert alert-success" role="alert">
						  '. $error['success'] .' 
						</div>
					';
				}

				if(isset($error['unsuccess'])){
					echo '
						<div class="alert alert-danger" role="alert">
						  '. $error['unsuccess'] .' 
						</div>
					';
				}

			 ?>
						
			<div class="group mb-2">
				<label for="userid">Username: </label>
				<input type="text" name="userid" id="userid" class="form-control">
				<?php if(isset($error['userid'])){ echo '<span class="form-text text-danger">' . $error["userid"] . '</span>'; } ?>

				
			</div>	
			<div class="group mb-2">
				<label for="fname">First Name</label>
				<input type="text" name="fname" id="fname" class="form-control">
				<?php if(isset($error['fname'])){ echo '<span class="form-text text-danger">' . $error["fname"] . '</span>'; } ?>
			</div>
	
			<div class="group mb-2">
				<label for="lname">Last Name</label>
				<input type="text" name="lname" id="lname" class="form-control">
				<?php if(isset($error['lname'])){ echo '<span class="form-text text-danger">' . $error["lname"] . '</span>'; } ?>
			</div>	
			<div class="group mb-2">
				<label for="email">E-mail</label>
				<input type="email" name="email" id="email" class="form-control">
				<?php if(isset($error['email'])){ echo '<span class="form-text text-danger">' . $error["email"] . '</span>'; } ?>
			</div>

			<div class="group mb-2">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
				<?php if(isset($error['pass'])){ echo '<span class="form-text text-danger">' . $error["pass"] . '</span>'; } ?>
			</div>

			<div class="group">
				<input type="submit" value="Registration" name="submit" class="btn btn-info fw-bolder">
			</div>
			<span>You have an account please <a href="login.php"> login</a></span>
		</form>

	</div>


</body>
</html>