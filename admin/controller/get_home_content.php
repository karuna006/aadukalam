<?php 
	include_once '../model/db.php';
	include_once 'common_functions.php';
	function get_home_content(){
		$conn=db_connect();
		return select("*","home_content","",$conn);
	}

 ?>