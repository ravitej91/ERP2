<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	
	die("Login First to use this page <br/> <a href=index.php> LOGIN</a>");
	

}
include "connect/connects.php";
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
<h1>Rajeev Gandhi Memorial College of Engg. &amp; Tech.</h1>	</div>
	<div class="ch-elastic-content ch-left">
		<div class="ch-inner ch-box">
		<div id="stform">
			<form  data-validate="parsley" name="stdetails" >
				<center><h2>Enter Student ID</h2>
					<div class="field">
						<input type=text id="sid" align="middle" autofocus="autofocus" data-trigger="keyup" data-required="true" data-rangelength="[10,10]" name= "stdid">
					</div>
				<br>
				<input type="submit" name="submit" id="submit" value="check" class="osx demo"/>
			</form>
		</div>
			
		</div>
	</div>
	<div class="ch-fixed-sidebar ch-right">
		<div class="ch-box">
			<h2>Admin Menu</h2>
      <link href="css/menu.css" rel="stylesheet" />
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
            <p >Under Esteemed Guidance of : <a href='http://www.facebook.com/vukuday'><b>Mr. UDAY KUMAR</b></a> | Dept. of CSE, RGIT Nandyal</p>    </div>
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
    <!-- Load JavaScript files --><script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/parsely.js"></script>
    
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
  <script type='text/javascript' src='js/osx.js'></script>
<script type="text/javascript">
    $('#osx-modal-data').load('edit1.php');
    $('#submit').click(function() { 
      $.post('edit1.php', { stdid: stdetails.stdid.value },
      function(result){
        $('#osx-modal-data').html(result).show(); 
      }); 
    });
  </script>
	
	</body>
	</html>		
			