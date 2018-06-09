<?php 
	include_once '../model/db.php';
	include_once 'common_functions.php';
	$conn = db_connect();
	$raw_data = $_POST;	
	$raw_data['files'] = $_FILES['files']['name'];
	$target_dir = "../../images/".$raw_data['catagory']."/";
	$target_file = $target_dir . basename($_FILES["files"]["name"]);
	$raw_data['file_path'] = $target_file;
	$uploadOk = 1;
	if($raw_data['location'][0] != "all_area"){
		$location='';
		foreach ($raw_data['location'] as $value) {
			$location = $value.','.$location;
		}
		$raw_data['location']=$location;
	}else{
		$raw_data['location']=$raw_data['location'][0];
	}
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if (file_exists($target_file)) {
	    $uploadOk = 0;
	    echo "Sorry, file already exists.";
		header('location: ../view/add_product.php?status=file_exists');
	}else if (move_uploaded_file($_FILES["files"]["tmp_name"], $target_file)) {		
	 	insert('product_details',$raw_data , $conn);
    				header('location: ../view/add_product.php?status=uploaded');
    } else {
    	  echo "Sorry, there was an error uploading your file.";
   	}
