<!DOCTYPE html>
<?php
session_start();
?>
<?php
if(isset($_GET['err'])){
    if ($_GET['err']=="em") {
        echo '<script>
            alert("email or password do not exists!");
        </script>';
    }
}
?>
<html>	
<head>
<title>LOGIN | SPDC2016</title>

<!--/web-fonts-->

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

    <!------ Eng Light Box ------>	
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="" />
<link href="logincss/style.css" rel='stylesheet' type='text/css' />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<script>
function validate()
{
if(document.form1.email.value == "Email")
{
alert( "enter valid Email address!");
document.form1.email.focus() ;
return false;
}
else if(document.form1.pass.value == "Password")
{
alert("enter password!");
document.form1.pass.focus() ;
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
	
<!--User-Login-->
<h1>User Login</h1>
<div class="avtar">
	<img src="loginimages/avtar.png" />
</div>
	<div class="login-form">
		<p>New user?<a href="signup.php">Register here!</a></p>
			<form name="form1" action="login_php.php" method="post">
				<div class="form-text">
					<input type="text" name="email" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					<input type="password" name="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
				</div>
					<input type="submit" value="GO" onclick="return validate();">
			</form>
	</div>
<!--/User-Login-->
<!--start-copyright-->
<div class="copy-right">
	<p>&copy; 2016 ASME VIT. All rights reserved | Developed by  <a href="www.facebook.com/devmukul44" target="_blank">  Mukul Dev </a></p>
</div>
<!--//end-copyright-->	
</body>
</html>