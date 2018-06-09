<?php 
include_once '../model/db.php';
function display_sub_category()
{
	return select('*','sub_category','1',db_connect());
}


