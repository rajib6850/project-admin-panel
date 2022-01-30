	<?php 
	ob_start()	;


		require './template/header.php';
		if(!isset($_SESSION['success'])){
			header('location: ../login.php');
		}
	 ?>		
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Dashboard</h1>
		</div>
	</div><!--/.row-->
		





<?php require './template/footer.php'; ?>