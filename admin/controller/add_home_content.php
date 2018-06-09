<?php 
	include_once '../model/db.php';
	include_once 'common_functions.php';
			$conn = db_connect();
			$raw_data = $_POST;
			// print_r($raw_data);
			if ($raw_data!="") {
				insert('home_content',$raw_data , $conn);				
				header("location:../view/edit_home.php?status=content_updated");
			}else
			{
				header("location:../view/edit_home.php?status=content_not_updated");				
			}


