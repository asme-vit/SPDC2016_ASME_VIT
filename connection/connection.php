<?php
$user="vitspdcvit";
$pass="devmukul44";
$db="spdc2016";
$con=mysqli_connect("localhost",$user,$pass) or die("Cannot connect to host");
mysqli_select_db($con,$db) or die("Cannot select db");
?>