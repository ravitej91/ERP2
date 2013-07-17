<?php
if(!isset($_POST['branch']))
{
	die();
}
include "../connect/connects.php";
$branch = $_POST['branch'];
$feetype = $_POST['feetype'];
$accyr = $_POST['accyr'];
$payopt = $_POST['payopt'];
$batch = $_POST['batch'];
//echo $accyr;
//echo $feetype;
if($accyr === "First Year")
{

$table = "stud1";
}
else if($accyr === "Second Year")
$table = "stud2";
else if($accyr === "Third Year")
$table = "stud3";
else if($accyr === "Final Year")
$table = "stud4";
else
$table = "stdet";
if($payopt === "Not paid" )
$payopt = 0;
if($feetype === "JNTU")
{
$feetype = "jntu";
$date = "jdate";
}
else if($feetype === "PLACEMENT")
{
$feetype = "placement";
$date = "pdate";
}
else if($feetype === "BUS FEE")
{
	$date= "bdate";
$feetype = "bus";
}
else if($feetype === "TUTION FEE")
{
	$date = "tdate";
$feetype = "tutionfee";
}
else
{
$feetype = "nofeechk";
$date = "nodate";
}
$temp = evaluatefun($table,$branch,$batch,$payopt,$feetype,$date);
if($payopt === "Paid")
$qur = "PAID";
else
$qur = "NOT PAID";
echo "<b>The details for</b><br/>Batch: <b>".$batch."</b><br/>Accademic year: <b>".$accyr."</b><br/>Branch : <b>".$branch."</b><br/>Fee Type Selected: <b>".$_POST['feetype']."</b><br/>Query: <b>".$qur."</b><br/>";
echo "<table class='table table-bordered table-striped' width='100%'>
					<tr>
					<thead>
					<th>s.no</th>
					<th>ACCID</th>
					<th>Roll Number</th>
					<th>NAME</th>
					<th>Date</th>
					</thead></tr>";
					$i=1;
					while($row = mysql_fetch_array($temp))
					{
						if($feetype != "nofeechk")
						{
						echo "<tr><td>".$i."</td><td>".$row['accid']."</td><td>".$row['stu_roll']."</td><td>".$row['stu_name']."</td><td>".$row[$date]."</td></tr>";
						$i = $i+1;
						}
						else
						{
							echo "<tr><td>".$i."</td><td>".$row['accid']."</td><td>".$row['stu_roll']."</td><td>".$row['stu_name']."</td><td><i class=icon-remove></i></td></tr>";							
							$i = $i+1;
						}
					}
					echo"</table></div>";

function evaluatefun($table,$branch,$batch,$paidn,$feet,$date)
{
	if($paidn === "Paid")
	{
			if($branch != "All")
			{
				if($feet != "nofeechk")
				{
					$query = mysql_query("SELECT * from $table where `branch` ='$branch' and `batch` = '$batch' and $feet != 0 ");
					return $query;
				}
				else
				{
				$query = mysql_query("SELECT * from $table WHERE `branch`= '$branch' and `batch` = '$batch' and `jntu` != 0 and `bus` != 0 and `placement` != 0 and `tutionfee` != 0");
				return $query;
				}

			}
			else
			{
				if($feet != "nofeechk")
				{
					$query = mysql_query("SELECT * from $table where `batch` = '$batch' and $feet != 0 ");
					return $query;
				}
				else
				{
				$query = mysql_query("SELECT * from $table WHERE `batch` = '$batch' and `jntu` != 0 and `bus` != 0 and `placement` != 0 and `tutionfee` != 0");
				return $query;
				}
			}
		
	}
	else
	{
			if($branch != "All")
			{
				if($feet != "nofeechk")
				{
					$query = mysql_query("SELECT * from $table where `branch` ='$branch' and `batch` = '$batch' and $feet = 0 ");
					return $query;
				}
				else
				{
				$query = mysql_query("SELECT * from $table WHERE `branch`= '$branch' and `batch` = '$batch' and (`jntu` = 0 or `bus` = 0 or `placement` = 0 or `tutionfee` = 0)");
				return $query;
				}

			}
			else
			{
			if($feet != "nofeechk")
				{
					$query = mysql_query("SELECT * from $table where `batch` = '$batch' and $feet = 0 ");
					return $query;
				}
				else
				{
				$query = mysql_query("SELECT * from $table WHERE `batch` = '$batch' and `jntu` = 0 or `bus` = 0 or `placement` = 0 or `tutionfee` = 0");
				return $query;
				}
			}

		
	}


}
if($qur === "NOT PAID")
{
	$btnmsg = "Intimate Due Payment for ".$feetype;
	echo "<center><input type='button' class='btn btn-primary btn-big' value='".$btnmsg."' ></center>";
}
?>
