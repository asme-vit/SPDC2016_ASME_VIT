<!DOCTYPE html>
<?php
session_start();
ob_start();
if($_SESSION["email"] == "")
{
	header("location:login.php?err=em");
}
?>
<?php
if(isset($_GET['err'])){
    if ($_GET['err']=="done") {
        echo '<script>
            alert("Thanks for registration. Please make payment!");
        </script>';
    }
}
?>
<html>
<head>
<title>SPDC | Dashboard</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery-ui.min.js"></script>
<meta charset="utf-8" />
		<meta name="language" content="en-us"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="description" content="STUDENT PROFESSIONAL DEVELOPMENT CONFERENCE(SPDC)-India 2016-The American Society of Mechanical Engineers(ASME)-VIT university,vellore WEBSITE. DEVELOPED BY- MUKUL DEV(DEVMUKUL44@GMAIL.COM),HIANSHU GUPTA(HIMANSHU199565@GMAIL.COM). " />
		<meta name="keywords" content="SPDC 2016,ASME 2016,SPDC,ASME,STUDENT PROFESSIONAL DEVELOPMENT CONFERENCE,SPDC VIT,VIT university VELLORE,VIT VELLORE,MUKUL DEV,HIMANSHU GUPTA,DEVMUKUL44@GMAIL.COM,MUKUL.DEV@OUTLOOK.COM,mukul.dev2013@vit.ac.in,HIMANSHU199565@GMAIL.COM,MUKUL DEV VIT,MUKUL DEV VIT VELLORE,DEVMUKUL44,HIMANSHU GUPTA VIT, Web Designing" />
		<meta name="distribution" content="Global" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="1 days"/>
		<meta name="publisher" content="ASME INDIA, VIT VELLORE, MUKUL DEV , HIMANSHU GUPTA" />
		<meta name="copyright" content="ASME INDIA 2016"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!------ Light Box ------>

    <!------ Eng Light Box ------>	
	
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="logo">
					<a href="index.php"><img src="images/asme_logo1.png" class="img-responsive" alt="" /></a>			
				</div>
				<div class="top-menu ">
				  <span class="menu"> </span>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php#portfolio">Student Design Competition</a></li>
						<li><a href="index.php#portfolio">Old Guard Competitions</a></li>
						<li><a href="index.php#contact-section">Contact Us</a></li>
						<li><a href="main.php">Register</a></li>
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
<nav class="navbar navbar-inverse navbar-fixed-top" style="position:relative;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="main.php">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Dashboard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span style="color:red;">HELLO</span> &nbsp &nbsp <?php echo $_SESSION["email"];?></a></li>
		<li><a href="view.php">view profile</a></li>
        <li><a href="logout_php.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
    <!-- header-section-ends --> 
	<br>
	<div class="container">
	<marquee>Early Bird registration ends 6th Feb,2016</marquee>
	<button type="button" class="btn btn-primary btn-block"> Your Previous Registrations</button>
	<br>
	<?php
	include("connection.php");
	$email = $_SESSION["email"];
		$sql ="Select * from yes_payment where email='$email'";
		$result = mysqli_query($con, $sql);
		
		if (mysqli_num_rows($result) > 0) 
		{
			echo "<table style='width:100%'>
			<tr>
			<th>Reference no.</th>
			<th>Email</th>
			<th>TSPL Transaction ID</th>
			<th>Bank Reference No.</th>
			<th>Amount</th>
			<th>Transaction Date</th>
			</tr>";
		while($row = mysqli_fetch_row($result)) 
		{
			echo "<tr>";
        echo "<td> " . $row[0]. " <td> " . $row[1]. "<td> " . $row[2]. "<td> " .$row[3] . "<td> " .$row[5]. "<td> " .$row[6];
			echo "</tr>";
		}
		echo "</table>";
		}
		else 
		{
		echo "<center>no transactions yet!</center><br><br><br>";
		}
		
	?>
	<br><br>
	</div>
	<div class="container">
		<form role="form" action="main_reg1.php" method="post">
			
			<div class="form-group">
                    <label for="InputName">Select Competition<span style="color:red;" class="glyphicon glyphicon-asterisk"></span></label>
                    <div class="input-group">
					<input type="radio" name="comp" value="1" checked> <label for="InputName">&nbsp;&nbsp;&nbsp;Student Design Competition</label><br>
					<input type="radio" name="comp" value="2"> <label for="InputName">&nbsp;&nbsp;&nbsp;Old Guard Oral Presentation Competition</label><br>
					<input type="radio" name="comp" value="3"> <label for="InputName">&nbsp;&nbsp;&nbsp;Old Guard Technical Webpage Presentation Competition</label><br>
					<input type="radio" name="comp" value="4"> <label for="InputName">&nbsp;&nbsp;&nbsp;Old Guard Technical Poster Presentation Competition</label><br>
					<input type="radio" name="comp" value="5"> <label for="InputName">&nbsp;&nbsp;&nbsp;Old Guard Video Presentation Competition</label><br>
					</div>
             </div>
             <input type="submit" name="submit" id="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REGISTER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="btn btn-primary">
			 <br>
			 <br>
		</form>
		<form role="form" action="main_reg2.php" method="post">
		<div class="form-group">
                    <label for="InputName">Select the ticket type</label>
                    <div class="input-group">
                        <select class="form-control" name="ticket" id="InputName" required>
						<option value="1">Early Bird - ASME Member </option>
						<option value="2">Early Bird - Non ASME Member </option>
						<option value="3">Regular - ASME Member </option>
						<option value="4">Regular - Non ASME Member </option>
						<option value="5">Last Chance - ASME Member </option>
						<option value="6">Last Chance - Non ASME Member </option>
						<option value="7">HPVC Participant - SPDC Seminars and Banquet </option>
						<option value="8">SPDC seminars and banquet only </option>
						<option value="9">For Professionals(SPDC seminars and banquet only)</option>
						</select>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
             </div>
			 <input type="submit" name="submit" id="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;Make Payment&nbsp;&nbsp;&nbsp;&nbsp;" class="btn btn-primary">
			 <br>
			 <br>
		</form>
		<br><br><br>
	</div>
	<!-- footer-section-starts -->
	<div class="footer">
