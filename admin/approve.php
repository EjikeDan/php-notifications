<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php

include("database.php");

$id =  $_REQUEST['id'];

$query="update user_trip set approval = 1 where id = $id";
$rs=mysqli_query($con,$query)or die("Could Not Perform the Query");
echo "<script>location.href='welcome.php';alert('Trip succcessfully approved.');</script>";
?>
</body>
</html>
