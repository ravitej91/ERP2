<?php
include "../connect/connects.php";
session_start();
unset($_SESSION['rc_id']);
if($_SESSION['user_id'] !=1)
{
	die("You have no privilleges to access this page<br/> <a href=../index.php> Home</a>");
}
if(!isset($_SESSION['user_id']))
{
	
	die("Login First to use this page <br/> <a href=../index.php> LOGIN</a>");
	

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
if(isset($_REQUEST['upjfee']))
{
	$jfee = $_REQUEST['jfees'];
	mysql_query("UPDATE def SET `jfee` = '$jfee' WHERE `id` = 1");
	echo "<div class='alert alert-success'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong>JNTU FEE Updated succesfully....</strong> </div>";
}
if(isset($_REQUEST['uppfee']))
{
	$pfee = $_REQUEST['pfees'];
	mysql_query("UPDATE def SET `pfee` = '$pfee' WHERE `id` = 1");
	echo "<div class='alert alert-success'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong>PLACEMENT FEE Updated succesfully....</strong> </div>";
}
if(isset($_REQUEST['upbfeen']))
{
	$bfeen = $_REQUEST['bfeesn'];
	mysql_query("UPDATE def SET `bfeen` = '$bfeen' WHERE `id` = 1");
	echo "<div class='alert alert-success'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Bus Fee for Nandyal Updated succesfully....</strong> </div>";
}
if(isset($_REQUEST['upbfeek']))
{
	$bfeek = $_REQUEST['bfeesk'];
	mysql_query("UPDATE def SET `bfeek` = '$bfeek' WHERE `id` = 1");
	echo "<div class='alert alert-success'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Bus Fee for Kurnool Updated succesfully....</strong> </div>";
}




?>


	<div class="conatiner-fluid">
		<div class="row-fluid">
			<div class="span3 well">
				<ul class="nav nav-list">
					 <li class="nav-header">REPORT</li>
					 <li ><a href="index.php"><i class="icon-home"></i>Home</a></li>
						<li ><a href="dayoprtns.php"><i class="icon-list"></i>Transactions</a></li>
						<li><a href="branchdet.php"><i class="icon-search"></i>By Branch</a></li>
						<li><a href="stuacc.php"><i class="icon-user"></i>Student Account</a></li>
						<li class="divider"></li>
						<li class="nav-header">CAMPAIGN</li>
						<li><a href="inti.php"><i class="icon-bullhorn"></i>Intimation</a></li>
						<li class="divider"></li>
						<li class="nav-header">SETTINGS</li>
						<li class="active"><a href="chngfee.php"><i class="icon-random"></i>Change fee structure</a></li>
						<li><a href="xclup.php"><i class="icon-upload"></i>Upload with Excel</a></li>
						<li><a href="useraccnt.php"><i class="icon-globe"></i>User Accounts</a></li>
						<li class="divider"></li>
						<li class="nav-header">SITE OPERATIONS</li>
						<li><a href="edit.php"><i class="icon-pencil"></i>OTP Check</a></li>
						<li><a href="edit.php"><i class="icon-pencil"></i>Student Status</a></li>
						<li><a href="edit.php"><i class="icon-pencil"></i>Recieved Payments</a></li>

					</ul>
			</div>
			<?php
				$fee_query = mysql_query("SELECT * from def WHERE `id` = 1");
				$fee = mysql_fetch_array($fee_query);
			?>
			<div class="span9 well well-large">
			<div> 
			<h3><u>Change Fee Structure</u></h3>
			<p class="lead">Change the default Fee values of </p>
			<ul>
				<li><b>JNTU</b></li>
				<li><b>PLACEMENT</b></li>
				<li><b>BUS</b></li>
			</ul>
		</div>
		<div class="well">
			<h4><u>Update Fee</u></h4>
			<div class="row-fluid">
				<div class="span4">
			<table class="table table-bordered">
				<tr>
				<thead>
					<th><center><b><p class="text-info">JNTU</b></center></th>
				</thead>
			</tr>
			<tr  class="info">
				<td><center><b><img src="../images/rupees.png">. <?php echo $fee['jfee'];?></b></center></td>
			</tr>
			<tr  class="success">
				<td><center><form method=post><input type=text name="jfees" required="required" placeholder="Enter New Fee..."><br/>
					<input type=submit value="Update" name="upjfee" class="btn btn-primary"></center></form></td>

			</tr>
			</table>
		</div>
		<div class="span4">
			<table class="table table-bordered">
				<tr>
				<thead>
					<th rowspan="2"><center><b><p class="text-info">PLACEMENT</b></center></th>
				</thead>
			</tr>
			<tr class="info">
				<td><center><b><img src="../images/rupees.png">. <?php echo $fee['pfee'];?></b></center></td>
			</tr>
			<tr class="success">
				<td><center><form method=post><input type=text name="pfees" required="required" placeholder="Enter New Fee..."><br/>
					<input type=submit value="Update" name="uppfee" class="btn btn-primary"></center></form></td>
			</tr>
			</table>
		</div>
		<div class="span4">
			<table class="table table-bordered">
				<tr>
				<thead>
					<th colspan="2"><center><b><p class="text-info">BUS</b></center></th>
									</thead>
			</tr>
			<tr>
				<th><center>Nandyal</center></th>
					<th><center>Kurnool</center></th>

			</tr>
			<tr class="info">
				<td><center><b><img src="../images/rupees.png">. <?php echo $fee['bfeen'];?></b></center></td>
				<td><center><b><img src="../images/rupees.png">. <?php echo $fee['bfeek'];?></b></center></td>

			</tr>
			<tr class="success">
				<td><center><b><center><form method=post><input type=text class="input-mini" name="bfeesn" required="required" placeholder="Enter New Fee..."><br/>
					<input type=submit value="Update" name="upbfeen" class="btn btn-primary btn-small"></form></center></td>
				<td><center><form method=post><input type=text class="input-mini"  name="bfeesk" required="required" placeholder="Enter New Fee..."><br/>
					<input type=submit value="Update" name="upbfeek" class="btn btn-primary btn-small"></form></center></td>

			</tr>
			</table>
		</div>

			</div>

		</div>
		






				</div>
</div>
	
	</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
$('#tip').popover(data-trigger="hover" data-title="Hello")
</script>
</body>
</html>