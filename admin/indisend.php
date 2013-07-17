<?php
include "../connect/connects.php";
if(empty($_POST['listnum'])==true)
	die("<center><span class='label label-info'>Please enter atleast one number & message</span></center>");
$num = $_POST['listnum'];
$msg = $_POST['prsnlmsg'];
$msg1 = "". $msg . "";
$mob = explode(",",$num);
$cont = count($mob);

$mobile = 0;
for($i=0; $i<$cont; $i++)
{
	$temp = $mob[$i];
	$msg_query = mysql_query("SELECT `stu_mob` from stdet WHERE `stu_roll` = '$temp'");
	$fetch = mysql_fetch_array($msg_query);
	$mobile .=$fetch['stu_mob'].",";
}
$mobres = substr($mobile,$i,-1);
echo "<center><h3>Total number of selected students is: ".$i."</h3>";
$ch = curl_init();
		$user="ravi-tej@live.com:diwakar007";
		$receipientno=$mobres; 
		$senderID="TEST SMS"; 
		$msgtxt=$msg1."%0a~RGMERP"; 
		curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt&state=1");
		$buffer = curl_exec($ch);
		$datetoday = date("d-M-Y");
		if(empty ($buffer))
		{ 
			echo "<center><span class='label label-important'>SORRY YOUR MESSAGE COULD NOT BE SENT</span></center>";
		 }
		else
		{ 	
			echo "<center><span class='label label-success'>Message successfully sent to ".$i." Students</span></center>";
			
		 } 
		curl_close($ch);
		?>