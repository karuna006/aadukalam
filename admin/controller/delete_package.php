<?php
include_once '../controller/common_functions.php';
	include_once '../model/db.php';
	$id = $_GET['del'];
	$link = db_connect();
	$dele = array('id' => $id);
	delete('package_type',$dele,$link);
	 header("Location:../view/add_package_type.php");
	?>