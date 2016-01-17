<?php
include("connection.php");

$sql = "INSERT INTO query values('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')";

if (mysqli_query($con, $sql)) 
		{
$headers = "Content-Type: text/html; charset=UTF-8";
$from = $_POST["email"];
$to = "karanjdesai2013@gmail.com";
//$to = "mukuldev.vit@gmail.com";
$subject = "query form email "."From: ".$from;

$message ="First Name: ".$_POST["name"]."\n";
$message .="email: ".$_POST["email"]."\n";
$message .="subject: ".$_POST["subject"]."\n";
$message .="MESSAGE: ".$_POST["message"]."\n";

//echo $message;
mail($to,$subject,$message,$headers);
header("location:index.php?err=sent");
		}
else {
	header("location:abc.html");
	}
mysqli_close($con);
?>