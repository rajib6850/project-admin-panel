	<?php 

		if(!isset($_GET['pg_url'])){
			header('location: allpage.php');
		}
		

		require './template/header.php';


			$pg_url = $_GET['pg_url'] ;

			$pg_url_old = "?pg_url="."$pg_url";
			

		if(isset($_POST['update_page'])){

			$pg_title = $_POST['pg_title'];
			$pg_content = htmlspecialchars($_POST['pg_content']);

			if(empty($pg_title)){
				$pg_title_error = "Title filde must not be empty..!";
			}else{
				$sql = "UPDATE pages SET pg_title = '$pg_title', pg_content = '$pg_content' WHERE pg_url = '$pg_url_old'";

				$pg_sql_result = $conn->query($sql);

				if($pg_sql_result){
					$pg_add_success = "Page Update is successfull ..!";
				}
			}
		}

		$sql = "SELECT * FROM pages WHERE pg_url = '$pg_url_old' ";
		$pageDetails = $conn->query($sql);
		$pg_details = $pageDetails->fetch_object();
		$pg_id = $pg_details->page_id;


	 ?>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Welcome to add new page</h1>
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

							<form action="" method="POST">
								<div class="form-group">
									<label for="pg_title">Add Page Title</label>
									<input id="pg_title" value="<?php echo $pg_details->pg_title; ?>" name="pg_title" class="form-control" placeholder="Add Page Title">
								</div>

								<div class="form-group">
									<label for="pg_content">Add Page Content</label>
									<textarea id="pg_content" name="pg_content" class="form-control" placeholder="Add Page Content" rows="15"><?php echo $pg_details->pg_content; ?></textarea>
								</div>

								<input type="submit" name="update_page" value="Update Page" class="btn btn-primary" >	
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		</div><!-- /.row -->


<?php require './template/footer.php'; ?>

