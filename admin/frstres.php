<?php
include "../connect/connects.php";
if(empty($_POST['rollnum'])== true)
{
die();
}

$stu_roll = $_POST['rollnum'];
$first_query = mysql_query("SELECT * from stud1 WHERE `stu_roll` = '$stu_roll' ");
$first = mysql_fetch_array($first_query);
$second_query = mysql_query("SELECT * from stud2 WHERE `stu_roll` = '$stu_roll' ");
$second = mysql_fetch_array($second_query);
$third_query = mysql_query("SELECT * from stud3 WHERE `stu_roll` = '$stu_roll' ");
$third = mysql_fetch_array($third_query);
$four_query = mysql_query("SELECT * from stud4 WHERE `stu_roll` = '$stu_roll' ");
$four = mysql_fetch_array($four_query);
$stdet_query = mysql_query("SELECT * from stdet WHERE `stu_roll` = '$stu_roll'");
$stdet = mysql_fetch_array($stdet_query);
$rec_query=mysql_query("SELECT * FROM receipt WHERE `stu_roll` = '$stu_roll'");

?>
<div class ="well">
<table class="table">
<tr><td>Branch: <?php echo "<b>".$stdet['stu_branch']."</b>";?></td><td>Name: <?php echo "<b>".$stdet['stu_name']."</b>";?></td>
<td>Account ID: <?php echo "<b>".$stdet['accid']."</b>";?></td></tr>
</table>
</div>
<div class="row-fluid">
	<div class="span3 well" id="first">
	<center><h4>FIRST YEAR</h4></center>
	<table class="table table-bordered">
						<tr>
							<td><b>JNTU</b></td>
							<td><?php
							if($first['jntu'] == 0)
								echo "<i class=icon-remove></i>";
							else
								echo $first['jntu'];
							?></i></td>
						</tr>
						<tr>
							<td><b>PLACEMENT</b></td>
							<td><?php
							if($first['placement'] == 0)
								echo "<i class=icon-remove></i>";
							else
								echo $first['placement'];
							?></td>
						</tr>
						<tr>
							<td><b>BUS</b></td>
							<td><?php
							if($first['bus'] == 0)
								echo "<i class=icon-remove></i>";
							else
								echo $first['bus'];
							?></td>
		</tr>
					<tr>
							<td><b>TUTION</b></td>
							<td><?php
							if($first['tutionfee'] == 0)
								echo "<i class=icon-remove></i>";
							else
								echo $first['tutionfee'];
							?></td>
		</tr>
	</table>
					
	</div>
					<div class="span3 well" id="second">
						<center><h4>SECOND YEAR</h4></center>
	<table class="table table-bordered">
						<tr>
							<td><b>JNTU</b></td>
							<td><?php
							if($second['jntu'] == 0)
								echo "<i class=icon-remove></i>";
							else
								echo $second['jntu'];
							?></i></td>
						</tr>
						<tr>
							<td><b>PLACEMENT</b></td>
							<td><?php
							if($second['placement'] == 0)
								echo "<i class=icon-remove></i>";
							else
								echo $second['placement'];
							?></td>
						</tr>
						<tr>
							<td><b>BUS</b></td>
							<td><?php
							if($second['bus'] == 0)
								echo "<i class=icon-remove></i>";
							else
								echo $second['bus'];
							?></td>
		</tr>
					<tr>
							<td><b>TUTION</b></td>
							<td><?php
							if($second['tutionfee'] == 0)
								echo "<i class=icon-remove></i>";
							else
								echo $second['tutionfee'];
							?></td>
		</tr>
	</table>
					</div>
					<div class="span3 well" id="third">
						<center><h4>THIRD YEAR</h4></center>
	<table class="table table-bordered">
						<tr>
							<td><b>JNTU</b></td>
							<td><?php
							if($third['jntu'] == 0)
								echo "<i class=icon-remove></i>";
							else
								echo $third['jntu'];
							?></i></td>
						</tr>
						<tr>
							<td><b>PLACEMENT</b></td>
							<td><?php
							if($third['placement'] == 0)
								echo "<i class=icon-remove></i>";
							else
								echo $third['placement'];
							?></td>
						</tr>
						<tr>
							<td><b>BUS</b></td>
							<td><?php
							if($third['bus'] == 0)
								echo "<i class=icon-remove></i>";
							else
								echo $third['bus'];
							?></td>
		</tr>
					<tr>
							<td><b>TUTION</b></td>
							<td><?php
							if($third['tutionfee'] == 0)
								echo "<i class=icon-remove></i>";
							else
								echo $third['tutionfee'];
							?></td>
		</tr>
	</table>
					</div>
					<div class="span3 well" id="four">
					<center><h4>FINAL YEAR</h4></center>
	<table class="table table-bordered">
						<tr>
							<td><b>JNTU</b></td>
							<td><?php
							if($four['jntu'] == 0)
								echo "<i class=icon-remove></i>";
							else
								echo $four['jntu'];
							?></i></td>
						</tr>
						<tr>
							<td><b>PLACEMENT</b></td>
							<td><?php
							if($four['placement'] == 0)
								echo "<i class=icon-remove></i>";
							else
								echo $four['placement'];
							?></td>
						</tr>
						<tr>
							<td><b>BUS</b></td>
							<td><?php
							if($four['bus'] == 0)
								echo "<i class=icon-remove></i>";
							else
								echo $four['bus'];
							?></td>
		</tr>
					<tr>
							<td><b>TUTION</b></td>
							<td><?php
							if($four['tutionfee'] == 0)
								echo "<i class=icon-remove></i>";
							else
								echo $four['tutionfee'];
							?></td>
		</tr>
	</table>
					</div>
				</div>
