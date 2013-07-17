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
<?php


$message = null;


$allowed_extensions = array('csv');


$upload_path = 'C:\Users\Ravi Teja\Desktop';


if (!empty($_FILES['file'])) 
{

	
if ($_FILES['file']['error'] == 0) 
{
			
		
// check extension
		
$file = explode(".", $_FILES['file']['name']);
				
$extension=array_pop($file);	
if (in_array($extension, $allowed_extensions)) 
{
	
			
if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_path.'/'.$_FILES['file']['name'])) 
{
		
				
if (($handle = fopen($upload_path.'/'.$_FILES['file']['name'], "r")) !== false) 
{
					
					
$keys = array();
					
$out = array();
					
					
$insert = array();
					
					
$line = 1;
					
					
while (($row = fgetcsv($handle, 0, ',', '"')) !== FALSE) 
{
				       	
				       	
foreach($row as $key => $value) 
{
				       		
if ($line === 1) 
{
				       			
$keys[$key] = $value;
				       		
} 
else 
{
				       			
$out[$line][$key] = $value;
				       			
				       		
}
				       	
}
				        
				        
$line++;
				      
				    
}
				    
				    
fclose($handle);    
				    
				    
if (!empty($keys) && !empty($out)) 
{
				    	
				    	
$db = new PDO('mysql:host=localhost;dbname=erp', 'root', '');
				   		
$db->exec("SET CHARACTER SET utf8");
				    
				    	
foreach($out as $key => $value) 
{
				    	
				    		
$sql  = "INSERT INTO `stdet` (`";
				    		
$sql .= implode("`, `", $keys);
				    		
$sql .= "`) VALUES (";
				    		
$sql .= implode(", ", array_fill(0, count($keys), "?"));
				    		
$sql .= ")";
				    		
$statement = $db->prepare($sql);
				    		
$statement->execute($value);
				    		
				   		
}
				   		
				   		
$message = "<div class='alert alert-success'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong>File has been UPLOADED succesfully....</strong> </div>";
				   		
				   	
}	
				    
				
}
				
			
}
			
		
} 
else 
{
			

$message = "<div class='alert alert-error'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Only .csv file format is allowed</strong> </div>";		
}
		
	
} 
else 
{
		
$message = "<div class='alert alert-error'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong>There was a problem with your file</strong> </div>";	
}
	

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
echo $message;
?>

	<div class="conatiner-fluid">
		<div class="row-fluid">
			<div class="span3 well">
				<ul class="nav nav-list">
					 <li class="nav-header">REPORT</li>
					 <li ><a href="index.php"><i class="icon-home"></i>Home</a></li>
						<li ><a href="dayoprtns.php"><i class="icon-list"></i>Transactions</a></li>
						<li><a href="branchdet.php"><i class="icon-search"></i>By Branch</a></li>
						<li><a href="stuacc.php"><i class="icon-user"></i>Student Account</a></li>
						<li class="divider"></li>
						<li class="nav-header">CAMPAIGN</li>
						<li ><a href="inti.php"><i class="icon-bullhorn"></i>Intimation</a></li>
						<li class="divider"></li>
						<li class="nav-header">SETTINGS</li>
						<li><a href="chngfee.php"><i class="icon-random"></i>Change fee structure</a></li>
						<li class="active"><a href="xclup.php"><i class="icon-upload"></i>Upload with Excel</a></li>
						<li><a href="useraccnt.php"><i class="icon-globe"></i>User Accounts</a></li>
						<li class="divider"></li>
						<li class="nav-header">SITE OPERATIONS</li>
						<li><a href="edit.php"><i class="icon-pencil"></i>OTP Check</a></li>
						<li><a href="edit.php"><i class="icon-pencil"></i>Student Status</a></li>
						<li><a href="edit.php"><i class="icon-pencil"></i>Recieved Payments</a></li>

					</ul>
			</div>
			<div class="span9 well well-large">
				<h3> Upload bulk students with .CSV set</h3>
				<p class="lead"> Choose a .csv file from your local computer to upload</p>
				<p>The format of .csv file should resemble the below table in Excel</p>
				<table class="table table-bordered">
					<tr>
						<thead>
							<th>stu_roll</th>
							<th>batch</th>
							<th>surname</th>
							<th>stu_name</th>
							<th>stu_father</th>
							<th>stu_branch</th>
							<th>stu_email</th>
							<th>stu_mob</th>
							<th>tutionfee</th>
						</thead>
					</tr>
					<tbody>
						<tr>
							 <td>09091a0xxx</td>
							 <td>09-13</td>
							 <td>surname</td>
							 <td>full name</td>
							 <td>father name</td>
							 <td>branch</td>
							 <td>Email ID</td>
							 <td>Mobile Number</td>
							 <td>Tution Fees</td>
						</tr>
					</tbody>


				</table>
				<p> Download the Excel Template of the csv file below</p>
				<a href="template/uploadtemplate.csv" class="btn btn-success"><i class="icon-download icon-white"></i> Download Template</a> <br/>
				<br/>

				<div >

				<h4>Upload Student Details</h4> 
				<form method="post" enctype="multipart/form-data">
  					<fieldset>
    					<legend>Multiple Student Upload</legend>
    					<label>Select CSV file</label>
    					<input type="file" name="file" id="file"/>
    					<span class="help-block">The file extension should be in .csv format</span>
    					<button type="submit" class="btn btn-primary fl_l" id="btn"><i class="icon-upload icon-white"></i> Upload</button>
	  				</fieldset>
				</form>
				
				</div>

				<div id="shwmessage">

				</div>

		</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
</body>
</html>
