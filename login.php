<html>
<head>
<title>Co-curricular activities</title>
<link rel="stylesheet" type="text/css" href="r1.css"></link>
<script language="javascript">

		function fu1()
		{
			var a=f1.t1.value;
			if(a=="")
				alert("please enter Username")
		}
		function fu2()
		{
			var b=f1.p1.value;
			if(b=="")
				alert("please enter password")
		}
	</script>
	<style type="text/css">
		
		input[type=text],input[type=password]
			{
		width:32%;
		padding:12px 20px;
		margin:10px 178px;
		display:inline-block;
		border:2px solid red;
		border-color: black;
		box-sizing:border-box;
		}

		input[type=submit]
		{

		width:32%;
		padding:12px 20px;
		margin:10px 178px;
		color:white;
		border:none;
		background-color:blue ;
		cursor: pointer;
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
			<li><a href="home.html">Home</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</nav>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<form name="f1" method="post" action="ln.php">
	Username:<input type="text" name="t1" placehoder="username">
	Password:<input type="password" name="p1" placehoder="password" onfocusin="fu1()">
	<input type="submit" value="login" onfocusin="fu2()">
	</form>
</body>
</html>