<?php 
	include_once '../admin/model/db.php';
	include_once '../admin/controller/common_functions.php';
	$conn = db_connect();
	$raw_data = $_POST;
	// print_r($raw_data);
	$sql2 = select('*','`users`','phone_no="'.$_POST['phone_no'].'"',db_connect());
	$sql3 = select('*','`users`','email_id="'.$_POST['email_id'].'"',db_connect());
	if ($sql2 != "empty") {
		header('location:../view/login.php?status=num_exits');
	}elseif ($sql3 != "empty") {
		header('location:../view/login.php?status=email_exits');	
	}else
	{
	$raw_data['Referral_id'] = $_POST['phone_no'];
	$raw_data['user_type'] = 'user';
	$sql =insert('`users`',$raw_data , $conn);
	if($sql) {
		header('location:../view/login.php?status=register');
	}else{
		header('location:../view/login.php?status=signup_error');
	}
}
?>