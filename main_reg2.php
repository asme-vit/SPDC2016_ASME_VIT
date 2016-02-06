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

$ticket = $_POST['ticket'];

if($ticket == 1)
{
	$cost = 700;
}
else if($ticket == 2)
{
	$cost = 1750;
}
else if($ticket == 3)
{
	$cost = 1000;
}
else if($ticket == 4)
{
	$cost = 2050;
}
else if($ticket == 5)
{
	$cost = 1200;
}
else if($ticket == 6)
{
	$cost = 2250;
}
else if($ticket == 7)
{
	$cost = 500;
}
else if($ticket == 8)
{
	$cost = 550;
}
else if($ticket == 9)
{
	$cost = 800;
}

$_SESSION["cost"] = $cost;

?>
<?php

		include("connection.php");
				$email=$_SESSION["email"];
				$amount=$cost;
					
					$sql="Select * from details where email='$email'";
                    $res=mysqli_query($con,$sql);
                    $row1=mysqli_fetch_row($res);
                    $name = $row1[0]." ".$row1[1];

					$sql = "Select max(reference_number) from pre_payment";
					$res = mysqli_query($con,$sql);
					$row = mysqli_fetch_row($res);
					$refno = $row[0] + 1;

                        $sql="INSERT INTO pre_payment values('$email','$name','$refno','$amount')";
                        $res=mysqli_query($con,$sql);
					
                            //Payment gateway redirection
                            $tran= "SPDC".$refno;
                            //echo $tran;
							//echo $name;
							echo '<form id="payment" method="POST" action="https://academics.vit.ac.in/online_application2/onlinepayment/Online_pay_request1.asp">';
                            echo'<input type="hidden" name="id_trans" value="'.$tran.'">
                            <input type="hidden" name="id_name" value="'.$name.'">
                            <input type="hidden" name="id_event" value="12">
                            <input type="hidden" name="amt_event" value="'.$amount.'">
                            <input type="hidden" name="id_merchant" value="1011">
                            <input type="hidden" name="id_password" value="stpdC1620@a12">';
                            echo '</form>'; 

			
?>
<html>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
    
    $(document).ready(function(){
         $("#payment").submit();
    });
</script>
</html>