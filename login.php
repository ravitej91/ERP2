<?php
include "connect/connects.php";
function senitize($data){
return mysql_real_escape_string($data);
}
function user_id_from_username($username)
{
$username = senitize($username);
return mysql_result(mysql_query("SELECT `user_id` FROM `users` WHERE `username` = '$username'"), 0, 'user_id');

}
function user_active($username)
{
  $username = senitize($username);
  return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `active` = 1 " ), 0) == 1) ? true : false;
}
function user_exists($username)
{
  $username = senitize($username);
  return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username'" ), 0) == 1) ? true : false;
}

function login($uname, $pass)
{
  $user_id = user_id_from_username($uname);
  $username = senitize($uname);
  $pass = md5($pass);
  return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$uname'  AND `password` = '$pass'"), 0) == 1) ? $user_id : false;

}
$msg= null;
if (empty($_POST) === false)
{
  $uname=$_POST['uname'];
  $pass=$_POST['pass'];
  if(empty($uname) === true) 
  {
    $msg= "Username field should not be empty";
  }
  if(empty($pass) === true) 
  {
	  $msg= "Password field should not be empty";
  }
  else
  {

   	if(user_exists($uname) === false) 
  	{
    	$msg="we cant find data" ;
  	}
  	else if(user_active($uname) === false) 
  {
   $msg ="Your account has been disabled by admin" ;
  }
  	else
  	{
	  $log = login($uname,$pass);
	  if($log === false)
	  {
	  	$msg= "Password Not Matched";
		 // echo "Logged in Successfully";
		 
	  }
	  else
	  {
	  	 $_SESSION['user_id'] = $log;
	      header('Location: home.php');
          exit();
		  
	  }
	}
	  
  }
}

?>
