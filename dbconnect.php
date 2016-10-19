<?php
ob_start();
session_start();

$conn = mysql_connect("mysql.1freehosting.com","u621705429_orbit","s9500795c");

if($conn)
{
	mysql_select_db("u621705429_orbit");
}
else
{
	die("<p>could not connect :".mysql_error());
}

?>