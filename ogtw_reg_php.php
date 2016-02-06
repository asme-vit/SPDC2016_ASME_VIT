<?php
session_start();
ob_start();
if($_SESSION["email"] == "")
{
	header("location:login.php?err=em");
}
?>
<?php

		include("connection.php");
				$topic=$_POST['topic'];
				$email=$_SESSION["email"];
                $col_nm=$_POST['colnm'];
                $sem=$_POST['sem'];
				$asme_id=$_POST['asmeid'];
				$amount=$_SESSION["cost"];
					
					$sql="Select * from details where email='$email'";
                    $res=mysqli_query($con,$sql);
                    $row1=mysqli_fetch_row($res);
                    $name = $row1[0]." ".$row1[1];

					$sql = "Select max(reference_number) from ogtw";
					$res = mysqli_query($con,$sql);
					$row = mysqli_fetch_row($res);
					$refno = $row[0] + 1;

                        $sql="INSERT INTO ogtw values('$email','$name','$col_nm','$sem','$asme_id','$refno','$amount')";
                        $res=mysqli_query($con,$sql);
					
                            //Payment gateway redirection
					header("location:main.php?err=done");
?>