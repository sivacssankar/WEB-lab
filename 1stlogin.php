<?php
$servername="localhost";
$username="root";
$password="";
$dbname="siva";
$conn="mysql_connect($servername,$username,$password,$dbname)";
if(!$conn)
	{
	die("couldn't connect my sql".mysql_error());
	}
else
	{
	echo"data base connected successfully";
	}
?>
