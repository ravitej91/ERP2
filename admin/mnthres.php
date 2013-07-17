<?php
if(!isset($_POST['slmonth']))
{
	die();
}
include "../connect/connects.php";
include "includes/cnvrtnum2wrdsfun.php";
$slmonth = $_POST['slmonth'];
$sl = explode("-",$slmonth);
//print_r($sl);
$month = $sl[0];
$year = $sl[1];

$mytime = date("M", mktime(0, $month));
echo "<p class='lead'>Transactions in the Moth of : ".$mytime."-".$year."</p>";
$temp = mysql_query("SELECT `accid`,`stu_roll`,`total`,`payopt` from receipt WHERE `month` = '$mytime' and `year` = '$year'");
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