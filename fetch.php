<html>
<head>
</head>
<body>

<?php
include "connect/connects.php";
if(empty($_POST['stdid'])==true)
{
	die("ID must be provided");
}
			$curr = $_POST['stdid'];
			$curr=strtolower($curr);
			$check  = mysql_query("SELECT * FROM stdet WHERE stu_roll='$curr'");
			$res = mysql_fetch_assoc($check);
			if($curr != $res["stu_roll"])
			{
			  echo "<center><h2>No Data Exists With Provided Value</h2>";
			  echo "<h5>Want to Add a Student click the below button</h5>";
			  echo "<form action=add.php method=post><input type=submit value=ADD></form>";
			  }
			  else
			  {
			echo "<center><b>Student Roll Number :".$res["stu_roll"]."<br/><br/>";
			echo "Student Name        : ".$res["stu_name"]."<br/><br/>";
			echo "Father Name         : ".$res["stu_father"]."<br/><br/>";
			echo "Branch              :".$res["stu_branch"]."<br/><br/>";
			echo "Email               :".$res["stu_email"]."<br/><br/>";
			echo "Mobile Number       : ".$res["stu_mob"]."</b><br/></center>";
			echo "<center><h2>Student Matches...</h2>";
			  echo "<h5>Want to Proceed or Change(press ESC)</h5>";
			  echo "<form action=details.php method=post><input type=hidden name=stdid value= $res[stu_roll] ><input type=submit value=PROCEED autofocus=autofocus></form>";
			
			}
			?>
			<form action="home.php" ><input type=submit value="close"></form>
</body>
</html>