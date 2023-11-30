<html>
<head>
<title>Registration</title>
<style>
form{
	background-color:Lavender;
}
</style>
</head>
<body>
<?php
require('connect.php');
if(isset($_POST['sub']))
{
$name=$_POST['Name'];
$username=$_POST['Username'];
$number=$_POST['phone_no'];
$address=$_POST['Address'];
$password=$_POST['Password'];
$sql="insert into  user_registration(Name,Username,Phone_no,Address,Password)values('$name','$username','$number','$address','$password')";
$result=mysqli_query($conn,$sql);
if($result)
{
	header('Location: login1.php');
}
mysqli_close($conn);
}
else
{
?>
<form align="center" method="POST" action="">
<fieldset>
	<h1><u>Registration</u></h1>
	
	<label for="name">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="Name" id="name"><br><br>

	<label for="un">Username:</label>
	<input type="text" name="Username" id="un"><br><br>

	<label for="pn">Phone No:</label>
	<input type="number" name="phone_no" id="pn" maxlength=10><br><br>

	<label for="add">Address:&nbsp;&nbsp;</label>
	<textarea name="Address" id="add" ></textarea><br><br>
	
	<label for="pwd">Password:</label>
	<input type="password" name="Password" id="pwd"><br><br>

	<input type="submit" name="sub" id="sub" value="Submit">
	<input type="reset" name="rst" id="rst" value="Reset">
</fieldset>
<?php
}
?>
</form>
</body>
</html>