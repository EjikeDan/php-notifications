<?php
include("database.php");

$user =  $_REQUEST['username'];

mysqli_query($con,"update user set last_login = now() where username = '$user'");

session_start();
session_destroy();
header("Location: index.php");
?>
