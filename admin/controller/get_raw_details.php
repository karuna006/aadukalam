<?php 
include_once '../model/db.php';

    function get_details($table){

	    return select('*',$table,'1',db_connect());
    }


    function get_product_detail($id){
		    $condition="`id` = '".$id."'";
			$con=db_connect();
			$selected_row=select('*','product_details',$condition,$con);
			return $selected_row;
    }