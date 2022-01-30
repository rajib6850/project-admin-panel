	<?php 


		require './template/header.php'; 

		$error = [];

		if(isset($_POST['assignHomePage'])){



	


			$sql = "SELECT * FROM pages WHERE pg_url = 'index.php'";
			$checkIndex = $conn->query($sql);
			$pg_details = $checkIndex->fetch_object();

			if($checkIndex->num_rows == 1){
			
				$pg_url = "?pg_url=" . str_replace(' ', '_', $pg_details->pg_title).time().rand(20, 1000);
				$sql = "UPDATE pages SET pg_url = '$pg_url' WHERE pg_url = 'index.php' ";
				$conn->query($sql);


				$page_id = $_POST['assignHomePage'];
				$indexpage = "index.php";
				$sql = "UPDATE pages SET pg_url = '$indexpage' WHERE page_id = '$page_id'";
				$sql_success = $conn->query($sql);			

				if($sql_success){
					$error['assign_success'] = "<div class='alert alert-success'>Home page assign successfull..!</div>";
				}else{
					$error['assign_failed'] = "<div class='alert alert-danger'>Failed home page assigning..!</div>";
				}
			}
		}
	?>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">All Pages</h1>
			</div>
		</div><!--/.row-->
		

		<div class="row " style="max-width: 500px;">
			<div class="col-lg-12">
				

				<?php 

					if(isset($error['assign_failed'])){
						echo $error['assign_failed'];
					}
					if(isset($error['assign_success'])){
						echo $error['assign_success'];
					}

				?>
				<form action="#" method="POST">
					<div class="form-group mt-3" style="margin-top:10px;">
						<label for="assignHomePage">Assign Your Home Page</label>
						<select name="assignHomePage" id="assignHomePage" class="form-control">
							<option>--Assign Home Page--</option>
							
					        <?php 

							  $sql = "SELECT * FROM pages";
							  $menu = $conn->query($sql);

					          while($menuList = $menu->fetch_object()) :?>


					        <option value="<?php echo $menuList->page_id; ?>" >
					        	<a href="<?php echo $menuList->pg_url; ?>"><?php echo $menuList->pg_title; ?></a>
					        </option>

					         <?php endwhile; ?>
						</select>

						<div class="form-group mt-3" style="margin-top:10px;">
							<input type="submit" value="Assign Home Page" class="btn btn-info" name="assign_submit">
						</div>
					</div>
				</form>
			</div>
		</div>		



<?php require './template/footer.php'; ?>