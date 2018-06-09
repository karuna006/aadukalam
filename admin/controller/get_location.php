<?php 
include_once '../model/db.php';
function display_location()
{
	return select('*','location','1',db_connect());
}


