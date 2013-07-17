<?php
include "connect/connects.php";
if(empty($_POST['yr'])==true)
die();
$yr = $_POST['yr'];
//echo "<br>HELLO<br/>";
if($yr == "fy") $table = "stud1";
else if($yr == "sy") $table = "stud2";
else if($yr == "ty") $table = "stud3";
else $table = "stud4";
//echo $table;
$roll = $_POST['roll'];
$temp_query = mysql_query("SELECT * from $table WHERE `stu_roll` = '$roll' ");
$temp = mysql_fetch_array($temp_query);
?>
<h2>Select the FEE to be Paid: </h2>
						<table  border="0" width="100%">
							<tr>

						<td><?php if(empty($temp['jntu'])==true)
						{
						echo "<input type=checkbox name=cb[] data-mincheck=1 value=jf id=jfee><b>Jntu Fees</b></td>";

						}
						else
						{
							echo "<input type=checkbox name=cb[] data-mincheck=1 value=jf id=jfee DISABLED><span style=color:red><b>Jntu Fees</b></span></td>";							
						}?>
						<td>
							<?php if(empty($temp['placement'])==true)
						{
						echo "<input type=checkbox name=cb[] value=pf id=pfee><b>Placement Fees</b></td>";

						}
						else
						{
							echo "<input type=checkbox name=cb[] value=pf id=pfee DISABLED><span style=color:red><b>Placement Fees</b></span></td>";							
						}?>
							
						</tr>
						<tr>
							<td>
								<?php if(empty($temp['bus'])==true)
						{
						echo "<input type=checkbox name=cb[]  value=bf id='bfee'><b>Bus Fees</b>";

						}
						else
						{
							echo "<input type=checkbox name=cb[] value=bf id=bfee DISABLED><span style=color:red><b>Bus Fees</b></span></td>";							
						}?>
						</td>
						<td>
							<?php if(empty($temp['tutionfee'])==true)
						{
						echo "<input type=checkbox name=cb[] value=tf id=tfee><b>Tution Fees</b>";

						}
						else
						{
							echo "<input type=checkbox name=cb[] value=tf id=tfee DISABLED><span style=color:red><b>Tution Fees</b></span></td>";							
						}?>
							</td>
					</tr>
				</table>

				<script type="text/javascript">
		$(document).ready(function() 
		{

	$('#page_effect').fadeIn(2000);
			$('#jfees').hide();
			$('#pfees').hide();
			$('#bfeesk').hide();
			$('#bfeesn').hide();
			$('#bf').hide();
			$('#totk').hide();
			$('#totn').hide();
			$('#alpha').hide();
			$('#tfees').hide();
			$('#jfee').click(function() 
			{
								$('#jfees').toggle();
			});
			$('#pfee').click(function() 
			{
				$('#pfees').toggle();
			});
			$('#tfee').click(function() 
			{
				$('#tfees').toggle();
			});
			
			$('#bfee').click(function() 
			{
				$('#alpha').toggle();
				$('#bfeesn').toggle();
				$('#bfeesk').hide();
			});
			$('#rbusk').click(function() 
			{
				$('#bfeesk').show();
				$('#bfeesn').hide();
			});
			$('#rbusn').click(function() 
			{
				$('#bfeesn').show();
				$('#bfeesk').hide();
			});
		
		});
		



	</script>