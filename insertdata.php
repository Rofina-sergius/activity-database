<html>
<head>
<title>Co-curricular activities</title>
<link rel="stylesheet" type="text/css" href="r1.css"></link>
<style>
	div
	{
		background-color:#B2BEB5;
		font-size:25px;
		width:50%;
	}
	input[type=submit]
		{
		width:45%;
		padding:12px 20px;
		margin:10px 82px;
		color:white;
		border:none;
		background-color:blue ;
		cursor: pointer;
	}
</style>
</head>
<body>
	<nav>
		<h1>Students Co-curricular activities</h1>
		<ul>
			<li><a href="getdata.php">Insert</a></li>
			<li><a href="displaydata.php">Display</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<form name='f1' method='post' action='print.php' >
<center><div><?php
session_start(); 
$name=$_SESSION['username'];
$pp=$_POST['s1'];
$_SESSION['paper']=$pp;
$ttl=$_POST['ttl'];
$_SESSION['title']=$ttl;
$org=$_POST['org'];
$_SESSION['orgby']=$org;
$d=$_POST['d'];
$_SESSION['date']=$d;
$connect=mysqli_connect("localhost","root","","presentation");
if(!$connect)
{
	die("Database not connected:".mysqli_connect_error());
}
$mysql="INSERT INTO stdp(studentname,meeting,title,Organised_by,on_date)values('$name','$pp','$ttl','$org','$d')";
if(mysqli_query($connect,$mysql))
{
	echo "Inserted successfully!<br>";
	echo "Name :".$name."<br>";
	echo "Meeting:".$pp."<br>";
	echo "Title:".$ttl."<br>";
	echo "Organised by:".$org."<br>";
	echo "Date:".$d."<br>";
}
else
{
	echo "not inserted";
}
mysqli_close($connect);
?><input type='submit' value='Print'>
</div></center>
</form>
</body>
</html>