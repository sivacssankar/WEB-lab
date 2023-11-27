<?php
$servername="localhost";
$username="root";
$password="";
$dbname="siva";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
	{
	die("couldn't connect my sql".mysqli_connect_error());
	}
else
	{
	echo"data base connected successfully";
	}
?>
