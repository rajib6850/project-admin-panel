	<?php 	require './template/header.php'; ?>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">All Pages</h1>
			</div>
		</div><!--/.row-->
		

		<div class="row " style="max-width: 500px;">
			<div class="col-lg-12">
				<div class="list-group">


					<?php 


					$sql = "SELECT * FROM pages";
					$menu = $conn->query($sql);

					while ($allMenu = mysqli_fetch_assoc($menu)) : ?>
				  		<a href="<?php echo 'editpage.php' .$allMenu['pg_url']; ?>" class="list-group-item list-group-item-action"><?php echo $allMenu['pg_title']; ?></a>	
					<?php endwhile; ?>






				</div>
			</div>
		</div>		



<?php require './template/footer.php'; ?>