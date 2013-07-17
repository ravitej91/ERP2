<?php
include "connect/connects.php";
session_start();
if(!isset($_SESSION['user_id']))
{
	
	die("Login First to use this page <br/> <a href=index.php> LOGIN</a>");
	

}
?>
<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="es" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="es" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="es" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="es" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
<head>
	<title>::Enter Fee details::</title>    
	<link rel="stylesheet" href="styles/home.css">
	<link rel="stylesheet" href="css/btnstyle.css">
	<link href="css/menu.css" rel="stylesheet" />
	
</head>
<body>
	
	<div class="ch-header ch-box">
	    <h3>Rajeev Gandhi Memorial College of Engg. &amp; Tech.</h3>
	</div>
	<div id="page_effect" style="display:none;">
	<div class="ch-elastic-content ch-left">
		<div class="ch-inner ch-box">
			<h2>Enter payment Details</h2>
			<div class="ch-g1-2">
				<div class="ch-leftcolumn">
					<form name="det1" data-validate="parsley" action="confirm.php" method="post">
						<h2>Select the Academic Year: </h2>
						<input type="radio" name="yr" required="required"  value="fy" id="seyr1"><b>First Year</b>
						<input type="radio" name="yr"  value="sy" id="seyr2"> <b>Second Year</b>
						<input type="radio" name="yr"  value="ty"  id="seyr3"> <b>Third Year</b>
						<input type="radio" name="yr"  value="ny" id="seyr4"> <b>Fourth Year</b> <br>
						

						<div id="res">

						

						</div>
						
						<div id="alpha">
							<h3>Select the City: </h3>
							<input type="radio" name="rbus" value="bfeen" checked="checked" id="rbusn">Nandyal
							<input type="radio" name="rbus" value="bfeek" id="rbusk">Kurnool
						</div>
						<div id="delta">
							<table width="100%" border="1" >
								<tr>
									<th id="sjf">Jntu Fees</th>
									<th id="pjf" >Placement fees</th>
									<th id="bjf">Bus Fees</th>
									<th id="tjf">Tution Fee</th>
									
								</tr>
								<tr>
									<td ><div id="jfees"><?php 
									$tablename="def";
									$deffees = mysql_query("select * from $tablename where `id`=1");
									$deffees = mysql_fetch_assoc($deffees);
									echo $deffees['jfee'];?></div>
								</td>
									<td>
										<div id="pfees"><?php echo $deffees['pfee'];?></td>
										</div>
									<td ><div id="bfeesk"><?php echo $deffees['bfeek'];?></div><div id="bfeesn"><?php echo $deffees['bfeen'];?></div></td>
									<td ><div id="tfees"><?php 
									$table_name="stdet";
									$stdid = $_POST['stdid'];
									$tuffees = mysql_query("select tutionfee from $table_name where `stu_roll`='$stdid'");
									$tuffees = mysql_fetch_assoc($tuffees);
									echo $tuffees['tutionfee'];?></div></td>
			
								</tr>
							</table>
						</div>
						<input type="hidden" name="stdid" value="<?php echo $_POST['stdid']; ?>">
						<input type="submit" name="submit" value="proceed" onClick="Validate(this.form, 'yr')">
					</form> 
				</div>
			</div>
			<div class="ch-g1-2">
				<div class="ch-rightcolumn">
				   <?php
						if(empty($_POST))
						{
							echo "Enter Student Roll Number to view";
						}
						else
						{
							$check  = mysql_query("SELECT * FROM stdet WHERE stu_roll='$stdid'");
							$res = mysql_fetch_assoc($check);
							$check_num_rows = mysql_num_rows($check);
							if($check_num_rows == 0)
				            echo "No Student exists with this Roll Number";
							if($check_num_rows > 1)
				            echo "Sorry Duplicate record Exists .<br/> .Please contact Database Administartor";
							else
							{
								$_SESSION['roll'] = $res["stu_roll"];
								echo"<div class= ch-box1>";
								echo "<b>Student Roll Number :<span style=font-size:18px>".$res["stu_roll"]."</span><br/><br/>";
								echo "Student Name        : ".$res["stu_name"]."<br/><br/>";
								echo "Father Name         : ".$res["stu_father"]."<br/><br/>";
								echo "Branch              :".$res["stu_branch"]."<br/><br/>";
								echo "Email               :".$res["stu_email"]."<br/><br/>";
								echo "Mobile Number       : ".$res["stu_mob"]."</b><br/><br/>";
								echo "</div>";
							}
						}
				    ?>
				</div>
			</div>
		</div>
	</div>
