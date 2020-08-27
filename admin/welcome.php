<?php
session_start();
//echo $_SESSION[login];
//echo $_REQUEST['username'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Welcome | Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
include("header.php");
include("database.php");

?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><h1>Welcome, <?php echo $_REQUEST['username'];?></h1></a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><h2><span class="glyphicon glyphicon-user"></span> Last Login: 
<?php
include("database.php");

$user =  $_REQUEST['username'];

$rs=mysqli_query($con,"select last_login from admin where username = '$user'");
$row=mysqli_fetch_row($rs);
echo $row[0];
?>
      </h2></li>
      <li><a href="signout.php?username=<?php echo $_REQUEST['username']; ?>"> <span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
  </div>
</nav>

	<?php
//session_start();
echo $_SESSION["username"];
?>

					<div class="container-login100" style="background-image: url('image/bg.jpg');">
		<div style="margin-right:10px; margin-bottom:100px;" class="wrap-login101 p-l-55 p-r-55 p-t-80 p-b-30">
			<form method="post" action="" class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Trips awaiting approval
				</span>
				
				<?php
include("database.php");

///$user =  $_REQUEST['username'];

$rs=mysqli_query($con,"select user, trip, id from user_trip where approval = 0");

echo "<table>";

if(mysqli_num_rows($rs)<1)
	{
		echo "<span class=login100-form-title p-b-37>
					You have no Declined trips yet
				</span>";
		}
while($row=mysqli_fetch_row($rs))
{
	//echo "<tr><td align=center ><a><font size=4>$row[0]</font></a>";
	echo "<tr><td align=center style=white-space:nowrap ><span class=login100-form-title p-b-37>
					 $row[0] - Trip: $row[1] -
					<a href='approve.php?id=$row[2]' style='font-size:24px'>Approve <i class='fa fa-check'></i></a>
					- <a href='decline.php?id=$row[2]' style='font-size:24px'>Decline <i class='fa fa-close'></i></a>
					</span>
					</td> </tr>";
}
echo "</table>";

?>

				</br>
			</form>	
		</div>
		
		
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form method="post" action="" class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Approved trips:
				</span>
				</hr>
				
				<?php
include("database.php");

$user =  $_REQUEST['username'];

$rs=mysqli_query($con,"select user, trip from user_trip where approval = 1");

echo "<table>";

if(mysqli_num_rows($rs)<1)
	{
		echo "<span class=login100-form-title p-b-37>
					You have not approved any trips yet
				</span>";
		}
while($row=mysqli_fetch_row($rs))
{
	//echo "<tr><td align=center ><a><font size=4>$row[0]</font></a>";
	echo "<tr><td align=center ><span class=login100-form-title p-b-37>
					$row[0] - Trip: $row[1] </span> </td> </tr>";
}
echo "</table>";

?>
				</br>
			</form>
		</div>
		
		
		
		
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form method="post" action="" class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Declined trips:
				</span>
				</hr>
				
				<?php
include("database.php");

$user =  $_REQUEST['username'];

$rs=mysqli_query($con,"select user, trip from user_trip where approval = -1");

echo "<table>";

if(mysqli_num_rows($rs)<1)
	{
		echo "<span class=login100-form-title p-b-37>
					You have not declined any trips yet
				</span>";
		}
while($row=mysqli_fetch_row($rs))
{
	//echo "<tr><td align=center ><a><font size=4>$row[0]</font></a>";
	echo "<tr><td align=center ><span class=login100-form-title p-b-37>
					$row[0] - Trip: $row[1] </span> </td> </tr>";
}
echo "</table>";

?>
				</br>
			</form>
		</div>
	</div>	
	</div>

</body>
</html>
