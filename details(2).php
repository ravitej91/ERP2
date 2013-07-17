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
</head>
<body>
	
	<div class="ch-header ch-box">
	    <h1>Admin Home</h1>
	</div>
	<div id="page_effect" style="display:none;">
	<div class="ch-elastic-content ch-left">
		<div class="ch-inner ch-box">
			<h2>Enter payment Details</h2>
			<div class="ch-g1-2">
				<div class="ch-leftcolumn">
					<form name="det" action="confirm.php" method="post">
						<h3>Select the Academic Year: </h3>
						<input type="radio" name="yr"  value="fy"> First Year
						<input type="radio" name="yr"  value="sy"> Second Year
						<input type="radio" name="yr"  value="ty"> Third Year
						<input type="radio" name="yr"  value="ny"> Fourth Year <br>
						<h3>Select the FEE to be Paid: </h3>
						<input type="checkbox" name="cb[]" value="jf" id="jfee">Jntu Fees
						<input type="checkbox" name="cb[]" value="pf" id="pfee">Placement Fees
						<input type="checkbox" name="cb[]" value="bf" id="bfee">Bus Fees<br>
						<div id="alpha">
							<h3>Select the City: </h3>
							<input type="radio" name="rbus" value="bfeen" id="rbusn">Nandyal
							<input type="radio" name="rbus" value="bfeek" id="rbusk">Kurnool
						</div>
						<div id="delta">
							<table width="400" border="1" >
								<tr>
									<th>Jntu Fees</th>
									<th>Placement fees</th>
									<th>Bus Fees</th>
								</tr>
								<tr>
									<td id="jfees">1500</td>
									<td id="pfees">5000</td>
									<td id="bfeesk">18000</td>
									<td id="bfeesn">7000</td>
								</tr>
							</table>
						</div>
						<input type="hidden" name="stdid" value="<?php echo $_POST['stdid']; ?>">
						<input type="submit" name="submit" value="proceed">
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
							$stdid = $_POST['stdid'];
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
								echo "<b>Student Roll Number :".$res["stu_roll"]."<br/>";
								echo "Student Name        : ".$res["stu_name"]."<br/>";
								echo "Father Name         : ".$res["stu_father"]."<br/>";
								echo "Branch              :".$res["stu_branch"]."<br/>";
								echo "Email               :".$res["stu_email"]."<br/>";
								echo "Mobile Number       : ".$res["stu_mob"]."</b><br/>";
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
			<h2>Admin Area</h2>
			<a href="home.php" class="btnstyle">Home</a>
			<br><br>
			<a href="logout.php" class="btnstyle">Logout</a>
			<br><br>
			<a href="add.php" class="btnstyle">Add Student</a>
			<br><br>
			<a href="editdet.php" class="btnstyle">Edit Student Details</a>
		</div>
	</div>
	<div style="clear:both;">
	</div> <!-- clear floats -->
	<div class="ch-footer ch-box">
		<p>Project by CSE Final Year</p>
    </div>

	<!-- Load JavaScript files -->
	<script type='text/javascript' src='js/jquery.js'></script>
	<script type="text/javascript">
		$(document).ready(function() 
		{

	$('#page_effect').fadeIn(2000);
			$('#jfees').hide();
			$('#pfees').hide();
			$('#bfeesk').hide();
			$('#bfeesn').hide();
			$('#totk').hide();
			$('#totn').hide();
			$('#alpha').hide();
			$('#jfee').click(function() 
			{
				$('#jfees').toggle();
			});
			$('#pfee').click(function() 
			{
				$('#pfees').toggle();
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
</body>
</html>