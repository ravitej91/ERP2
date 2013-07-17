<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	
	die("Login First to use this page <br/> <a href=index.php> LOGIN</a>");
	

}
include "connect/connects.php";
$stu_roll=$_POST['stu_roll'];
$table= "stdet";
$stu_name = $_POST['stu_name'];
$stu_email = $_POST['stu_email'];
$stu_father = $_POST['stu_father'];
$stu_branch = $_POST['stu_branch'];
$surname = $_POST['surname'];
$tutionfee = $_POST['tutionfee'];
$stu_mob = $_POST['stu_mob'];
mysql_query("UPDATE $table SET `surname`='$surname',`stu_name`='$stu_name',`stu_father`='$stu_father',`stu_mob`='$stu_mob',`stu_branch`='$stu_branch',`stu_email`='$stu_email',`tutionfee`='$tutionfee' where `stu_roll`= '$stu_roll'");
header('location:home.php');

?>

