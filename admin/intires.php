<?php
include "../connect/connects.php";
if(empty($_POST['message'])==true)
	die("<center><span class='label label-info'>Please enter some message to proceed</span></center>");
$msg = $_POST['message'];
$batch = $_POST['batch'];
$accyr = $_POST['accyr'];
$msg1 = "". $msg . "";
$branch = $_POST['branch'];
//echo $msg1;

if($accyr === "First Year")
{
	$table = "stud1";
	if($branch === "All")
	$msg_query = mysql_query("SELECT `stu_roll` from $table where `batch` = '$batch'");
	else
	$msg_query = mysql_query("SELECT `stu_roll` from $table where `batch` = '$batch' and `branch` = '$branch'");
}
else if($accyr === "Second Year")
{
	$table = "stud2";
	if($branch === "All")
	$msg_query = mysql_query("SELECT `stu_roll` from $table where `batch` = '$batch'");
	else
	$msg_query = mysql_query("SELECT `stu_roll` from $table where `batch` = '$batch' and `branch` = '$branch'");
}
else if($accyr === "Third Year")
{
	$table = "stud3";
	if($branch === "All")
	$msg_query = mysql_query("SELECT `stu_roll` from $table where `batch` = '$batch'");
	else
	$msg_query = mysql_query("SELECT `stu_roll` from $table where `batch` = '$batch' and `branch` = '$branch'");
}
else if($accyr === "Final Year")
{
	$table = "stud4";
	if($branch === "All")
	$msg_query = mysql_query("SELECT `stu_roll` from $table where `batch` = '$batch'");
	else
	$msg_query = mysql_query("SELECT `stu_roll` from $table where `batch` = '$batch' and `branch` = '$branch'");
}
else
{	
	if($branch === "All")
	$msg_query = mysql_query("SELECT `stu_roll` from stdet where `batch` = '$batch'");
	else
	$msg_query = mysql_query("SELECT `stu_roll` from stdet where `batch` = '$batch' and `branch` = '$branch' ");
		

}
$i=0;
$num = 0;
while($msg = mysql_fetch_array($msg_query))
{
	$number = $msg['stu_roll'];
	$roll_query  = mysql_query("SELECT `stu_mob` from stdet where `stu_roll` = '$number'");
	$roll = mysql_fetch_array($roll_query);
	$i++;
	$num .=$roll['stu_mob'].",";
}
$numres = substr($num,$i,-1);
echo "<center><h3>Total number of selected students is: ".$i."</h3>";
$ch = curl_init();
		$user="ravi-tej@live.com:diwakar007";
		$receipientno=$num; 
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
		//echo $numres;
?>
