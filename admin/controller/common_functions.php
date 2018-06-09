<?php

	function is__array($value){
		return is_array($value);
	}

	function emptty($value){
		return empty($value);
	}

		

	function landing_page_session_check(){
		session_start();
		if(!isset($_SESSION["user_details"]) || empty($_SESSION["user_details"])){
			header('location:../../view/login.php');
		}
	}

	function login_page_session_check(){
		// session_start();
		if(isset($_SESSION["user_details"])){
			$raw_data = $_SESSION["user_details"];
		if($raw_data["user_type"]=="admin"){
			// header('location:../view/purchase_details.php');
		}elseif ($raw_data["user_type"]=="user") {
			header('location:../../view/home.php?status=access_denied');
		}
	}
	}

	function log_out(){
		session_start();
		session_destroy();   
	}
