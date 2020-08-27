<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
extract($_POST);
include("database.php");
$rs=mysqli_query($con,"select * from user where username='$lid'");
if (mysqli_num_rows($rs)>0)
{
	echo "<script>window.history.back();alert('Username already exists')</script>";
	exit;
}
//echo $lid;
$query="insert into user(username,name,email,password) values('$lid','$name','$email', '$pass')";
$rs=mysqli_query($con,$query)or die("Could Not Perform the Query");
echo "<script>location.href='index.php';alert('Account created successfully')</script>";


?>
</body>
</html>

