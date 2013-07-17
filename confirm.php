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
<meta name='author' content='Eric Martin' />
<meta name='copyright' content='2012 - Eric Martin' />
<title>Home For ADMIN</title>    
<link type='text/css' href='css/osx.css' rel='stylesheet' media='screen' />
<link rel="stylesheet" href="styles/home.css"/>
<link rel="stylesheet" href="styles/chico-mesh.css"/>
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
			<h2>Operations Here</h2>
			<div class="ch-g1-3">
				<div class="ch-leftcolumn">
					<?php
						$curr = $_POST['stdid'];
						$check  = mysql_query("SELECT * FROM stdet WHERE stu_roll='$curr'");
						$res = mysql_fetch_assoc($check);
						echo "<b>Student Roll Number :".$res["stu_roll"]."<br/><br/>";
						echo "Student Name        : ".$res["stu_name"]."<br/><br/>";
						echo "Father Name         : ".$res["stu_father"]."<br/><br/>";
						echo "Branch              :".$res["stu_branch"]."<br/><br/>";
						echo "Email               :".$res["stu_email"]."<br/><br/>";
						echo "Mobile Number       : ".$res["stu_mob"]."</b><br/>";
					?>
				</div>
			</div>
			<div class="ch-g1-3r">
				<div class="ch-centercolumn">
					<?php
						$query = mysql_query("select * from def");
						$result = mysql_fetch_assoc($query);
						$jfee=0;
						$pfee=0;
						$bfee=0;
						$tfee =  0;
						$yr=0;
						$cb=0;
						$rbus=0;
						$total = 0;
						if(empty($_POST) === true)
						{
							echo "Please Enter Details of FEE";
						}
						else
						{
							echo "<b>Student Roll Number :<span style=font-size:18px>".$res["stu_roll"]."</span><br/><br/>";
							if(empty($_POST['yr']) === true)
							{
								echo "please Enter Academic Year";
							}
							else
							{
								$yr= $_POST['yr'];
								echo "<center>------Details Entered------</center><br>";
								echo "Academic Year: ";
								if($yr==="fy")echo "<center>First Year</center><br/>";
								else if($yr==="sy")echo "<center>Second Year</center><br/>";
								else if($yr==="ty")echo "<center>Third Year</center><br/>";
								else echo "<center>Final Year</center><br/>";
							}
							if(empty($_POST['cb'])=== true)
							{
								echo "Please select atleast One FEE";
							}
							else 
							{
								echo "Fee Type Selected: <br><br>";
								$cb = $_POST['cb'];
								foreach($cb as $c)
								{
									if($c=='jf')
									{
										echo "<center>Jntu Fee: ".$result['jfee']."<br>";
										$jfee = 1;
										$total = $total+$result['jfee'];
									}
									if($c == 'pf')
									{
										echo "Placement Fee: ".$result['pfee']."<br>";
										$pfee=1;
										$total = $total+$result['pfee'];
									}
									if($c == 'bf')
									{
										if($_POST['rbus']== 'bfeen') 
											{
												echo "Bus Fee: ".$result['bfeen']."</center><br>";
												$total = $total+$result['bfeen'];
											}
										else
										{ 
											echo "Bus Fee: ".$result['bfeek']."</center>";
											$total = $total+$result['bfeek'];
										}
										$bfee = 1;

									}
									if($c == 'tf')
									{
										$table_name="stdet";
									$stdid = $_POST['stdid'];
									$tuffees = mysql_query("select tutionfee from $table_name where `stu_roll`='$stdid'");
									$tuffees = mysql_fetch_assoc($tuffees);
									echo "<center>Tution Fee: ".$tuffees['tutionfee']."</center>";
									$total = $total+$tuffees['tutionfee'];
									$tfee = 1;
									}

								}
								echo "<center><table border=1 cellpadding=10><tr><th><span style=font-size:18px>TOTAL FEE : ".$total."</span></th></tr></table></center>" 	;
							}
						}
					?>
				</div>
			</div>
			<div class="ch-g1-3">
				<div class="ch-rightcolumn">
					<center>Proceed to pay And generate Receipt </br>

						<input type="BUTTON" autofocus="autofocus" value="Generate" class='osx demo'/ >
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
    <div class="ch-fixed-sidebar ch-right">
		<div class="ch-box">
			<h2>Admin Area</h2>
			<div id='cssmenu'>
<ul>
   <li class='active'><a href='home.php'><span><img src="images/home_icon.png">&nbspHome</span></a></li>
   <li class='active'><a href='add.php'><span><img src="images/add_icon.png">&nbspAdStudent</span></a></li>
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
	<div id="osx-modal-content">
		<div id="osx-modal-title">
			PLEASE SELECT YOUR CHOICE
		</div>
		<div class="close">
			<a href="#" class="simplemodal-close">x</a>
		</div>
		<div id="osx-modal-data">
			<form action="process.php" method="post">
			<center>CREATE PDF & PRINT </br>

			<input type="radio" autofocus="autofocus" value="cash" name = "payopt">PAY BY CASH<br>
			<input type="radio" id="txtfrm" value="DD" name="payopt">PAY BY DD<br>
			<input type="text" name="dd" placeholder="Enter DD Number" id="ddnum">
			<input type=hidden name="yr" value="<?php echo $yr;?>">
			<input type=hidden name="rbus" value="<?php echo $_POST['rbus'];?>">
			<input type=hidden name="cb" value="<?php echo htmlentities(serialize($cb));?>">
			<input type=hidden name="rollnum" value="<?php echo $res["stu_roll"] ;?>">
			<input type=hidden name="total" value="<?php echo $total;?>">
			<input type=submit autofocus="autofocus" value="Generate"  / >
			<form action="mail.php" method="post">
			<input type=submit  value="Mail A Copy"  / ></center>
			<p><button class="simplemodal-close">Close</button> <span>(or press ESC or click the overlay)</span></p>
		</div>
	</div>
	<!-- Load JavaScript files -->
	<script type='text/javascript' src='js/jquery.js'></script>
	<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
	<script type='text/javascript' src='js/osx.js'></script>
	<script type="text/javascript">
		$(document).ready(function() 
		{
	$('#ddnum').hide();
	$('#page_effect').fadeIn(2000);
	$('#txtfrm').click(function()
		{
			$('#ddnum').toggle();
		});
	
});

		</script>
</body>
</html>