<?php 
	include_once '../model/db.php';
	include_once 'common_functions.php';
			$conn = db_connect();
			$raw_data = $_POST;
			if ($raw_data!="") {
				insert('Sub_category',$raw_data , $conn);				
				header("location:../view/purchase_details.php?status=updated");
			}else
			{
				header("location:../view/purchase_details.php?status=not_updated");				
			}

