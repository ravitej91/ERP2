<?php
	session_start();
	include "connect/connects.php";
	if(!isset($_SESSION['user_id']))
	{
		die("Login First to use this page <br/> <a href=index.php> LOGIN</a>");
	}
?>
