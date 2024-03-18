<?php
$connect=mysqli_connect("localhost","root","");
if(!$connect)
{
	die("Database not connected:".mysqli_connect_error());
}
else
{
	echo "database connected";
}
?>