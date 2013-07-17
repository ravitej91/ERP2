<?php
if(!isset($_POST['sldate']))
{
	die();
}
include "../connect/connects.php";
include "includes/cnvrtnum2wrdsfun.php";

$sldate = $_POST['sldate'];
$sl = explode("-",$sldate);
$day = $sl[0];
$month = $sl[1];
$year = $sl[2];
$mytime = date("d-M-Y", mktime(0, 0, 0, $month, $day, $year));
echo "<p class='lead'>Transactions for the Date :".$mytime."</p>";
$temp = mysql_query("SELECT `accid`,`stu_roll`,`total`,`payopt` from receipt WHERE `date` = '$mytime'");
					echo "<table class='table table-bordered' width='100%'>
					<tr>
					<thead>
					<th>#</th>
					<th>Account Id</th>
					<th>Student Roll</th>
					<th>Total</th>
					<th>DD / Cash</th>
					</thead></tr>";
					$i=1;
					$tot = 0;
					while($row = mysql_fetch_array($temp))
					{
						echo "<tr><td>".$i."</td><td>".$row['accid']."</td><td>".$row['stu_roll']."</td><td>".$row['total']."</td><td>".$row['payopt']."</td></tr>";
						$i = $i+1;
						$tot = $tot+$row['total'];
					}
					echo "</table>";
					echo "<center><h5>Total Amount: <img src='../images/rupees.png'>.".$tot."</h5></center>";
					$words = convert_number_to_words($tot);
					echo "<b>Total amount in words : \"".$words."</b>\"";
?>