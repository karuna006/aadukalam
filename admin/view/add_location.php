<?php 
 	include_once 'header.php';
 	include_once '../controller/common_functions.php';
if(isset($_SESSION['user_details']['user_type'])){
 		if ($_SESSION['user_details']['user_type'] != 'admin') 
 		{
 			header('location:../../view/home.php?status=access_denied');
 		}
 	} ?>
 <form action="../controller/add_location.php" method="post" enctype="multipart/form-data">
	<div class="panel-body">
		<h1 style="text-align:center">Add location</h1>
			<div class="form-group">
				<label>location:-</label>
				 <input type="text" class="form-control" name="location" id="location" placeholder="location">
			</div>
			<button type="submit" class="btn btn-primary">Add location</button>
		</div>
	</form>
<?php include_once 'footer.php'; ?>
