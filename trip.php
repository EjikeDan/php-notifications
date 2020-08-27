<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php

include("database.php");

$trip =  $_REQUEST['trip'];
$user =  $_REQUEST['username'];

$query="insert into user_trip (user,trip) values('$user','$trip')";
$rs=mysqli_query($con,$query)or die("Could Not Perform the Query");
echo "<script>window.history.back();alert('Trip successfully booked... Awaiting approval');</script>";
?>
</body>
</html>
