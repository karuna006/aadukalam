<?php 
 	include_once 'header.php'; 
 	if(isset($_SESSION['user_details']['user_type'])){
 		if ($_SESSION['user_details']['user_type'] != 'admin') 
 		{
 			header('location:../../view/home.php?status=access_denied');
 		}
 	}
 ?>
 <form action="../controller/add_Sub_category.php" method="post" enctype="multipart/form-data">
	<div class="panel-body">
		<h1 style="text-align:center">Sub_category</h1>
			<div class="form-group">
				<label>category:-</label>
				 <input type="text" class="form-control" name="Sub_category" id="Sub_category" placeholder="Sub category">
			</div>
			<button type="submit" class="btn btn-primary">Add Sub_category</button>
		</div>
	</form>
<?php include_once 'footer.php'; ?>