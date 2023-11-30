<html>
<head>
<title>Login</title>
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
$name=$_POST['txt1'];
$password=$_POST['pd'];
$sql="select * from user_registration where Username='$name' AND Password='$password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	echo "Login Success";
}
else
{
 	echo "Login failed";
}
mysqli_close($conn);
}
else
{
?>
<form align="center" action="" method="POST">
<fieldset>
	<h2><u>Login</u></h2>

	<label for="un">Username:</label>
	<input type="text" name="txt1" id="un"><br><br>

	<label for="pwd">Password:</label>&nbsp;
	<input type="password" name="pd" id="pwd"><br><br>

	<i><b>New User?<b><a href="register.html" target="_self">Register</a></i><br><br>

	<input type="submit" name="sub" id="sub" value="Sign in">&nbsp;&nbsp;
	<input type="reset" name="rst" id="rst" value="Clear">
</fieldset>
<?php
}
?>
</form>
</body>
</html>	