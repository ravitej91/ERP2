<?php
include "../connect/connects.php";
include "includes/cnvrtnum2wrdsfun.php";
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
						<li class="active"><a href="dayoprtns.php"><i class="icon-list"></i>Transactions</a></li>
						<li><a href="branchdet.php"><i class="icon-search"></i>By Branch</a></li>
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
	<div class="span9 well well-large">
		<ul class= "nav nav-tabs">
			<li class = "active"><a href="#tab1" data-toggle = "tab">Today Transactions</a></li>
			<li><a href="#tab2" data-toggle="tab" >Selected Day</a></li>
			<li><a href="#tab3" data-toggle="tab" >Selected Month</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active"id="tab1">
				<div class="well">
					<p class="lead"> Check Daily Transactions Here</p>
					
				</div>
				<div id="result1" >
					<p class="lead"> The transactions listed below are subjected to Date: <?php echo date("d-M-Y"); ?></p>
				<?php
					$date = date("d");
					$month = date("M");
					$year = date("Y");
					$temp = mysql_query("SELECT `accid`,`stu_roll`,`total`,`payopt` from receipt WHERE `day`='$date' and `month` = '$month' and `year` = '$year'");
					echo "<table class='table table-bordered' width='100%'>
					<tr>
					<thead>
					<th>#</th>
					<th>Account Id</th>
					<th>Student Roll</th>
					<th>Total</th>
					<th>DD / Cash</th>
					</thead></tr>";
					$i=1;
					$tot = 0;
					while($row = mysql_fetch_array($temp))
					{
						echo "<tr><td>".$i."</td><td>".$row['accid']."</td><td>".$row['stu_roll']."</td><td>".$row['total']."</td><td>".$row['payopt']."</td></tr>";
						$i = $i+1;
						$tot = $tot+$row['total'];
					}
					echo "</table>";
					echo "<center><h5>Total Amount: <img src='../images/rupees.png'>.".$tot."</h5></center>";
					$words = convert_number_to_words($tot);
					echo "<b>Total amount in words : \"".$words."</b>\"";
				?>
				</div>
				<div>
                <input type="button" class="btn btn-info" value="print" onclick="PrintDivoprtns();" />
            </div>
			</div>
			<div class="tab-pane" id="tab2">
				<div class="well">
					<p class="lead"> Select A date below to get transaction details</p>
					<form name="datepick">
						<div class="input-append date" id="dp3" data-date="<?php echo date('d-m-Y');?>" data-date-format="d-m-yyyy">
						<input class="span2" size="16" type="text" value="<?php echo date('d-m-Y');?>" readonly="" name="sldate">
						<span class="add-on"><i class="icon-calendar"></i></span>
						<button class= "btn btn-info offset" type = "button" id="getres" >GET </button>
					  	</div>
					</form>
				</div>
				<div id="result" class="well">
				<?php

				?>
				</div>
				<div>
                <input type="button" class="btn btn-info" value="print" onclick="PrintDiv();" />
            </div>
			</div>

			<div class="tab-pane" id="tab3">
				<div class="well">
					<p class="lead"> Select A MONTH below to get transaction details</p>
					<form name="monthpick">
						<div class="input-append date" id="dpMonths" data-date="<?php echo date('m-Y');?>" data-date-format="m-yyyy" data-date-viewmode="years" data-date-minviewmode="months">
						<input class="span2" size="16" type="text" value="<?php echo date('m-Y');?>" readonly="" name="slmonth">
						<span class="add-on"><i class="icon-calendar"></i></span>
						<button class= "btn btn-info offset" type = "button" id="getmon" >GET </button>
					  	</div>
					</form>
				</div>
				<div id="mnthresult" class="well">
				<?php


				?>
				</div>
				<div>
                <input type="button" class="btn btn-info" value="print" onclick="PrintDivres();" />
            </div>
			</div>

			</div>
		</div>
		</div>
	</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script>
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#dp1').datepicker({
				format: 'mm-dd-yyyy'
			});
			$('#dp2').datepicker();
			$('#dp3').datepicker();
			$('#dp3').datepicker();
			$('#dpYears').datepicker();
			$('#dpMonths').datepicker();
			
			
			var startDate = new Date(2012,1,20);
			var endDate = new Date(2012,1,25);
			$('#dp4').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() > endDate.valueOf()){
						$('#alert').show().find('strong').text('The start date can not be greater then the end date');
					} else {
						$('#alert').hide();
						startDate = new Date(ev.date);
						$('#startDate').text($('#dp4').data('date'));
					}
					$('#dp4').datepicker('hide');
				});
			$('#dp5').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() < startDate.valueOf()){
						$('#alert').show().find('strong').text('The end date can not be less then the start date');
					} else {
						$('#alert').hide();
						endDate = new Date(ev.date);
						$('#endDate').text($('#dp5').data('date'));
					}
					$('#dp5').datepicker('hide');
				});

        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
		});
	
		$('#result').load('dayres.php');
		$('#getres').click(function() { 
			$.post('dayres.php', { sldate: datepick.sldate.value },
			function(result){
				$('#result').html(result).show(); 
			}); 
		});
		$('#mnthresult').load('mnthres.php');
		$('#getmon').click(function() { 
			$.post('mnthres.php', { slmonth: monthpick.slmonth.value },
			function(result){
				$('#mnthresult').html(result).show(); 
			}); 
		});
	</script>
	<script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('result');
           var popupWin = window.open('', '_blank');
           popupWin.document.open();
           popupWin.document.write("<html><head><title>Report || College Fee ERP</title><link rel='stylesheet' type='text/css' href='css/letterpad.css' /></head><body onload= 'window.print()'><div class='header'><img src='../img/logo.png' width='100' height='90' vspace='10' align='left' /><h2>Rajeev Gandhi Memorial College of Engg. & Tech. </h2>(AUTONOMUS)<br />Acccredited by NAAC of UGC, New Delhi with A Grade<br />www.rgitnandyal.com ph: 08514-275203, Fax - 275123</div><br/><div class='row'>Date: <?php echo date('d-M-Y');?></div>" + result.innerHTML + "</body></html>");
            popupWin.document.close();
                }
     </script>
     <script type="text/javascript">     
        function PrintDivres() {    
           var divToPrint = document.getElementById('mnthresult');
           var popupWin = window.open('', '_blank');
           popupWin.document.open();
           popupWin.document.write("<html><head><title>Report || College Fee ERP</title><link rel='stylesheet' type='text/css' href='css/letterpad.css' /></head><body onload= 'window.print()'><div class='header'><img src='../img/logo.png' width='100' height='90' vspace='10' align='left' /><h2>Rajeev Gandhi Memorial College of Engg. & Tech. </h2>(AUTONOMUS)<br />Acccredited by NAAC of UGC, New Delhi with A Grade<br />www.rgitnandyal.com ph: 08514-275203, Fax - 275123</div><br/><div class='row'>Date: <?php echo date('d-M-Y');?></div>" + mnthresult.innerHTML + "</body></html>");
            popupWin.document.close();
                }
     </script>
     <script type="text/javascript">     
        function PrintDivoprtns() {    
           var divToPrint = document.getElementById('result1');
           var popupWin = window.open('', '_blank');
           popupWin.document.open();
           popupWin.document.write("<html><head><title>Report || College Fee ERP</title><link rel='stylesheet' type='text/css' href='css/letterpad.css' /></head><body onload= 'window.print()'><div class='header'><img src='../img/logo.png' width='100' height='90' vspace='10' align='left' /><h2>Rajeev Gandhi Memorial College of Engg. & Tech. </h2>(AUTONOMUS)<br />Acccredited by NAAC of UGC, New Delhi with A Grade<br />www.rgitnandyal.com ph: 08514-275203, Fax - 275123</div><br/><div class='row'>Date: <?php echo date('d-M-Y');?></div>"+ result1.innerHTML +"</body></html>");
           popupWin.document.close();
                }
                
     </script>
</body>
</html>