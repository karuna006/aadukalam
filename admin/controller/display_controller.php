<?php 
include_once '../model/db.php';
include_once 'common_functions.php';
function display_details()
{
	
	return select('*','product_details', '1' ,db_connect());
}	