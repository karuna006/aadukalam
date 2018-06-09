<?php
    include_once '../controller/common_functions.php';
	include_once '../model/db.php';
	include_once '../model/curd_operations.php';
	session_start();
	$conn = db_connect();
	$id=$_SESSION['id'];
	$raw_data = $_POST;
	$name=$raw_data['product_name'] ;
	$product_price=$raw_data['product_price'];
	$cata=$raw_data['catagory'];
	$raw_data['files'] = $_FILES['files']['name'];
	$target_dir = "../../images/".$raw_data['catagory']."/";
	$target_file = $target_dir . basename($_FILES["files"]["name"]);
	$raw_data['file_path'] = $target_file;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if($raw_data['location'][0] != "all_area"){
		$location='';
		foreach ($raw_data['location'] as $value) {
			$location = $value.','.$location;
		}
		$raw_data['location']=$location;
	}else{
		$raw_data['location']=$raw_data['location'][0];
	}
	echo "<pre>";
	print_r($raw_data);	
		// 	$result= update($raw_data,'`product_details`','id='."'$id'",$conn);
		// 	if ($result) {
		// move_uploaded_file($_FILES["files"]["tmp_name"], $target_file);		
  //   	 header('location: ../view/view_product.php?status=updated');
  //   }     
  //    else {
  //   	  echo "Sorry, there was an error uploading your file.";
  //  	}
