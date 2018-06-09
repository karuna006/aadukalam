<?php 
	include_once '../model/db.php';
	include_once 'common_functions.php';

	function get_total_package(){
		$conn=db_connect();
		return select("*","package_type","",$conn);
	}
