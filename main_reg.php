<?php
session_start();
?>

<?php

$ticket = $_POST['ticket'];
$comp = $_POST['comp'];

if($ticket == 1)
{
	$cost = 700;
}
else if($ticket == 2)
{
	$cost = 1700;
}
else if($ticket == 3)
{
	$cost = 1000;
}
else if($ticket == 4)
{
	$cost = 2000;
}
else if($ticket == 5)
{
	$cost = 1200;
}
else if($ticket == 6)
{
	$cost = 2200;
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


if($comp == 1)
{
	header("location:sdc.html");
}
else if($comp == 2)
{
	header("location:ogop.html");
}
else if($comp == 3)
{
	header("location:ogtw.html");
}
else if($comp == 4)
{
	header("location:ogtp.html");
}
else if($comp == 5)
{
	header("location:ogvp.html");
}

?>