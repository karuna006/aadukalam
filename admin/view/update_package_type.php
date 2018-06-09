<?php 
 	include_once 'header.php';
 	include_once '../controller/common_functions.php';
 	include_once '../controller/add_package_controller.php';
 	$_SESSION['id'] = $_GET['upd'];
 	$raw_data = get_total_package($_SESSION['id']);
if(isset($_SESSION['user_details']['user_type'])){
 		if ($_SESSION['user_details']['user_type'] != 'admin') 
 		{
 			header('location:../../view/home.php?status=access_denied');
 		}
 	} ?>
<form action="../controller/update_package_type.php" method="post" enctype="multipart/form-data">
	<div class="panel-body">
		<h1 style="text-align:center">Update Package type</h1>
		<div class="form-group">
			<label>Package Name:-</label>
			 <input type="text" class="form-control" name="package_name" value="<?php print_r($raw_data[0]['package_name']);?>"  placeholder="Package Name" required>
			 <label>Package Price:-</label>
			 <input type="number" class="form-control" name="package_price" value="<?php print_r($raw_data[0]['package_price']);?>"  placeholder="Package Price" required>
		</div>
		<button type="submit" class="btn btn-primary">Update Package</button>
	</div>
</form>
<div class="home_content">
			</tbody>
		</table>
</div>
<?php include_once 'footer.php'; ?>
