<?php  
include_once 'header.php'; 
include_once '../controller/get_raw_details.php';
include_once '../controller/get_subcategory.php';
$_SESSION['id'] = $_GET['upd'];
$sub_data = display_sub_category();
 $raw_data = get_product_detail($_SESSION['id']);
 include_once '../controller/get_location.php';
    $get_data = display_location('location');
    if(isset($_SESSION['user_details']['user_type'])){
 		if ($_SESSION['user_details']['user_type'] != 'admin') 
 		{
 			header('location:../../view/home.php?status=access_denied');
 		}
 	}
?>
 <form action="../controller/update_product.php" method="post" enctype="multipart/form-data">
	<div class="panel-body">
		<h1 style="text-align:center">update Products</h1>
			<div class="form-group">
				<label>Name:-</label>

				 <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Name" value="<?php print_r($raw_data[0]['product_name']);?>" required autofocus><br>
			                
			</div>
			<div class="form-group">
				<label>Image:-</label>
				 <input type="file" class="form-control" name="files" id="product_name" placeholder="Image"value="<?php print_r($raw_data[0]['files']);?>" required autofocus><br>
				  
			</div>
			<div class="form-group">
				<label>Price:-</label>
				 <input type="text" class="form-control" name="product_price" id="product_price" placeholder="Price"value="<?php print_r($raw_data[0]['product_price']);?>" required autofocus><br>
			</div>
			<div class="form-group">
				<label>	product_description:-</label>
				 <input type="text" class="form-control" name="product_description" id="product_description" placeholder="product description"value="<?php print_r($raw_data[0]['product_description']);?>" required autofocus><br>
			</div>
			<div class="form-group">
				<label>Category:-</label>
					<select name="catagory" class="form-control"value="<?php print_r($raw_data[0]['catagory']);?>" required autofocus>
						<option value="red">Red</option>
						<option value="green">Green</option>
						<option value="white">White</option>
					</select><br>
			</div>
			<div class="form-group">
				<label>location:-</label>
					<select name="location[]" class="form-control"value="<?php print_r($raw_data[0]['location']);?>" required autofocus multiple>
						<option value="all_area">all area</option>
						<?php 
                            if ($get_data == 'empty') {
                                    echo "";
                                 } 
                            else{
                                $i=0;
                            foreach ($get_data as $value) {
                            echo "<option value=".$get_data[$i]['location'].">".$get_data[$i]['location']."</option>";                   	
                            $i++;
                            }
                        }
                         ?>
					</select><br>
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