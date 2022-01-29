	<?php 

		require './action.php';
		require './template/header.php';



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
								echo "<div class='alert alert-danger'> " . $pg_title_error . "</dvi>";}

								if(isset($pg_add_success)){
								echo "<div class='alert alert-success'> " . $pg_add_success . "</dvi>";}
							?>

							<form action="action.php" method="POST">
								<div class="form-group">
									<label for="pg_title">Add Page Title</label>
									<input id="pg_title" name="pg_title" class="form-control" placeholder="Add Page Title">
								</div>

								<div class="form-group">
									<label for="pg_content">Add Page Content</label>
									<textarea id="pg_content" name="pg_content" class="form-control" placeholder="Add Page Content" rows="10"></textarea>
								</div>

								<input type="submit" name="add_page" value="Add Page" class="btn btn-primary" >	
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		</div><!-- /.row -->




<?php 

	
	require './template/footer.php';

 ?>





