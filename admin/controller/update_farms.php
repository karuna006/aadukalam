<?php
    include_once '../controller/common_functions.php';
	include_once '../model/db.php';
	include_once '../model/curd_operations.php';
	session_start();
	$conn = db_connect();
	// echo "<pre>";
	$id= $_SESSION['farm_id'];
	$raw_data = $_POST;
	$result= update($raw_data,'`farm_content`','id='."'$id'",$conn);
			if ($result) {
    	 header('location: ../view/edit_farms.php');
    }     
     else {
    	  echo "Sorry, there was an error uploading your file.";
   	}