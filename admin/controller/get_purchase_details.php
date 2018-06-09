<?php 
include_once '../model/db.php';
include_once 'common_functions.php';
function purchase_details()
{
	return select('*','purchase_details','1',db_connect());
}