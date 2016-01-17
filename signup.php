<!DOCTYPE html>
<?php
session_start();
?>
<?php
if(isset($_GET['err'])){
    if ($_GET['err']=="em") {
        echo '<script>
            alert("email already exists! try with different email or LOGIN");
        </script>';
    }
}
?>
<html>	
<head>
<title>SIGNUP | SPDC2016</title>


<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->

    <!------ Eng Light Box ------>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="" />
<link href="logincss/signup.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->

<script>
function validate()
{
if(document.form1.pass.value == document.form1.cpass.value)
{
return true;
}
else
{
alert("password dosenot match!");
return false;
}
}
</script>
<script>
function validate1()
{
if(document.form1.gender.value == "1")
{
alert( "Select Gender");
return false;
}
else if(document.form1.shirt.value == "1")
{
alert("enter password!");
return false;
}
}
</script>
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="top-header navbar-fixed-top">
			<div class="container">
				<div class="logo">
					<a href="index.php"><img src="images/asme_logo1.png" class="img-responsive" alt="" /></a>			
				</div>
				<div class="top-menu">
				  <span class="menu"> </span>
					<ul>
						<li><a href="index.php#home" class="scroll">HOME</a></li>
						<li><a href="index.php#portfolio" class="scroll">Student Design Competition</a></li>
						<li><a href="index.php#portfolio" class="scroll">Old Guard Competitions</a></li>
						<li><a href="index.php#contact-section" class="scroll">CONTACT US</a></li>
						<li><a href="#" class="scroll">REGISTER</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				 <!--script-nav-->
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>

<!-- 			<div class="clearfix"></div>
-->			</div>
		</div>

    <!-- header-section-ends --> 

	<div class="login-form">
	<h2> Register | SPDC2016 </h2>
			<div class="form-info">
					<form action="signup_php.php" method="post" name="form1" onsubmit="return validate();return validate1();">
							<input type="text" name="fname" class="email" placeholder="First Name" required=""/>
							<input type="text" name="lname" class="email" placeholder="Last Name" required=""/>
							<input type="email" name="email" class="email" placeholder="Email Address" required=""/>
							<input type="text" name="phone" class="email" placeholder="Phone Number" required=""/>
							
							<select class="form-control" name="gender" id="InputName" required>
							<option value="1"> -- Gender -- </option>
							<option value="m"> m </option>
							<option value="f"> f </option>
							</select>
							<br><br>
							
							<input type="text" name="cname" class="email" placeholder="College Name" required=""/>
							
							<select class="form-control" name="shirt" id="InputName" required>
							<option value="1"> -- T_Shirt Size -- </option>
							<option value="S"> S </option>
							<option value="M"> M </option>
							<option value="L"> L </option>
							<option value="XL"> XL </option>
							<option value="XXL"> XXL </option>
							</select>
							<br><br>
							<input type="password" name="pass" class="password" placeholder="Password" required=""/>
							<br><br>
							<input type="password" name="cpass" class="password" placeholder="Confirm Password" required=""/>
						<ul class="login-buttons">
							<li style="width:105%;"><input type="submit" value="REGISTER"></li>
							<div class="clear"> </div>
						</ul>
					</form>
			</div>
	</div>
<!--copyrights-->
<!--/copyrights-->
</body>
</html>