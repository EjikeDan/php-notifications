
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Welcome | Trip</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include("header.php");
include("database.php");

?>

	<?php
//session_start();
echo $_SESSION["username"];
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

$rs=mysqli_query($con,"select last_login from user where username = '$user'");
$row=mysqli_fetch_row($rs);
echo $row[0];
?>
      </h2></li>
      <li><a href="signout.php?username=<?php echo $_REQUEST['username']; ?>"> <span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
  </div>
</nav>

					<div class="container-login100" style="background-image: url('images/bg.jpg');">
		<div style="margin-right:100px; margin-bottom:100px;" class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form method="post" action="" class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Choose trip
				</span>

				<div class="container-login100-form-btn">
					<a href="trip.php?trip=1&username=<?php echo $_REQUEST['username'];?>"  name="submit" id="submit" class="login100-form-btn">
						Trip 1
					</a>
				</div></br>
				
				<div class="container-login100-form-btn">
					<a href="trip.php?trip=2&username=<?php echo $_REQUEST['username'];?>"  name="submit" id="submit" class="login100-form-btn">
						Trip 2
					</a>
				</div></br>
				
				<div class="container-login100-form-btn">
					<a href="trip.php?trip=3&username=<?php echo $_REQUEST['username'];?>"  name="submit" id="submit" class="login100-form-btn">
						Trip 3
					</a>
				</div></br>
				
				<div class="container-login100-form-btn">
					<a href="trip.php?trip=4&username=<?php echo $_REQUEST['username'];?>"  name="submit" id="submit" class="login100-form-btn">
						Trip 4
					</a>
				</div></br>

				<div class="container-login100-form-btn">
					<a href="trip.php?trip=5&username=<?php echo $_REQUEST['username'];?>"  name="submit" id="submit" class="login100-form-btn">
						Trip 5
					</a>
				</div></br>

				<div class="container-login100-form-btn">
					<a href="trip.php?trip=6&username=<?php echo $_REQUEST['username'];?>"  name="submit" id="submit" class="login100-form-btn">
						Trip 6
					</a>
				</div></br>

				<div class="container-login100-form-btn">
					<a href="trip.php?trip=7&username=<?php echo $_REQUEST['username'];?>"  name="submit" id="submit" class="login100-form-btn">
						Trip 7
					</a>
				</div></br>

				</br>

			</form>

			
		</div>
		
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form method="post" action="" class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Trips
				</span>

				<div class="container-login100-form-btn">
					<a href="pending.php?username=<?php echo $_REQUEST['username'];?>" name="submit" id="submit" class="login100-form-btn">
						Pending trips
					</a>
				</div></br>
				
				<div class="container-login100-form-btn">
					<a href="approved.php?username=<?php echo $_REQUEST['username'];?>" name="submit" id="submit" class="login100-form-btn">
						Approved trips
					</a>
				</div></br>
				
				<div class="container-login100-form-btn">
					<a href="declined.php?username=<?php echo $_REQUEST['username'];?>" name="submit" id="submit" class="login100-form-btn">
						Declined trips
					</a>
				</div>

				</br>

			</form>

			
		</div>
		
		
	</div>
	
	
	
	
	
	

</body>
</html>