<!--
		<div class="top-footer">
			<div class="col-md-8 top-footer-left-grid">
					<div class="latest-tweets">
						<h4>Latest Tweets</h4>
						<div class="icon-3-square">
							<i class="square-3"></i>
						</div>
						<div class="icon-text">
							<p><span>about 16 hours ago</span> we replied to @<a href="#">daiburchell</a> Donec malesuada vel nulla in vehicula. Quisque facilisis nibh sagittis vestibulum dignissim</p>
						</div>
						<div class="clearfix"></div>
						<div class="icon-3-square">
							<i class="square-3"></i>
						</div>
						<div class="icon-text">
							<p><span>about 16 hours ago</span> we replied to @<a href="#">hugobrien</a> Donec malesuada vel nulla in vehicula. Quisque facilisis nibh sagittis vestibulum dignissim</p>
						</div>
						<div class="clearfix"></div>
						<div class="icon-3-square">
							<i class="square-3"></i>
						</div>
						<div class="icon-text">
							<p><span>about 16 hours ago</span> we replied to @<a href="#">danwright</a> Hello Donec malesuada vel nulla in vehicula. Quisque facilisis nibh sagittis vestibulum dignissim</p>
						</div>
						<div class="clearfix"></div>
			        </div>
					<div class="flickr">
					    <h4>Flickr Photostream</h4>
						<ul>
							<li><img src="images/1.jpg" style="width:1%;height:1%"></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<div class="clearfix"></div>
			</div>
			<div class="col-md-4 top-footer-right-grid">
				<h4>NEWSLETTER signup</h4>
				<p>Sign up for our newsletter and for daily updates!</p>
				<input type="text" class="text" value="Your name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your name';}">
				<input type="text" class="text" value="Your Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email Address';}">
				<input type="button" value="subscribe">
			</div>
			<div class="clearfix"></div>
		</div>
-->
		<div class="bottom-footer">
			<div class="col-md-8 copy-rights">
				<p>Copyright &copy; 2015  <a href="#">ASME INDIA
				</a></p>
				<p>
				Developed By: <a href="https://www.facebook.com/devmukul44" target="_blank">Mukul Dev</a> , <a href="https://www.facebook.com/gupta.himanshu19" target="_blank">Himanshu Gupta
				</p>
			</div>
			<div class="col-md-4 fax">
					<div class="social-icons">
						<a href="https://www.facebook.com/AsmeVit" target="_blank"><i class="facebook"></i></a>
						<a href="https://twitter.com/ASMEVIT" target="_blank"><i class="twitter"></i></a>
						<a href="#"><i class="dribble"></i></a>
						<a href="#"><i class="pinterest"></i></a>
						<a href="#"><i class="feed"></i></a>
						</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- footer-section-ends -->
</body>
</html>