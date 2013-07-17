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
						<li class="active"><a href="branchdet.php"><i class="icon-search"></i>By Branch</a></li>
						<li><a href="stuacc.php"><i class="icon-user"></i>Student Account</a></li>
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
			<div class="span9 well">
				<div>
					<p class="lead"> Give Branch,Year and type of the FEE Details here to view the results</P>
					<form name="brnch">
							<table class="table table-condensed">
								<tr>
									<thead>
									<th>Batch</th>
									
									<th>Year</th>
									<th>Branch</th>
									<th>Type of FEE</th>
									
									
									<th>Query</th>
									</thead>
								</tr>
								<tr>
									<td>
										<select name="batch" class="span8">
											<option>09-13</option>
											<option>10-14</option>
											<option>11-15</option>
											<option>12-16</option>
											<option>13-17</option>
										</select>
									</td>
									<td>
									<select name="accyr"  class="span8">
									<option>First Year</option>
									<option>Second Year</option>
									<option>Third Year</option>
									<option>Final Year</option>
									</select>

									</td>
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
									<select name="feetype"  class="span8">
  									<option>JNTU</option>
									<option>PLACEMENT</option>
									<option>BUS FEE</option>
									<option>TUTION FEE</option>
									<option>ALL FEE</option>
									</select>
									</td>
									
									
									<td>
										<select name="payopt" class="span8">
											<option>Paid</option>
											<option>Not paid</option>
										</select>
									</td>
								</tr>
							</table>
							<button class= "btn btn-large btn-block btn-primary" type = "button" id="clkres" >Submit</button>
						</form>
						</div>
						<div id="res" class="well">
						</div>
						<div>
                <input type="button" class="btn btn-info" value="print" onclick="PrintDiv();" />
            </div>
			</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script>
$('#res').load('brnchres.php');
		$('#clkres').click(function() { 
			$.post('brnchres.php', { branch: brnch.branch.value, feetype: brnch.feetype.value, accyr: brnch.accyr.value,payopt: brnch.payopt.value,batch: brnch.batch.value },
			function(result){
				$('#res').html(result).show(); 
			}); 
		});
	</script>
	<script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('res');
           var popupWin = window.open('', '_blank');
           popupWin.document.open();
           popupWin.document.write("<html><head><title>Report || College Fee ERP</title><link rel='stylesheet' type='text/css' href='css/letterpad.css' /></head><body onload= 'window.print()'><div class='header'><img src='../img/logo.png' width='100' height='90' vspace='10' align='left' /><h2>Rajeev Gandhi Memorial College of Engg. & Tech. </h2>(AUTONOMUS)<br />Acccredited by NAAC of UGC, New Delhi with A Grade<br />www.rgitnandyal.com ph: 08514-275203, Fax - 275123</div><br><div class='row'>Date: <?php echo date('d-M-Y');?></div>"+ res.innerHTML + "</body></html>");
            popupWin.document.close();
                }
     </script>
</body>
</html>
