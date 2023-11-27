<html>
<body>
<?php
require('1stlogin.php');
if(isset($_POST['submitt']))
{

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['pass'];
$sql="insert into login(firstname,lastname,password)values('$fname','$lname','$pass')";
$result=mysqli_query($conn,$sql);
if($result)

echo"new records successfully created";


mysqli_close($conn);
}
else
{
?>
<form action=""method="POST">
<center>
<label for="Name">Enter first Name:</label>
<input type="text"name="fname" id="Name" placeholder="first Name"><br>
<label for="Name">Enter last Name:</label>
<input type="text"name="lname" id="Name"placeholder="last Name"><br>
<label>Password  :
<input type="password"name="pass"placeholder="enter password Here"><br></label>
<br>
<br>
<input type="submit"name="submitt"value="create now">
<br>

<?php
}
?>
</form>
</body>
</html>