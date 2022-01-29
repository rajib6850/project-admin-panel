<?php 
	
	if(file_exists('config.php')){
		require 'config.php';
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



	<?php 



		if(isset($_POST['login'])){

			$error = [] ;



			if(!empty($_POST['login_info'])){
				$useroremail = $_POST['login_info'];
			}else{
				$error['useroremail'] = "Username or e-mail must not be Empty..!";
			}

			if(!empty($_POST['pass'])){
				$pwd = $_POST['pass'];
			}else{
				$error['pass'] = "Password must not be Empty..!";	
			}


			if(isset($pwd) && isset($useroremail) ){

				$sql = "SELECT username, email, password FROM user WHERE username = '$useroremail' AND password = '$pwd' OR email = '$useroremail' AND password = '$pwd'";	

				$result = $conn->query($sql);
				$result = mysqli_num_rows($result);

				if($result == 0){
					$error['loginfil'] = "User or email and password is wrong..!";
				}else{

					$_SESSION['success'] = "login successfully";

					header('location: admin.php');
				}
			}
		}


	?>
	

	<div class="login-form border">
			
			<h4 class="text-center text-uppercase fw-bolder">Login Form</h4>
			<?php 	if(isset($error['loginfil'])){echo "<div class='alert alert-danger' role='alert'> " . $error['loginfil']. "</div>";}?>

		<form action="#" method="POST">
			<div class="group mb-3">
				<label class="form-label" for="useroremail">Username Or E-mail: </label>
				<input type="text" name="login_info" id="useroremail" class="form-control">

				<?php if(isset($error['useroremail'])){echo "<span class='form-text text-danger'>" . $error['useroremail'] . "</span>";} ?>
			</div>
			<div class="group mb-3">
				<label class="form-label" for="password">Password</label>
				<input type="password" name="pass" id="password" class="form-control">
				<?php if(isset($error['pass'])){echo "<span class='form-text text-danger'>" . $error['pass']. "</span>";} ?>
			</div>
			<div class="group">
				<input type="submit" value="Login" name="login" class="btn btn-success">
			</div>
			<span>Don't have any account?. Please <a href='index.php'> register now</a></span>
		</form>

	</div>


	
</body>
</html>