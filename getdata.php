<html>
<head>
<title><center>Co-curricular activities</center></title>
<link rel="stylesheet" type="text/css" href="r1.css"></link>
<style type="text/css">
		
		input[type=text],input[type=date]
			{
		width:45%;
		padding:12px 20px;
		margin:10px 148px;
		display:inline-block;
		border:2px solid red;
		border-color: black;
		box-sizing:border-box;
		}

		input[type=submit]
		{

		width:32%;
		padding:12px 20px;
		margin:10px 148px;
		color:white;
		border:none;
		background-color:blue ;
		cursor: pointer;
	}
	textarea,select
	{
		width:45%;
		padding:12px 20px;
		margin:10px 148px;
		display:inline-block;
		border:2px solid red;
		border-color: black;
		box-sizing:border-box;
	}
		input[type=submit]:hover
	{
		background-color: #7989;
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
	<form name='f1' method='post' action='insertdata.php' >
		<?php
		session_start(); 
		echo "Hi! ".$_SESSION['username'];
		?><br><br>
	<br>

	Select meeting:<select name="s1">
	<option value="symposium paper presentation">symposium paper presentation</option>
	<option value="conference paper presentation">conference paper presentation</option>
	</select><br>
		Title:<input type='text' name='ttl' placeholder='Enter title'><br>
		Organised by:<textarea rows="1" cols="50" name="org">
		</textarea><br>
		Date:<input type='date' name='d'><br>
		<input type='submit' value='submit'>
	</form>
</body>
</html>