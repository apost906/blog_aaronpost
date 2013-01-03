<?php
function formate_date($mysql_date)	{
	$timestamp = strtotime($mysql_date);
	$datepublished = date('F j, Y \a\t g:ia',$timestamp);
	return $datepublished;
}