<?php
$connect=mysqli_connect("localhost","root","");
if(!$connect)
{
	die("Database not connected:".mysqli_connect_error());
}
$mysql="CREATE DATABASE presentation";
if(mysqli_query($connect,$mysql))
{
	echo "database created successfully";
}
else
{
	echo "database not created";
}
mysqli_close($connect);
?>