</div>
    <div class="ch-fixed-sidebar ch-right">
		<div class="ch-box">
			<h3>Admin Menu</h3>
			<div id='cssmenu'>
<ul>
   <li class='active'><a href='home.php'><span><img src="images/home_icon.png">&nbspHome</span></a></li>
   <li ><a href='add.php'><span><img src="images/add_icon.png">&nbspAddStudent</span></a>
   <li ><a href='editdet.php'><span><img src="images/edit_icon.png">&nbspEditDetails</span></a></li>
   <?php if($_SESSION['user_id']==1) { ?>
   <li class='active'><a href='admin'><span><img src="images/admin_icon.png">&nbspAdmin Panel</span></a></li>
   <?php } ?>
   <li ><a href='logout.php'><span><img src="images/logout_icon.png">&nbspLogout</span></a></li>
</ul>
</div>
		</div>
	</div>
	<div style="clear:both;">
	</div> <!-- clear floats -->
	<div class="ch-footer ch-box">
			<p >All contents &#169 <?php echo date('Y');?><a href='#'> RGMCET College Fee ERP System</a> | Designed & Built by: <a href="http://www.facebook.com/reddyvarirasagna">Rasagna R.N</a>  |  <a href="http://www.facebook.com/taruni.gunda">Taruni G</a>  |  <a href="http://www.facebook.com/vaRaDaMohaNrEdDy">Varadha Mohan Reddy N</a>  |  
			<a href="http://www.facebook.com/RaviTeja91">Ravi Teja G</a>  |   
			<a href="http://www.facebook.com/rajuv">Raju V</a> </p><br>
            <p >Under Esteemed Guidance of : <a href='http://www.facebook.com/vukuday'><b>Mr. UDAY KUMAR</b></a> | Dept. of CSE, RGIT Nandyal</p>
    </div>

	<!-- Load JavaScript files -->
						

	<script type='text/javascript' src='js/jquery.js'></script>
	<script type="text/javascript" src="js/parsely.js"></script>
	<script type="text/javascript">
		$(document).ready(function() 
		{

	$('#page_effect').fadeIn(2000);
		$('#jfees').hide();
			$('#pfees').hide();
			$('#bfeesk').hide();
			$('#bfeesn').hide();
			$('#bf').hide();
			$('#totk').hide();
			$('#totn').hide();
			$('#alpha').hide();
			$('#tfees').hide();
			$('#jfee').click(function() 
			{
								$('#jfees').toggle();
			});
			$('#pfee').click(function() 
			{
				$('#pfees').toggle();
			});
			$('#tfee').click(function() 
			{
				$('#tfees').toggle();
			});
			
			$('#bfee').click(function() 
			{
				$('#alpha').toggle();
				$('#bfeesn').toggle();
				$('#bfeesk').hide();
			});
			$('#rbusk').click(function() 
			{
				$('#bfeesk').show();
				$('#bfeesn').hide();
			});
			$('#rbusn').click(function() 
			{
				$('#bfeesn').show();
				$('#bfeesk').hide();
			});
		
		});
		



	</script>
	<script>
	$('#res').load('detres.php');
		$('#seyr1').click(function() { 
			$.post('detres.php', { yr: det1.seyr1.value, roll: det1.stdid.value },
			function(result){
				$('#res').html(result).show(); 
			});
		});
		$('#res').load('detres.php');
		$('#seyr2').click(function() { 
			$.post('detres.php', { yr: det1.seyr2.value,roll: det1.stdid.value },
			function(result){
				$('#res').html(result).show(); 
			});
		});
		$('#res').load('detres.php');
		$('#seyr3').click(function() { 
			$.post('detres.php', { yr: det1.seyr3.value,roll: det1.stdid.value },
			function(result){
				$('#res').html(result).show(); 
			});
		});
		$('#res').load('detres.php');
		$('#seyr4').click(function() { 
			$.post('detres.php', { yr: det1.seyr4.value,roll: det1.stdid.value},
			function(result){
				$('#res').html(result).show(); 
			});
		});

	</script>
</body>
</html>
