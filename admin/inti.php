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
						<li><a href="branchdet.php"><i class="icon-search"></i>By Branch</a></li>
						<li><a href="stuacc.php"><i class="icon-user"></i>Student Account</a></li>
						<li class="divider"></li>
						<li class="nav-header">CAMPAIGN</li>
						<li class="active"><a href="inti.php"><i class="icon-bullhorn"></i>Intimation</a></li>
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
			<ul class= "nav nav-tabs">
			<li class = "active"><a href="#tab1" data-toggle = "tab">Bulk</a></li>
			<li><a href="#tab2" data-toggle="tab" >Single Student</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active"id="tab1">
				<p class="lead"> Select Batch and Academic year to send intimation messages</P>
					<form name="msg">
							<table class="table table-condensed">
								<tr>
									<thead>
									<th>Branch</th>
									<th>Year</th>
									<th>Batch</th>

									</thead>
								</tr>
								<tr>
									<td>
									<select name="branch"  class="span8">
  									<option>CSE</option>
									<option>ECE</option>
									<option>IT</option>
									<option>EIE</option>
									<option>CIVIL</option>
									<option>MECH</option>
									<option>EEE</option>
									<option>All</option>
									</select>
									</td>
									<td>
									<select name="accyr"  class="span8">
									<option>First Year</option>
									<option>Second Year</option>
									<option>Third Year</option>
									<option>Final Year</option>
									<option>ALL</option>
									</select>
									</td>
									
									<td>
										<select name="batch" class="span8">
											<option>09-13</option>
											<option>10-14</option>
											<option>11-15</option>
											<option>12-16</option>
											<option>13-17</option>
										</select>
									</td>
								</tr>
								</table>
								<b>Message: </b>
								<textarea rows="6" class = "span6" onKeyPress="return charLimit(this)" onKeyUp="return characterCount(this)" name="message" placeholder="Enter your message here...."></textarea><br/>
								<p class="offset5"><strong><span id="charCount">160</span></strong> characters left.</p>
								<button class= "btn btn-primary offset2" type = "button" id="clkmsg" >Submit</button>
						</form>
						<div id="resmsg" class="well">
						</div>
						</div>
						<div class="tab-pane" id="tab2">
						<p class="lead"> Enter Student roll number and message</p>
						<form method=post name="frmname">
							<h6>Enter ROLL NUMBER'S:</h6>
							<textarea rows="2" class = "span5" name="listnum" placeholder="Eg:09091a0563,09091a0564"></textarea><br/>
							<span class="help-block">You can enter more than one number seperated by comma's(,)</span><br/>
							<b>Message: </b>
								<textarea rows="6" class = "span6" onKeyPress="return charLimit(this)" onKeyUp="return characterCount(this)" name="prsnlmsg" placeholder="Enter your message here...."></textarea><br/>
								<p class="offset5"><strong><span id="charCount1">160</span></strong> characters left.</p>
							<button class= "btn btn-primary offset2" type = "button" id="sndmsg" >Submit</button>
						</form>
						<div id="repmsg" class="well">
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
var maxLength=160;
function charLimit(el) {
    if (el.value.length > maxLength) return false;
    return true;
}
function characterCount(el) {
    var charCount = document.getElementById('charCount');
    var charCount1 = document.getElementById('charCount1');
    if (el.value.length > maxLength) el.value = el.value.substring(0,maxLength);
    if (charCount) charCount.innerHTML = maxLength - el.value.length;
    if (charCount1) charCount1.innerHTML = maxLength - el.value.length;
    return true;
}
</script>
<script>
$('#resmsg').load('intires.php');
		$('#clkmsg').click(function() { 
			$.post('intires.php', { batch: msg.batch.value, accyr: msg.accyr.value, message: msg.message.value,branch : msg.branch.value},
			function(result){
				$('#resmsg').html(result).show(); 
			}); 
		});
	$('#repmsg').load('indisend.php');
		$('#sndmsg').click(function() { 
			$.post('indisend.php', { listnum: frmname.listnum.value, prsnlmsg: frmname.prsnlmsg.value },
			function(result){
				$('#repmsg').html(result).show(); 
			}); 
		});

	</script>
</body>
</html>
