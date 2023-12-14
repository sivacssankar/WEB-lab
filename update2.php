<html>
<body bgcolor="Aquamarine"><center>
<?php
require('1stlogin.php');
if(isset($_POST['sub']))
{
$id=$_POST["seetha"];
$sql="select * from library where id='$id'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo"bookname :".$row["Book_name"]."<br>";
echo"author :".$row["Author"]."<br>";
echo"publisher :".$row["Publisher"]."<br>";
echo"quantity :".$row["Quantity"]."<br>";
echo"prize :$".$row["prize"]."<br><br>";
}
}
else
{
echo"failed";
}
mysqli_close($conn);
}

?></center>
</body>
</html>