<?php
session_start();
include "connect/connects.php";
if(!isset($_SESSION['user_id']))
{
	
	die("Login First to use this page <br/> <a href=index.php> LOGIN</a>");
}
?>
<?php
	//Values to be processed
	$roll = $_POST['rollnum'];
	$month = date("M");
	$yr = date("Y");
	$accyr= $_POST['yr'];
	$cb = unserialize($_POST['cb']);
	//print_r ($cb);
	$rbus= $_POST['rbus'];
	$date = date("d-M-Y");
	$day = date("d");
	$payopt = $_POST['payopt'];
	if($payopt == "DD")
		$dd = $_POST['dd'];
	$total = $_POST['total'];
	//database Operations
	$fee_part=mysql_query("select * from def where `id`=1");
	$fee= mysql_fetch_assoc($fee_part);
	$jfee=$fee['jfee'];
	$pfee = $fee['pfee'];
	$bfeek = $fee['bfeek'];
	$bfeen = $fee['bfeen'];
	$dir_path= "receipts/".$roll;
	if(!file_exists($dir_path))
		mkdir($dir_path);
	$rdm = rand(10,200);
	$pname = $roll."_".$rdm."_".$date.".pdf";
	$path = $dir_path."/".$pname;
	$temp_query = mysql_query("select `accid` from stdet where `stu_roll` = '$roll'");
	$temp = mysql_fetch_array($temp_query) ;
		$accid= $temp['accid'];
	mysql_query("INSERT into receipt(accid,stu_roll,date,day,month,year,accyr,path,total) VALUES('$accid','$roll','$date','$day','$month','$yr','$accyr','$path','$total')");
	$rcid=mysql_query("SELECT MAX(`rc_id`) FROM receipt where `stu_roll` = '$roll'");
	$rcid_fetch = mysql_fetch_array($rcid);
	$rc_id = $rcid_fetch['MAX(`rc_id`)'];
	foreach($cb as $c)
	{
		if($c=='jf')
		{
									mysql_query("UPDATE receipt set `jntu` = '$jfee' where `rc_id` = '$rc_id'  ");
									}
									if($c == 'pf')
									{
										mysql_query("UPDATE receipt set `placement` = '$pfee' where `rc_id` = '$rc_id'");
									}
									if($c == 'bf')
									{
										if($rbus == 'bfeen') 
											{
												mysql_query("UPDATE receipt set `bus` = '$bfeen' where `rc_id` = '$rc_id'");
												
											}
										else
										{ 
											mysql_query("UPDATE receipt set `bus` = '$bfeek' where `rc_id` = '$rc_id'");
											
										}

									}
									if($c == 'tf')
									{
										$table_name="stdet";
									$stdid = $roll;
									$tuffees = mysql_query("SELECT tutionfee from $table_name where `stu_roll`='$stdid' ");
									$tuffees = mysql_fetch_assoc($tuffees);
									mysql_query("UPDATE receipt set `tutionfee` = '$tuffees[tutionfee]' where `rc_id` = '$rc_id'");
									}	
								}
				if(!empty($dd)==true)
				{
					mysql_query("UPDATE receipt set `payopt` = '$dd' where `rc_id` = '$rc_id'");
				}
				else
				{
					mysql_query("UPDATE receipt set `payopt` = 'CASH' where `rc_id` = '$rc_id'");	
				}
				 //Updating Academic Year tables
				if($accyr==="fy")
				{
					foreach($cb as $c)
								{
									if($c=='jf')
									{
									mysql_query("UPDATE stud1 set `jntu` = '$jfee',`jdate` = '$date'  where `stu_roll` = '$roll'");
									}
									if($c == 'pf')
									{
										mysql_query("UPDATE stud1 set `placement` = '$pfee',`pdate`='$date' where `stu_roll` = '$roll'");
									}
									if($c == 'bf')
									{
										if($rbus == 'bfeen') 
											{
												mysql_query("UPDATE stud1 set `bus` = '$bfeen',`bdate` = '$date' where `stu_roll` = '$roll'");
												
											}
										else
										{ 
											mysql_query("UPDATE stud1 set `bus` = '$bfeek',`bdate` = '$date' where `stu_roll` = '$roll'");
											
										}

									}
									if($c == 'tf')
									{
										mysql_query("UPDATE stud1 set `tutionfee` = '$tuffees[tutionfee]',`tdate`='$date' where `stu_roll` = '$roll'");
									}	
								}

				}
								else if($accyr==="sy")
								{
									foreach($cb as $c)
								{
									if($c=='jf')
									{
									mysql_query("UPDATE stud2 set `jntu` = '$jfee',`jdate` = '$date'  where `stu_roll` = '$roll'");
									}
									if($c == 'pf')
									{
										mysql_query("UPDATE stud2 set `placement` = '$pfee',`pdate`='$date' where `stu_roll` = '$roll'");
									}
									if($c == 'bf')
									{
										if($rbus == 'bfeen') 
											{
												mysql_query("UPDATE stud2 set `bus` = '$bfeen',`bdate` = '$date' where `stu_roll` = '$roll'");
												
											}
										else
										{ 
											mysql_query("UPDATE stud2 set `bus` = '$bfeek',`bdate` = '$date' where `stu_roll` = '$roll'");
											
										}

									}
									if($c == 'tf')
									{
										mysql_query("UPDATE stud2 set `tutionfee` = '$tuffees[tutionfee]',`tdate`='$date' where `stu_roll` = '$roll'");
									}	
								}									
							}
								else if($accyr==="ty")
								{
									foreach($cb as $c)
								{
									if($c=='jf')
									{
									mysql_query("UPDATE stud3 set `jntu` = '$jfee',`jdate` = '$date'  where `stu_roll` = '$roll'");
									}
									if($c == 'pf')
									{
										mysql_query("UPDATE stud3 set `placement` = '$pfee',`pdate`='$date' where `stu_roll` = '$roll'");
									}
									if($c == 'bf')
									{
										if($rbus == 'bfeen') 
											{
												mysql_query("UPDATE stud3 set `bus` = '$bfeen',`bdate` = '$date' where `stu_roll` = '$roll'");
												
											}
										else
										{ 
											mysql_query("UPDATE stud3 set `bus` = '$bfeek',`bdate` = '$date' where `stu_roll` = '$roll'");
											
										}

									}
									if($c == 'tf')
									{
										mysql_query("UPDATE stud3 set `tutionfee` = '$tuffees[tutionfee]',`tdate`='$date' where `stu_roll` = '$roll'");
									}	
								}
								}
								else 
								{
									foreach($cb as $c)
								{
									if($c=='jf')
									{
									mysql_query("UPDATE stud4 set `jntu` = '$jfee',`jdate` = '$date'  where `stu_roll` = '$roll'");
									}
									if($c == 'pf')
									{
										mysql_query("UPDATE stud4 set `placement` = '$pfee',`pdate`='$date' where `stu_roll` = '$roll'");
									}
									if($c == 'bf')
									{
										if($rbus == 'bfeen') 
											{
												mysql_query("UPDATE stud4 set `bus` = '$bfeen',`bdate` = '$date' where `stu_roll` = '$roll'");
												
											}
										else
										{ 
											mysql_query("UPDATE stud4 set `bus` = '$bfeek',`bdate` = '$date' where `stu_roll` = '$roll'");
											
										}

									}
									if($c == 'tf')
									{
										mysql_query("UPDATE stud4 set `tutionfee` = '$tuffees[tutionfee]',`tdate`='$date' where `stu_roll` = '$roll'");
									}	
								}
								}
								//echo "hai";
								// Data Base operations for sms 
								$sms_query = mysql_query("SELECT * from stdet WHERE `stu_roll`= '$roll'");
								$sms = mysql_fetch_array($sms_query);
								$msg_query = mysql_query("SELECT * from receipt where `rc_id` = '$rc_id'");
								$msg = mysql_fetch_array($msg_query);




								//end of database operations
							//Code to Send SMS
		$ch = curl_init();
		$user="ravi-tej@live.com:diwakar007";
		$receipientno=$sms['stu_mob']; 
		$senderID="TEST SMS"; 
		$msgtxt="Roll No.:".$roll." with ACCID:".$sms['accid']." has paid the total amount of: ".$msg['total']."on date = ".$msg['date']."%0a~RGMERP"; 
		curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt&state=2");
		$buffer = curl_exec($ch);
		$datetoday = date("d-M-Y");
		if(empty ($buffer))
		{ 
			
			$stat = 0;
			mysql_query("insert into smsfee(accid,stu_roll,total,date,state,jobid,status) values('$sms[accid]','$roll','$msg[total]','$msg[date]','$stat')");
		 }
		else
		{ 	
			$r= explode(",",$buffer);
			$stat =1;
			mysql_query("insert into smsfee(accid,stu_roll,total,date,state,jobid,status) values('$sms[accid]','$roll','$msg[total]','$msg[date]','$stat','$r[1]','$r[0]')"); } 
		curl_close($ch);
		//End of the SMS code
		$_SESSION['rc_id']=$rc_id;
		
//header('location:home.php');
							
						
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">        
	<link type="text/css" rel="stylesheet" href="admin/css/bootstrap.css">
	 <link type="text/css" rel="stylesheet" href="admin/css/bootstrap-responsive.css">
<link type="text/css" rel="stylesheet" href="css/datepicker.css">

</head>
<body>
<div class = "well">
<div calss="hero-unit">
	<div> 
	<h1> 

	</div>
	<?php if($_SESSION['user_id']!=1) { ?>
   <h1><a href="home.php">Make Another payment - HOME</a></h1>
   <?php } else { ?>

	<h1><a href="home.php">HOME</a></h1>
	<br>
	<br>
	<br>
	<h1><a href="admin">ADMIN PANEL</a></h1>
	<?php } ?>
</div>
</div>
</body>
<script>

		window.open("rec.php");
		</script>
		