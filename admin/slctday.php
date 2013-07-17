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
					 <li ><a href="index.php"><i class="icon-home "></i>Home</a></li>
						<li   ><a href="dayoprtns.php"><i class="icon-list"></i>Day Transactions</a></li>
						<li class="active"><a href="slctday.php"><i class="icon-user"></i>Select Day</a></li>
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
<div class="well">
<p class="lead"> Select A date below to get transaction details</p>
<form name="datepick">
<div class="input-append date" id="dp3" data-date="<?php echo date('d-M-Y');?>" data-date-format="dd-mm-yyyy">
				<input class="span2" size="16" type="text" value="<?php echo date('d-M-Y');?>" readonly="" name="sldate">
				<span class="add-on"><i class="icon-th"></i></span>
				<button class= "btn btn-info offset" type = "button" id="getres" >GET </button>
			  </div>
</form>
</div>
<div id="result" class="well">

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
				format: 'mm-dd-yyyy',
                todayBtn: 'linked'
			});
            
			$('#dp2').datepicker();
            $('#btn2').click(function(e){
                e.stopPropagation();
                $('#dp2').datepicker('update', '03/17/12');
            });             
            
			$('#dp3').datepicker();
			
			
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
                
            //inline    
            $('#dp6').datepicker({
                todayBtn: 'linked'
            });
                
            $('#btn6').click(function(){
                $('#dp6').datepicker('update', '15-05-1984');
            });            
            
            $('#btn7').click(function(){
                $('#dp6').data('datepicker').date = null;
                $('#dp6').find('.active').removeClass('active');                
            });            
		});
		$('#result').load('dayres.php');
		$('#getres').click(function() { 
			$.post('dayres.php', { sldate: datepick.sldate.value },
			function(result){
				$('#result').html(result).show(); 
			}); 
		});
	</script>
</body>
</html>

