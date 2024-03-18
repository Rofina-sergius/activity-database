<html>
<head>
<title>Co-curricular activities</title>
<link rel="stylesheet" type="text/css" href="r1.css"></link>
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
<?php
session_start();
$name=$_POST['t1'];
$_SESSION['username']=$name;
?>
</body>
</html>