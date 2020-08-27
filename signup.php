<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Signup </title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Username");
	document.form1.lid.focus();
	return false;
  }
   if(document.form1.name.value=="")
  {
    alert("Plese Enter name");
  document.form1.name.focus();
  return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not match");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
?>
 <p>&nbsp; </p>
 
 <div class="container-login100" style="background-image: url('images/bg.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form name="form1" method="post" action="signupuser.php" onSubmit="return check();" class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Sign Up
				</span>
				
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username">
					<input class="input100" type="text" id="loginid2" name="lid" placeholder=" Enter Username">
					<span class="focus-input100"></span>
				</div>

        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter name">
          <input class="input100" type="text" id="loginid2" name="name" placeholder=" Enter Name">
          <span class="focus-input100"></span>
        </div>
				
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter email">
					<input class="input100" type="text" id="loginid2" name="email" placeholder="Enter Email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="pass" id="pass" placeholder="Enter Password">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="cpass" id="cpass" placeholder=" Confirm Password">
					<span class="focus-input100"></span>
				</div>
				
        <div class="container-login100-form-btn">
          <button type="submit" name="submit" id="submit" class="login100-form-btn">
            Sign Up
          </button>
        </div>
				</div>

				

				</br>

			</form>
			
		</div>
	</div>
</body>
</html>
