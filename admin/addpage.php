<?php 

		require './template/header.php';



		if(isset($_POST['add_page'])){

			$pg_title = $_POST['pg_title'];
			$pg_content = htmlspecialchars($_POST['pg_content']);

			if(empty($pg_title)){
				$pg_title_error = "Title fild must not be empty..!";
			}else{
				$pg_url = "?pg_url=" . str_replace(' ', '_', $pg_title).time().rand(20, 1000);
				$sql = "INSERT INTO pages VALUES (NULL, '$pg_title', '$pg_content', '$pg_url' )";

				$pg_sql_result = $conn->query($sql);

				if($pg_sql_result){
					$pg_add_success = "Page successfully added..!";
					
				}
			}
		}
	 ?>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Welcome Add Page</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
					
				<div class="panel panel-default">
					<div class="panel-heading">Add Page Form</div>
					<div class="panel-body">
						<div class="col-md-6">

							<?php if(isset($pg_title_error)){
								echo "<div class='alert alert-danger'> " . $pg_title_error . "</div>";}

								if(isset($pg_add_success)){
								echo "<div class='alert alert-success'> " . $pg_add_success . "</div>";}
							?>

							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
								<div class="form-group">
									<label for="pg_title">Add Page Title</label>
									<input id="pg_title" name="pg_title" class="form-control" placeholder="Add Page Title">
								</div>

								<div class="form-group">
									<label for="pg_content">Add Page Content</label>
									<textarea id="pg_content" name="pg_content" class="form-control" placeholder="Add Page Content" rows="15"></textarea>
								</div>

								<input type="submit" name="add_page" value="Add Page" class="btn btn-primary" >	
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		</div><!-- /.row -->


<?php	require './template/footer.php'; ?>