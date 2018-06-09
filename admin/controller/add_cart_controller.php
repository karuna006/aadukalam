<?php 
  include_once 'common_functions.php';
  	if(isset($_SESSION["user_details"])){
  		header('location:home.php');
  		else{
  			header('location:login.php')
  		}
?>