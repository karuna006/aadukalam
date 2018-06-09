 <?php 
 	include_once 'header.php'; 
 	include_once '../controller/get_location.php';
 	include_once '../controller/get_subcategory.php';
 	$raw_data = display_location();
 	$sub_data = display_sub_category();
 	if(isset($_SESSION['user_details']['user_type'])){
 		if ($_SESSION['user_details']['user_type'] != 'admin') 
 		{
 			header('location:../../view/home.php?status=access_denied');
 		}
 	}
 ?>
 <head>
 	<link rel="stylesheet" type="text/css" href="../css/dropdown.css">
 </head>
 <form action="../controller/add_product_controller.php" method="post" enctype="multipart/form-data">
	<div class="panel-body">
		<h1 style="text-align:center">Add Products</h1>
			<div class="form-group">
				<label>Name:-</label>
				 <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Name">
			</div>
			<div class="form-group">
				<label>Image:-</label>
				 <input type="file" class="form-control" name="files" id="product_name" placeholder="Image">
			</div>
			<div class="form-group">
				<label>Price:-</label>
				 <input type="text" class="form-control" name="product_price" id="product_name" placeholder="Price">
			</div>
			<div class="form-group">
				<label>	product_description:-</label>
				 <input type="text" class="form-control" name="product_description" id="product_description" placeholder="product description">
			</div>
			<div class="form-group">
				<label>Category:-</label>
					<select name="catagory" class="form-control">
						<option value="red">Red</option>
						<option value="green">Green</option>
						<option value="white">White</option>
					</select>
			</div>
			<div class="form-group">
			<label>location:-</label>
					<select name="location[]" class="form-control" multiple>
						<option value="all_area">all area</option>
						<?php 
                            if ($raw_data == 'empty') {
                                    echo "";
                                 } 
                            else{
                                $i=0;
                            foreach ($raw_data as $value) {
                            echo "<option value='".$value['location']."'>".$value['location']."</option>";                   	
                            $i++;
                            }
                        }
                         ?>
					</select>
			</div>
<div class="form-group">
				<label>sub_category:-</label>
					<select name="sub_category" class="form-control">
						<?php 
                            if ($sub_data == 'empty') {
                                    echo "";
                                 } 
                            else{
                                $i=0;
                            foreach ($sub_data as $value) {
                            	echo "
                            	<option value=".$sub_data[$i]['Sub_category']." />".$sub_data[$i]['Sub_category']."</option>";
                            $i++;
                            }
                        }
                         ?>
					</select>
			</div>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src="../js/dropdown.js"></script>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
<?php include_once 'footer.php'; ?>