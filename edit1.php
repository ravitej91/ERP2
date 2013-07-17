<?php
include "connect/connects.php";
							$roll = $_POST['stdid'];
							$check  = mysql_query("SELECT * FROM stdet WHERE stu_roll='$roll'");
							$rescount = mysql_affected_rows();
							if(!isset($rescount))
							{
								echo "<h3>No student exists with Given Roll Number</h3>";
								die();

							}
							else
							{
								$res = mysql_fetch_assoc($check);
								//echo $res['stu_roll'];
							}
						
						
?>
<html>
<head>
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
  <?php
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
        echo "<form action=editdet.php ><input type=submit value=close></form>";
      }
        else
        {?>

			</div>
			<div id="editdet">
							<form data-validate="parsley" method="post" name="det" action="update.php">
				<h3>Enter Student Details</h3><br/>
				
				<table  border="0"  style="background-color:#FFFFFF" width="100%" cellpadding="3" cellspacing="2">
	<tr>
		<td><label for="fullname">Student name:</label></td>
		<td><input type=text name= "stu_name" value = "<?php echo $res['stu_name'];?>" data-trigger="keyup" data-required="true" >
			Sur Name: <input type=text name= "surname" value = "<?php echo $res['surname'];?>">
		</td>
	</tr>
	<tr>
		<td>Student Roll No.:</td>
		
		<td><input type= text data-trigger="keyup"  name = "stu_roll" value = "<?php echo $res['stu_roll'];?>" data-required="true" data-minlength="10" data-maxlength="10"/></td>
	</tr>
	
	<tr>
		<td>Father name :</td>
		<td><input type= text data-trigger="keyup" name = "stu_father" value = "<?php echo $res['stu_father'];?>" data-required="true" /></td>
	</tr>
	<tr>
		<td>Branch:</td>
		<td><input type=text data-required="true" value = "<?php echo $res['stu_branch'];?>" name="stu_branch" >
					
				</select></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type=text value = "<?php echo $res['stu_email'];?>" data-trigger="keyup"  data-required="true"  name="stu_email" data-type="number" /></td>
	</tr>
	<tr>
		<td>Mobile:</td>
		<td>+91<input type= text name="stu_mob"  value = "<?php echo $res['stu_mob'];?>" data-trigger="keyup" data-required="true" data-type="number" data-rangelength="[10,10]"  /></td>
	</tr>
	<tr>
		<td>Tution Fee*</td>
		<td><input type= text name="tutionfee"  value = "<?php echo $res['tutionfee'];?>" data-trigger="keyup" data-required="true" data-type="number"  /></td>
	</tr>
</table>
<br/><center><input type="submit" class="btnstyle" name="submit"  value="submit" /></center>
				
			</form><?php } ?>
		<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/parsely.js"></script>

			</div>
</body>
			</html>