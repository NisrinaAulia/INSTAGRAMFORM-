<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style2.css"
</head>
<body>
<div id="con">
<div class="logo">
Instagram
</div>
<div class="text">
Congratulation <a><?php echo $_POST["fullname"]; ?></a>!<br> You has been signed up to instagram with an username <a>@<?php 
echo $_POST["username"]; ?></a>, Please check<br> email at <a><?php echo $_POST["email"]; ?>
</a> to activate your account.
</div>
</body>
</html>
<?php

$host= "localhost";
$user= "root";
$password="";
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$pw=$_POST['pw'];
if($email)
$conn= mysql_connect($host, $user, $password);
mysql_select_db("dbinstagram");
$sql="insert into tbinstagram values('$email', '$fullname', '$username', '$pw')";
$hasil=mysql_query($sql, $conn);
echo "";
?>	
</body>
</html>
</body>
</html>