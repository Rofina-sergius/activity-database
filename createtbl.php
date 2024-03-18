<?php
$connect=mysqli_connect("localhost","root","","presentation");
if(!$connect)
{
	die("Database not connected:".mysqli_connect_error());
}
$mysql="CREATE TABLE stdp(Studentname varchar(25),meeting varchar(35),title varchar(20),Organised_by varchar(50),on_date varchar(15))";
if(mysqli_query($connect,$mysql))
{
	echo "table created successfully";
}
else
{
	echo "table not created";
}
mysqli_close($connect);
?>