<div class = "well">
	<p class="lead">Transactions made by <?php echo "<b>".$stdet['stu_name']."</b>";?></p>
	<table class=" table table-bordered">
	<tr>
		<thead>
			<th>Date</th>
			<th>Academic Year</th>
			<th>Jntu</th>
			<th>Palcement</th>
			<th>Bus</th>
			<th>Tution</th>
			<th>Total</th>
			<th>Receipt</th>
			<th>Pay Method</th>
		</thead>
	</tr>
	<?php
		while($rec = mysql_fetch_array($rec_query))
		{
			echo "<tr><td>".$rec['date']."</td>";
			if($rec['accyr'] == "fy")
				$accyr = "First";
			else if($rec['accyr'] == "sy") $accyr = "Second";
			else if($rec['accyr'] == "ty") $accyr = "Third";
			else $accyr = "Final";
			echo "<td>".$accyr."</td>";
			if(empty($rec['jntu'])===true) echo "<td><i class=icon-remove></i></td>";
			else echo "<td>".$rec['jntu']."</td>";
			if(empty($rec['placement'])===true) echo "<td><i class=icon-remove></i></td>";
			else echo "<td>".$rec['placement']."</td>";
			if(empty($rec['bus'])==true) echo "<td><i class=icon-remove></i></td>";
			else echo "<td>".$rec['bus']."</td>";
			if(empty($rec['tutionfee'])==true) echo "<td><i class=icon-remove></i></td>";
			else echo "<td>".$rec['tutionfee']."</td>";
			echo "<td>".$rec['total']."</td><td><a href=../".$rec['path'].">Download</td><td>".$rec['payopt']
."</td></tr>";



		}
	?>
	</table>

	

</div>
<div class = "well">
	<p class="lead">Delete all the records of <?php echo "<b>".$stdet['stu_name']."</b>";?></p>
	<div class="alert alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>Warning!</h4>
  Deleting Student Records can't be UNDONE , Proceed to delete only after cross checking all the transactions once<br/>
  You can also backup your DATABASE for any cause that could be happend..... <br/>
  Go for DBOPERATIONS in admin settings and select BACKUP...

</div>
<div>
	<form method="post">
		<input type=hidden name="roll" value="<?php echo $stu_roll;?>">
	<input type="submit" class= "btn btn-large btn-block btn-danger" name="sub" value="Delete All RECORDS of <?php echo $stdet['stu_name'];?>">
</form>
</div>
