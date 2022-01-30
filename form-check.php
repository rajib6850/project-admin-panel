<?php 
	
	require 'config.php';



	if(isset($_POST['submit'])){




		$error = array();


		if(empty($_POST['userid'])){
			$error['userid'] = "Userid must not be Empty..!";
		}else {
			$userid = $_POST['userid'];
			$userid = strtolower($userid);
			$userid = htmlspecialchars($userid);
		}

		if(empty($_POST['fname'])){
			$error['fname'] = "First Name must not be Empty..!";
		}else {
			$fname = $_POST['fname'];
			$fname = htmlspecialchars($fname);
		}
		if(empty($_POST['lname'])){
			$error['lname'] = "Last Name must not be Empty..!";
		}else {
			$lname = $_POST['lname'];
			$lname = htmlspecialchars($lname);
		}

		if(empty($_POST['email'])){
			$error['email'] = "E-mail must not be Empty..!";
		}else {

			$emailcheck = $_POST['email'];

			if(!filter_var($emailcheck, FILTER_VALIDATE_EMAIL)){
				$error['email'] = "Your E-mail is not valid";
			}else{

				$email = htmlspecialchars($emailcheck);
			}


		}

		if(empty($_POST['password'])){
			$error['pass'] = "Password must not be Empty..!";
		}elseif(strlen($_POST['password'] ) < 6){
			$error['pass'] = "Password must be 6 charecters long..!";
		}else {
			$pass = $_POST['password'];
			$pass = htmlspecialchars($pass);
		}



		if(count($error) == 0){

			$sql = "SELECT * FROM user WHERE email = '$email'";

			$result = $conn->query($sql);
			$match =  mysqli_num_rows($result);

			$sql = "SELECT * FROM user WHERE username = '$userid'";

			$resultid = $conn->query($sql);
			$resultid = mysqli_num_rows($resultid);


			if($match >= 1 ){

				$error['unsuccess'] = "Your E-mail Address Already exist";

			}elseif($resultid >= 1){
				$error['unsuccess'] = "Your Username is already exist";
			}else{
				$sql = "INSERT INTO user VALUES (NULL, '$fname', '$lname', '$email', '$pass', '$userid')";

				$querySuccess = $conn->query($sql);

				if($querySuccess){
					$error['success'] = "You have been registered..! <a href='login.php' class='alert-link'>Login</a>";
				}else{
					$error['unsuccess'] = "Your registration process can't successfully..!";
				}
			}
		}
	}