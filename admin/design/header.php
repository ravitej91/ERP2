<?php
include "../connect/connects.php";
session_start();
unset($_SESSION['rc_id']);
if(!isset($_SESSION['user_id']))
{
	
	die("Login First to use this page <br/> <a href=index.php> LOGIN</a>");
	

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">        
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
	 <link type="text/css" rel="stylesheet" href="css/bootstrap-responsive.css">
<link type="text/css" rel="stylesheet" href="css/datepicker.css">

</head>
<body>
	<div class="navbar">
		<div class = "navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">Rgmcet ERP</a>
				<div class="nav-collapse collapse navbar-responsive-collapse">
					<ul class="nav">
						<li class="active"><a href="../home.php">Home</a></li>
						<li class="divider-vertical"></li>
						<li><a href="../add.php">Add Student</a></li>
						<li class="divider-vertical"></li>
						<li><a href="../editdet.php">Edit</a></li>
						<li class="divider-vertical"></li>
						<li><a href="../logout.php">Logout</a></li>
					</ul>
					<form class="navbar-search pull-right">
						<input type="text" class="search-query span2" placeholder="Search">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="conatiner-fluid">
		<div class="row-fluid">
			<div class="span3 well">
				<ul class="nav nav-list">
					 <li class="nav-header">REPORT</li>
					 <li class="active"><a href="index.php"><i class="icon-home icon-white"></i>Home</a></li>
						<li class="active" ><a href="dayoprtns.php"><i class="icon-list"></i>Day Transactions</a></li>
						<li><a href="add.php"><i class="icon-user"></i>Branch</a></li>
						<li><a href="edit.php"><i class="icon-pencil"></i>Check</a></li>
						<li><a href="logout.php"><i class="icon-lock"></i>Budget</a></li>
						<li class="divider"></li>
						<li class="nav-header">CAMPAIGN</li>
						<li><a href="edit.php"><i class="icon-pencil"></i>Intimation</a></li>
						<li><a href="edit.php"><i class="icon-pencil"></i>Sms to Student</a></li>
						<li><a href="#"><i class="icon-repeat"></i>Intimation Mail</a></li>
						<li><a href="edit.php"><i class="icon-pencil"></i>Sms Records</a></li>
						<li class="divider"></li>
						<li class="nav-header">SITE OPERATIONS</li>
						<li><a href="edit.php"><i class="icon-pencil"></i>OTP Check</a></li>
						<li><a href="edit.php"><i class="icon-pencil"></i>Student Status</a></li>
						<li><a href="edit.php"><i class="icon-pencil"></i>Recieved Payments</a></li>

					</ul>
			</div>
			<div class="span9 well well-large">