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
	   <h1>Rajeev Gandhi Memorial College of Engg. &amp; Tech.</h1>
	</div>
	<div class="ch-elastic-content ch-left">
		<div class="ch-inner ch-box">
<?php
if(!isset($_POST['submit']))
{

	echo "<center><h2>No data received from the Form</h2>";	
}
else
{
	$name= $_POST['name'];
	$sur = $_POST['sname'];
	$roll = $_POST['roll'];
	$gen = $_POST['gender'];
	$fname = $_POST['fname'];
	$branch=$_POST['branch'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$batch = $_POST['batch'];
	if($gen=="m")
	{
		$name_mod= "Mr.".$name;
	}
	else
	{
		$name_mod = "Miss.".$name;

	}
	$ex = substr($roll,0,2);
	$ex2 = substr($roll,-3,10); 
	$accid = "ACC".$ex.$ex2;
	$temp=mysql_query(	"select *from stdet where `stu_roll`='$roll'");
	$tempno=mysql_affected_rows();
	if($tempno == 0)
	{	
		$otp_rand = rand(111,999);
		$otpprecced = substr($roll,-3,10);
		$otpp = substr($roll,0,2);
		$otp = "A".$otpp.$otp_rand.$otpprecced;
		mysql_query("insert into stdet(stu_roll,batch,surname,stu_name,stu_father,stu_branch,stu_email,stu_mob,accid) values('$roll','$batch','$sur','$name','$fname','$branch','$email','$mobile','$accid')");
		mysql_query("insert into stud1(stu_roll,accid,stu_name,batch,branch) values('$roll','$accid','$name','$batch','$branch')");
		mysql_query("insert into stud2(stu_roll,accid,stu_name,batch,branch) values('$roll','$accid','$name','$batch','$branch')");
		mysql_query("insert into stud3(stu_roll,accid,stu_name,batch,branch) values('$roll','$accid','$name','$batch','$branch')");
		mysql_query("insert into stud4(stu_roll,accid,stu_name,batch,branch) values('$roll','$accid','$name','$batch','$branch')");
		//Code to Send SMS
		$ch = curl_init();
		$user="ravi-tej@live.com:diwakar007";
		$receipientno=$mobile; 
		$senderID="TEST SMS"; 
		$msgtxt="Roll No.:".$roll." with ACCID:".$accid." added successfully, ur OTP is: ".$otp." Login @ rgitnandyal.com%0a~RGMERP"; 
		curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt&state=2");
		$buffer = curl_exec($ch);
		$datetoday = date("d-M-Y");
		if(empty ($buffer))
		{ 
			
			$stat = 0;
			mysql_query("insert into smsstatus(accid,stu_roll,otp,date,status) values('$accid','$roll','$otp','$datetoday','$stat')");
		 }
		else
		{ 	
			$r= explode(",",$buffer);
			$stat =1;
			mysql_query("insert into smsstatus(accid,stu_roll,otp,jobid,state,date,status) values('$accid','$roll','$otp','$r[1]','$r[0]','$datetoday','$stat')"); } 
		curl_close($ch);
		//End of the SMS code
		echo "<h2><center>Student ".$name_mod." added successfully</h2><br/>";
		echo "<h3>Account ID:<u><span style=color:red> ".$accid."</span></u> </h3>"; 
		echo "<h3>Now its time to set Tution Fee for ".$name_mod." </h3>";
		echo "<button id=set class=btnstyle>SET</button>";
}
	else
	{
		echo "<center><h3>Student with Roll No.: ".$roll." exists</center>";
	}	

}
?>
<div id= "showfee">
	<form method=post action = "tutfee.php"  data-validate="parsley" >
		<b>SET Tution fee:</b> 	
		<input type = text name="tfee" data-trigger="keyup" data-required="true" data-type="number">
		<input type="hidden" name="roll" value= "<?php echo $roll;?>"/>
		<input type= submit name="submit" class = "btnstyle"  value="UPDATE">
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
    <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/parsely.js"></script>
    <script type='text/javascript' src='js/jquery.js'></script>
	<script type="text/javascript">
		$(document).ready(function() 
		{
			$('#showfee').hide();
			
			$('#set').click(function() 
			{
				$('#showfee').show();
			});
		}); 
	</script>
</body>
</html>