<html>
<body bgcolor="Aquamarine">
<?php
require('1stlogin.php');
if(isset($_POST['sub']))
{
$id=$_POST["seetha"];
$sql="delete from library where id='$id'";
$result=mysqli_query($conn,$sql);
if($result)
{
echo"1 record deleted";
}
else
{
echo"failed deletion";
}

mysqli_close($conn);
}
else
{
?><form method="POST"align="center">
<marqueue><input type="text"placeholder="enter id"name="seetha"><br>
<input type ="submit"name="sub"><br></marqueue>
<?php
}
?></form>
</body>
</html>