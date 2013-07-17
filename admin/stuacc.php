<?php
include "../connect/connects.php";
session_start();
unset($_SESSION['rc_id']);
if($_SESSION['user_id'] !=1)
{
	die("You have no privilleges to access this page<br/> <a href=index.php> Home</a>");
}
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
						<li><a href="../home.php">Home</a></li>
						<li class="divider-vertical"></li>
						<li><a href="../add.php">Add Student</a></li>
						<li class="divider-vertical"></li>
						<li><a href="../editdet.php">Edit</a></li>
						<li class="divider-vertical"></li>
						</ul>
						
<div class="btn-group  pull-right ">
  <a class="btn btn-small btn-primary" href="#"><i class="icon-user icon-white"></i> Admin</a>
  <a class="btn btn-small btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
  <ul class="dropdown-menu">
  	 <li><a href="#chngModal" class="data-toggle" data-toggle="modal"><i class="icon-edit"></i> Change Password</a></li>
    <li><a href="#myModal" class="data-toggle" data-toggle="modal"><i class="icon-cog"></i> DB Operations</a></li>
    <li class="divider"></li>
    <li><a href="../logout.php"><i class="icon-off"></i> Logout</a></li>
  </ul>
</div>
					
					
				</div>
			</div>
		</div>
	</div>
	<?php
include "includes/dbmodal.php";
include "includes/chngpass.php";
?>

	<div class="conatiner-fluid">
		<div class="row-fluid">
			<div class="span3 well">
				<ul class="nav nav-list">
					 <li class="nav-header">REPORT</li>
					 <li ><a href="index.php"><i class="icon-home"></i>Home</a></li>
						<li ><a href="dayoprtns.php"><i class="icon-list"></i>Transactions</a></li>
						<li  ><a href="branchdet.php"><i class="icon-search"></i>By Branch</a></li>
						<li class="active"><a href="stuacc.php"><i class="icon-user"></i>Student Account</a></li>
						<li class="divider"></li>
						<li class="nav-header">CAMPAIGN</li>
						<li><a href="inti.php"><i class="icon-bullhorn"></i>Intimation</a></li>
						<li class="divider"></li>
						<li class="nav-header">SETTINGS</li>
						<li><a href="chngfee.php"><i class="icon-random"></i>Change fee structure</a></li>
						<li><a href="xclup.php"><i class="icon-upload"></i>Upload with Excel</a></li>
						<li><a href="useraccnt.php"><i class="icon-globe"></i>User Accounts</a></li>
						<li class="divider"></li>
						<li class="nav-header">SITE OPERATIONS</li>
						<li><a href="edit.php"><i class="icon-pencil"></i>OTP Check</a></li>
						<li><a href="edit.php"><i class="icon-pencil"></i>Student Status</a></li>
						<li><a href="edit.php"><i class="icon-pencil"></i>Recieved Payments</a></li>

					</ul>
			</div>
			<div class="span9 well well-large">
				<p class="lead"> Give Student Roll Number below to get complete details</p>
				<form name="stful" method=post>
  					
    				<legend>Full Details of Student</legend>
    				<label>Enter Roll Number:</label>
    				<div class="input-append">
    				<input type="text" placeholder="09091a0XXX" name="rollnum">
    				<button type="button" class="btn" id="getdet">Submit</button>
    			</div>
  					
				</form>
				<div id="main1">
				



				</div>
				<div>
					<?php

if(isset($_REQUEST['sub']))
{
	$roll = $_REQUEST['roll'];
	mysql_query("DELETE FROM stdet WHERE `stu_roll` = '$roll'");
	mysql_query("DELETE FROM stud1 WHERE `stu_roll` = '$roll'");	
	mysql_query("DELETE FROM stud2 WHERE `stu_roll` = '$roll'");
	mysql_query("DELETE FROM stud3 WHERE `stu_roll` = '$roll'");
	mysql_query("DELETE FROM stud4 WHERE `stu_roll` = '$roll'");
	mysql_query("DELETE FROM receipt WHERE `stu_roll` = '$roll'");
	mysql_query("DELETE FROM smsfee WHERE `stu_roll` = '$roll'");
	mysql_query("DELETE FROM smsstatus WHERE `stu_roll` = '$roll'");
	echo "<div class='alert alert-success'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Student details has been succesfully Deleted</strong> </div>";

}
?>





				</div>















			</div>
		</div>
	</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script>
$('#main1').load('frstres.php');
		$('#getdet').click(function() { 
			$.post('frstres.php', { rollnum: stful.rollnum.value },
			function(result){
				$('#main1').html(result).show(); 
			}); 
		});

	</script>
</body>
</html>
