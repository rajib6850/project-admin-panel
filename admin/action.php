<?php 



require 'function.php';




if(isset($_POST['add_page'])){

	$pg_title = $_POST['pg_title'];
	$pg_content = $_POST['pg_content'];

	if(empty($pg_title)){
		$pg_title_error = "Title fild must not be empty..!";
	}else{
		$pg_url = str_replace(' ', '_', $pg_title).rand(20, 1000);
		$sql = "INSERT INTO pages VALUES (NULL, '$pg_title', '$pg_content', '$pg_url' )";

		$pg_sql_result = $conn->query($sql);

		if($pg_sql_result){
			$pg_add_success = "Page successfully added..!";
			header('location: addpage.php');
		}

	}

}











