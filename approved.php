<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Approved Trips</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
  include("header.php");
?>

<div class="container-login100" style="background-image: url('images/bg.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form method="post" action="" class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Approved trips:
				</span>
				</hr>
				
				<?php
include("database.php");

$user =  $_REQUEST['username'];

$rs=mysqli_query($con,"select trip from user_trip where user = '$user' and approval = 1");

echo "<table>";

if(mysqli_num_rows($rs)<1)
	{
		echo "<span class=login100-form-title p-b-37>
					You have no approved trips yet
				</span>";
		}
while($row=mysqli_fetch_row($rs))
{
	//echo "<tr><td align=center ><a><font size=4>$row[0]</font></a>";
	echo "<tr><td align=center ><span class=login100-form-title p-b-37>
					* Trip $row[0] </span> </td> </tr>";
}
echo "</table>";

?>

				</br>

			</form>
			
		</div>
	</div>
</html>
