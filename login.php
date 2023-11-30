<html>
<head>
<title>hui</title>
</head>
<body bgcolor="yellow">
<?php
require('1stlogin.php');
if(isset($_POST['submit']))
{
$name=$_POST['txt1'];
$password=$_POST['pd'];
$sql="select * from login where firstname='$name' AND password='$password'";
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
<form action="" method="post">
<center>
<label for="Name">user name:</label>
<input type="text" id="Name"placeholder="Name"name="txt1"><br>
<label>Password  :
<input type="password"placeholder="password Here"name="pd"><br></label>
</form><br>

<input type="submit"value="Sign In" name="submit">
<br><br>
<form action="signup.html" method="post">
new user? signup now
<br>
<input type="submit"value="Sign up">
<?php
}
?>
</form>
</body>
</html>
