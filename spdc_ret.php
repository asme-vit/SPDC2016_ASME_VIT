<?php
//	if($_SERVER["REQUEST_METHOD"] !== "POST"){
//		header("Location: http://hpvcindia.in");
//	}
	?>
	
<?php
session_start();
ob_start();
?>
<?php
if($_SESSION["email"] == "")
{
	header("location:login.php?err=em");
}
?>
<?php	
	include("connection.php");
	$refno=$_POST['Refno'];
    $tid=$_POST['tpsltranid'];
    $brefno = $_POST['bankrefno'];
    $txndate=$_POST['txndate'];
    $status = $_POST['status'];
	$login=substr($refno,4,4);
?>

<html>
<head>
<title>SPDC | Registration</title>
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
						<li><a href="index.php">HOME</a></li>
						<li><a href="index.php#portfolio">Student Design Competition</a></li>
						<li><a href="index.php#portfolio">Old Guard Competitions</a></li>
						<li><a href="index.php#contact-section">CONTACT US</a></li>
						<li><a href="main.php">REGISTER</a></li>
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
      <a class="navbar-brand" href="main.php">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Dashboard</a>
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
<div class="container">

				<div class="row sidebar-page" style="margin-top:140px;">
                                        
                    <!-- Page Content -->
					<div class="page-content">
                    <center>
                        <h3>

                        	<?php
                            

                        	if($status=="0300"){
								/*
								if($login<2000) //vehicle
								{
								$sql65="SELECT * from sdc WHERE reference_number=".$login;
                                $res=mysqli_query($con,$sql65);
                                $numb=mysqli_num_rows($res);
								$row=mysqli_fetch_array($res);
								
                                $team_nm=$row['team_name'];
                                $name=$row['name'];
                                $col_nm=$row['college_name'];
                                $asme_id=$row['asme_id'];
                                $email=$row['email'];
								$amount=$row['amount'];
								}
								else if($login < 3000)  //participant
								{
								$sql65="SELECT * from ogop WHERE reference_number=".$login;
                                $res=mysqli_query($con,$sql65);
                                $numb=mysqli_num_rows($res);
								$row=mysqli_fetch_array($res);
								
                                $team_nm= "nan";
                                $name=$row['name'];
                                $col_nm=$row['college_name'];
                                $asme_id=$row['asme_id'];
                                $email=$row['email'];
								$amount=$row['amount'];
								}
								else if($login < 4000)  //food
								{
								$sql65="SELECT * from ogtw WHERE reference_number=".$login;
                                $res=mysqli_query($con,$sql65);
                                $numb=mysqli_num_rows($res);
								$row=mysqli_fetch_array($res);
								
                                $team_nm= "nan";
                                $name=$row['name'];
                                $col_nm=$row['college_name'];
                                $asme_id=$row['asme_id'];
                                $email=$row['email'];
								$amount=$row['amount'];
								}
								else if($login < 5000)  //participant
								{
								$sql65="SELECT * from ogtp WHERE reference_number=".$login;
                                $res=mysqli_query($con,$sql65);
                                $numb=mysqli_num_rows($res);
								$row=mysqli_fetch_array($res);
								
                                $team_nm= "nan";
                                $name=$row['name'];
                                $col_nm=$row['college_name'];
                                $asme_id=$row['asme_id'];
                                $email=$row['email'];
								$amount=$row['amount'];
								}
								else if($login < 6000)  //participant
								{
								$sql65="SELECT * from ogvp WHERE reference_number=".$login;
                                $res=mysqli_query($con,$sql65);
                                $numb=mysqli_num_rows($res);
								$row=mysqli_fetch_array($res);
								
                                $team_nm= "nan";
                                $name=$row['name'];
                                $col_nm=$row['college_name'];
                                $asme_id=$row['asme_id'];
                                $email=$row['email'];
								$amount=$row['amount'];
								}
								
                                if($numb==0){
                                    header("Location: http://vitspdc.com/main.php");  
                                }
								else
								{
    				            $sql="INSERT into yes_payment values('".$refno."','".$email."', '".$tid."', '".$brefno."', '".$status."','".$amount."', '".$txndate."', '".$login."');";
    				            $res=mysqli_query($con,$sql);
								}
    				            if(!$res){
    				            	echo mysqli_error($con);
    				            }
								
								*/
								
								$sql65="SELECT * from pre_payment WHERE reference_number=".$login;
                                $res=mysqli_query($con,$sql65);
                                $numb=mysqli_num_rows($res);
								$row=mysqli_fetch_array($res);
								
                                $team_nm="NAN";
                                $name=$row['name'];
                                $col_nm="NAN";
                                $asme_id="NAN";
                                $email=$row['email'];
								$amount=$row['amount'];
								
								if($numb==0){
                                    header("Location: http://vitspdc.com/main.php");  
                                }
								else
								{
    				            $sql="INSERT into yes_payment values('".$refno."','".$email."', '".$tid."', '".$brefno."', '".$status."','".$amount."', '".$txndate."', '".$login."');";
    				            $res=mysqli_query($con,$sql);
								}
    				            if(!$res){
    				            	echo mysqli_error($con);
    				            }
								
                                echo '<div id="printbody">';
                                
                                echo '<img src="images/vit.png" style="width:150px; padding-right:60px"><img src="images/asme1.png" style="width:150px;padding-left:60px;">';
                                echo'<center><br><br><br>Congratulations <span style="color:#f16261;">'.$name.'</span>, your payment is Succesfull.<br>we have mailed you your transection details!';
                                 echo' <table>
                                <tr>';
								
                                echo '<br><tr><td>Reference No </td><td>: <span style="color:#f16261;">'.$refno.'</span></td></tr>';
                                echo'<br><tr><td>Transaction ID  </td><td>: <span style="color:#f16261;">'.$tid.'</span></td></tr>';
                                echo'<br><tr><td>Amount  </td><td>: <span style="color:#f16261;">'.$amount.'</span></td></tr>';
								echo'<br><tr><td>email  </td><td>: <span style="color:#f16261;">'.$email.'</span></td></tr>';
                                //echo'<br><tr><td>Bank Reference Number  </td><td>: <span style="color:#f16261;">'.$brefno.'</span></td></tr>';
                                echo'<br><tr><td>Transaction date  </td><td>: <span style="color:#f16261;">'.$txndate.'</span></td></tr></table>';
                                echo ' </center></div><br>';
                                echo '<br><button class="btn btn-info drop_but" id="btnPrint">Print Receipt</button>';
								echo '<br><br><br><br>';
                               
							   
                                //email Invoice
                                
                                $to = $email; 
                				$from = "contact@vitspdc.com";
                				$subject = " SPDC 2016 - Registration "; 
                				$message = "<p>Congatulations your payment is Succesfull.</p><p>Find the attachment for Invoice</p>";

                                require("fpdf/fpdf.php");

                				$pdf = new FPDF();
                				
                				$pdf->AddPage();
                				$pdf->SetFont("Arial","B",11);
                				//$pdf->Image('img/header.jpg',10,null,190,0);
                				$pdf->Ln();
                				$pdf->Ln();
                				$pdf->Ln();
                				$pdf->Cell(40,10, "Congratulations",0,0,"");
                				$pdf->SetTextColor(241,98,97);
                				$pdf->Cell(0,10, $name ,0,1,"");
                				$pdf->SetTextColor(241,98,97);
                				$pdf->SetFont("Arial","B",14);
                				$pdf->Cell(0,10, "Your Payment is Succesfull.",0,1,"");
                				$pdf->SetFont("Arial","B",11);
                				$pdf->SetTextColor(0,0,0);
                				$pdf->Cell(50,10, "Reference No:",0,0,"");
                				$pdf->SetTextColor(241,98,97);
                				$pdf->Cell(0,10, $refno ,0,1,"");
                				$pdf->SetTextColor(0,0,0);
                				$pdf->Cell(50,10, "Transaction ID:",0,0,"");
                				$pdf->SetTextColor(241,98,97);
                				$pdf->Cell(0,10, $tid,0,1,"");
                				$pdf->SetTextColor(0,0,0);
                				$pdf->Cell(50,10, "Amount:",0,0,"");
                				$pdf->SetTextColor(241,98,97);
                				$pdf->Cell(0,10, $amount,0,1,"");

                				$pdf->SetTextColor(0,0,0);
                				$pdf->Cell(50,10, "Transaction date :",0,0,"");
                				$pdf->SetTextColor(241,98,97);
                				$pdf->Cell(0,10, $txndate,0,1,"");
                				$pdf->SetTextColor(241,98,97);
                				$pdf->Cell(50,10,"Amount once paid is not Refundable.",0,1,"");
                				
                				
                				$separator = md5(time());
                				
                				$eol = PHP_EOL;
                				
                				$filename = "SPDC2016_Invoice.pdf";
                				
                				$pdfdoc = $pdf->Output("", "S");
                				$attachment = chunk_split(base64_encode($pdfdoc));
                				
                				
                				$headers  = "From: ".$from.$eol;
                				$headers .= "MIME-Version: 1.0".$eol; 
                				$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"".$eol.$eol; 
                				$headers .= "Content-Transfer-Encoding: 7bit".$eol;
                				$headers .= "This is a MIME encoded message.".$eol.$eol;
                				
                				$headers .= "--".$separator.$eol;
                				$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
                				$headers .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
                				$headers .= $message.$eol.$eol;
                				
                				$headers .= "--".$separator.$eol;
                				$headers .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
                				$headers .= "Content-Transfer-Encoding: base64".$eol;
                				$headers .= "Content-Disposition: attachment".$eol.$eol;
                				$headers .= $attachment.$eol.$eol;
                				$headers .= "--".$separator."--";
                				
                				mail($to, $subject, "", $headers);

                            }
                       		else if($status=="0399")
							{
								
                       		   echo'Payment Failed!<br>Please try again after some time or choose a different payment method'; 
							   echo '<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>';
                       		}

                       		else
							{
                       		   echo'Payment Failed!<br>Please try again after some time or choose a different payment method';
							   echo '<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>';
                       		}
                            ?>
                        </h3>
                    </center>
                    	

					</div>
                    <!-- End Page Content-->
                    
                    
				</div>
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
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#printbody").html();
            var printWindow = window.open('', '', '');
            printWindow.document.write('<html><head><title>HPVC2016</title>');
            printWindow.document.write('</head><body style="padding-top:50px;"><center>');
            printWindow.document.write(divContents);
            printWindow.document.write('</center></body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
</body>
</html>