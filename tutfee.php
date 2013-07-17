<?php session_start();
include "connect/connects.php";
if(!isset($_POST['submit']))
{
	die("You have no Access to this page any longer");
}
else
{
	$roll = $_POST['roll'];
	$tfee = $_POST['tfee'];
	$table = "stdet";
	mysql_query("update $table SET `tutionfee` = '$tfee' where `stu_roll` = '$roll'");
	$temp=mysql_query("select stu_name from stdet where `stu_roll` = '$roll'");
	$temp=mysql_fetch_assoc($temp);
	$_SESSION['uname']=$temp['stu_name'];
	header("location:add.php");

}
?>