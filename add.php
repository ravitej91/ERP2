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
<meta name='College Fee ERP' content='CSE' />
<meta name='copyright' content='2012 - CSE' />
<title>College Fee ERP</title>    
<link type='text/css' href='styles/osx.css' rel='stylesheet' media='screen' />
<link rel="stylesheet" href="styles/home.css">


<link rel="stylesheet" href="styles/field.css">
<link rel="stylesheet" href="css/btnstyle.css">
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="css/menu.css" rel="stylesheet" />
<style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }
      h3.muted {
          color: #08C;
      }
      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 940px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }
      section {
          margin-bottom: 45px;
      }
      form {
          margin: 0;
      }
      input.parsley-success, textarea.parsley-success {
        color: #468847 !important;
        background-color: #DFF0D8 !important;
        border: 1px solid #D6E9C6 !important;
      }
      input.parsley-error, textarea.parsley-error {
        color: #B94A48 !important;
        background-color: #F2DEDE !important;
        border: 1px solid #EED3D7 !important;
      }
      input {
          width: 150px;
          margin: 0 2px !important;
      }
      ul.parsley-error-list {
          font-size: 11px;
          margin: 2px;
          list-style-type:none;

      }
      ul.parsley-error-list li {
          line-height: 11px;
         
      }
      .social-buttons {
          padding: 5px 20px;
      }
      h1 {
          font-size: 30px;
      }

      .container-narrow > hr {
        margin:15px 0 0 0;
      }

      
    </style>
</head>
<body>
	<div class="ch-header ch-box">
	    <h1>Rajeev Gandhi Memorial College of Engg. &amp; Tech.</h1>
	</div>
	<div id="page_effect" style="display:none;">
	<div class="ch-elastic-content ch-left">
		<div class="ch-inner ch-box">
			<?php 
			if(isset($_SESSION['uname']))
				{echo "<p class=ch-box-ok><center>student ".$_SESSION['uname']." added sucessfully</center></p><br/>";}
			unset($_SESSION['uname']);?>
			<form data-validate="parsley" method="post" name="det" action="add_stu.php">
				<h3>Enter Student Details</h3><br/>
				
				<table   border="0"  style="background-color:#FFFFFF" width="100%" cellpadding="3" cellspacing="2">
	<tr>
		<td><label for="fullname">Student name:</label></td>
		<td><input type=text name= "name"  data-trigger="keyup" data-required="true" >
			Sur Name: <input type=text name= "sname"  >
		</td>
	</tr>
	<tr>
		<td>Student Roll No.:</td>
		
		<td><input type= text data-trigger="keyup"  name = "roll" data-required="true" data-minlength="10" data-maxlength="10"/></td>
	</tr>
	<tr>
		<td>Gender:</td>
		<td><input type=radio name= "gender" class= "" value= "m" data-required="true" />Male  <input type=radio name= "gender" value= "f" />Female
			&nbsp&nbsp <b>Batch :*</b><select data-required="true"  name="batch">
					<option> </option>
					<option>09-13</option>
					<option>10-14</option>
					<option>11-15</option>
					<option>12-16</option>
					<option>13-17</option>
				</select>
		</td>
	</tr>
	<tr>
		<td>Father name :</td>
		<td><input type= text data-trigger="keyup" name = "fname" data-required="true" /></td>
	</tr>
	<tr>
		<td>Branch:</td>
		<td><select data-required="true"  name="branch">
					<option> </option>
					<option>CSE</option>
					<option>ECE</option>
					<option>IT</option>
					<option>EIE</option>
					<option>CIVIL</option>
					<option>MECH</option>
					<option>EEE</option>
					<option>MCA</option>
				</select></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="email" data-trigger="keyup"  data-required="true"  name="email" data-type="email" /></td>
	</tr>
	<tr>
		<td>Mobile:</td>
		<td>+91<input type= text name="mobile" data-rigger="keyup" data-required="true" data-type="number" data-minlength="10" data-maxlength="10" /></td>
	</tr>
	<tr align="right">
		<td><input type=checkbox name="fdh" >FDH 
		</td>
	</tr>
</table>
<br/><center><input type="submit" class="tnstyle" name="submit"  value="submit" /></center>
				
			</form>
			</div>
	</div>
</div>
    <div class="ch-fixed-sidebar ch-right">
		<div class="ch-box">
			<h2>Admin Area</h2>
			
  
			<div id='cssmenu'>
<ul>
   <li class='active'><a href='home.php'><span><img src="images/home_icon.png">&nbspHome</span></a></li>
   <li class='active'><a href='add.php'><span><img src="images/add_icon.png">&nbspAddStudent</span></a>
   <li class='active'><a href='editdet.php'><span><img src="images/edit_icon.png">&nbspEditDetails</span></a></li>
   <li class='active'><a href='logout.php'><span><img src="images/logout_icon.png">&nbspLogout</span></a></li>
</ul>
</div>
		</div>
	</div>
	<div style="clear:both;"></div> <!-- clear floats -->
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
			<p><button class="simplemodal-close">Close</button> <span>(or press ESC or click the overlay)</span></p>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/parsely.js"></script>
	<script type="text/javascript">
		$(document).ready(function() 
		{

	$('#page_effect').fadeIn(2000);
});
		</script>
		</body>
	</html>
