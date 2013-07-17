<?php
include "connect/connects.php";
$roll= "09091a0563";
$day= "07";
$otp_rand = rand(111,999);
$otpprecced = substr($roll,-3,10);
$otpp = substr($roll,0,2);
$otp = "A".$otpp.$otp_rand.$otpprecced;
echo $otp;
?>
