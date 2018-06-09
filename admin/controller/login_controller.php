<?php 
	include_once '../model/db.php';
	include_once 'common_functions.php';
	$con = db_connect();
	$username = sanitize($_POST['username'], $con);
	$password = sanitize($_POST['password'], $con);
	$raw_data = get_raw_data($username, $password, $con);
		//print_r($raw_data);
	
	if($raw_data!="empty" && $raw_data['0']['user_type'] == 'admin'){
		create_session($raw_data);
		 //print_r($raw_data['0']['user_type']);
		 header('Location: ../view/add_product.php');
	}else if($raw_data!="empty" && $raw_data['0']['user_type'] == 'user'){
		create_session($raw_data);
		 // print_r($raw_data['0']['user_type']);
		header('Location: ../../index.php');
	}
	else{
		// echo "no data";
		 //print_r($raw_data);
		header('Location: ../../view/login.php?status=login_error');
	}

	
	function get_raw_data($username, $password, $con){
		$selected_row = select('*', 'users', array("email_id"=>$username, "password"=>$password), $con);
		return $selected_row;
	}

	function create_session($data){
		session_start();
		$user_details = $data['0'];
		$_SESSION["user_details"] = $user_details;
		if(isset($_SESSION['user_details'])){
			return true;
		}
		return false;
	}

