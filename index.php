<?php
session_start();
if(isset($_SESSION['user_id']))
{
	 header('Location: home.php');
	 exit();
	 
}
function report()
{
	Echo "Please Login First to use this Application";
}
include "login.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="google-site-verification" content="nAYzB8RwEKYzJZAkR1DihPVCZR2tnW_kSzhoz52mm6s" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login For Admin</title>
<link rel="stylesheet" type="text/css" href="styles/styles2.css" />
</head>
<body>
<div id="carbonForm">
  <h1>LOGIN</h1>
    <form method="post" id="signupForm">
	<div class="fieldContainer">
        <p ><center><span style= "color:red"><?php echo $msg;?></span></center></p>
        <div class="formRow">
            <div class="label">
                <label for="name">UserName:</label>
            </div>
            
            <div class="field">
                <input type="text" autofocus="autofocus" name="uname" id="name">
				
            </div>
			
        </div>
        <div class="formRow">
            <div class="label">
                <label for="pass">Password:</label>
            </div>
            <div class="field">
                <input type="password" name="pass"  id="pass" />
            </div>
        </div>
    </div> <!-- Closing fieldContainer -->
    <div class="signupButton">
        <input type="submit" name="submit" id="submit" value="Signup" />
    </div>
    </form>
 </div>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
