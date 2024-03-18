<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}
td,th{
  padding: 8px;
  border-top: 1px solid #DDD;
}
tr:hover {background-color: #D6EEEE;}
</style>
</head>
<body>
<table>
<?php
session_start();
$connect=mysqli_connect("localhost","root","","presentation");
if(!$connect)
{
	die("Database not connected:".mysqli_connect_error());
}
$mysql="SELECT * FROM stdp";
$result = mysqli_query($connect, $mysql);

if (mysqli_num_rows($result) > 0) 
{
	echo"<tr>
                <td>"."<b>Studentname</b>"."</td>
                <td>"."<b>meeting</b>"."</td>
                <td>"."<b>title</b>"."</td>
                <td>"."<b>Organised_by</b>"."</td>
                <td>"."<b>on_date</b>"."</td>
        </tr>";
    while ($row = mysqli_fetch_assoc($result))
     {
        echo"<tr>
                <td>".$row["Studentname"]."</td>
                <td>".$row["meeting"]."</td>
                <td>".$row["title"]."</td>
                <td>".$row["Organised_by"]."</td>
                <td>".$row["on_date"]."</td>
        </tr>";
    }
}
else
{
  echo "no row selected";
}
mysqli_close($connect);
?>
</table>
</body>
</html>
