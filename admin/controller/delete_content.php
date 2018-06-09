<?php
include_once '../controller/common_functions.php';
	include_once '../model/db.php';
	$id = $_GET['del'];
	$link = db_connect();
	$dele = array('id' => $id);
	delete('home_content',$dele,$link);
	 header("Location:../view/edit_home.php");
	?>