<?php
session_start();
ob_start();
?>

<?php

//$ticket = $_POST['ticket'];
$comp = $_POST['comp'];
/*
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

$_SESSION["cost"] = $cost;
*/
$_SESSION["cost"] = 0;
if($comp == 1)
{
	header("location:sdc_reg.php");
}
else if($comp == 2)
{
	header("location:ogop_reg.php");
}
else if($comp == 3)
{
	header("location:ogtw_reg.php");
}
else if($comp == 4)
{
	header("location:ogtp_reg.php");
}
else if($comp == 5)
{
	header("location:ogvp_reg.php");
}

?>