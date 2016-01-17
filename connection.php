<?php
$user="root";
$pass="";
$db="spdc";
$con=mysqli_connect("localhost",$user,$pass) or die("Cannot connect to host");
mysqli_select_db($con,$db) or die("Cannot select db");
?>