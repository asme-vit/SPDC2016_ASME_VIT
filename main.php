<!DOCTYPE html>
<?php
session_start();
if($_SESSION["email"] == "")
{
	header("location:login.php?err=em");
}
?>
<?php
if(isset($_GET['err'])){
    if ($_GET['err']=="em") {
        echo '<script>
            alert("your email is nither in vehicle nor in participant registration!");
        </script>';
    }
}
if(isset($_GET['err'])){
    if ($_GET['err']=="survey") {
        echo '<script>
            alert("ThankYou for your Time!");
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
<meta name="viewport" content="width=device-width, initial-scale=1">
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
						<li><a href="index.php">HOME</a></li>
						<li><a href="index.php#portfolio">Student Design Competition</a></li>
						<li><a href="index.php#portfolio">Old Guard Competitions</a></li>
						<li><a href="index.php#contact-section">CONTACT US</a></li>
						<li><a href="login.php">REGISTER</a></li>
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
      <a class="navbar-brand" href="#">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Dashboard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span style="color:red;">HELLO</span> &nbsp &nbsp <?php echo $_SESSION["email"];?></a></li>
		<li><a href="#">view profile</a></li>
        <li><a href="logout_php.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
    <!-- header-section-ends --> 
	<br>
	<div class="container">
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
		<form role="form" action="main_reg.php" method="post">
			<div class="form-group">
                    <label for="InputName">Select the ticket type</label>
                    <div class="input-group">
                        <select class="form-control" name="ticket" id="InputName" required>
						<option value="1"> 1)	Early Bird - ASME Member </option>
						<option value="2" disabled> 2)	Early Bird - Non ASME Member </option>
						<option value="3"> 3)	Regular - ASME Member </option>
						<option value="4" disabled> 4)	Regular - Non ASME Member </option>
						<option value="5"> 5)	Last Chance - ASME Member </option>
						<option value="6" disabled> 6)	Last Chance - Non ASME Member </option>
						<option value="7" disabled> 7)	HPVC Participant - SPDC Seminars and Banquet </option>
						<option value="8" disabled> 8)	SPDC seminars and banquet only </option>
						</select>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
             </div>
			<div class="form-group">
                    <label for="InputName">Select Competition<span style="color:red;" class="glyphicon glyphicon-asterisk"></span></label>
                    <div class="input-group">
					<input type="radio" name="comp" value="1" checked> <label for="InputName">&nbsp;&nbsp;&nbsp;1)	Student Design Competition</label><br>
					<input type="radio" name="comp" value="2"> <label for="InputName">&nbsp;&nbsp;&nbsp;2)	Old Guard Oral Presentation Competition</label><br>
					<input type="radio" name="comp" value="3"> <label for="InputName">&nbsp;&nbsp;&nbsp;3)	Old Guard Technical Webpage Presentation Competition</label><br>
					<input type="radio" name="comp" value="4"> <label for="InputName">&nbsp;&nbsp;&nbsp;4)	Old Guard Technical Poster Presentation Competition</label><br>
					<input type="radio" name="comp" value="5"> <label for="InputName">&nbsp;&nbsp;&nbsp;5)	Old Guard Video Presentation Competition</label><br>
					</div>
             </div>
             <input type="submit" name="submit" id="submit" value="REGISTER" class="btn btn-primary btn-block">
			 <br>
			 <br>
		</form>
	</div>

</body>
</html>