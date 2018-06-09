<?php 
	include_once '../model/db.php';
	include_once 'common_functions.php';
	$conn = db_connect();
	$raw_data = $_POST;
	if ($raw_data!="") {
		insert('package_type',$raw_data , $conn);				
		header("location:../view/add_package_type.php?status=updated");
	}else
	{
		header("location:../view/add_package_type.php?status=not_updated");				
	}

