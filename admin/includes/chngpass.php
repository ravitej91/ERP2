<?php
if(isset($_REQUEST['submitted']))
{
  $currpass = $_REQUEST['currpass'];
  $newpass = $_REQUEST['newpass'];
  $cnfrmpass = $_REQUEST['cnfrmpass'];
  if($newpass === $cnfrmpass)
  {
    $currpass = md5($currpass);
    $query_query = mysql_query("SELECT `password` from users where `username` = 'admin'");
    $query = mysql_fetch_array($query_query);

    if($currpass === $query['password'])
    {
      $newpass = md5($newpass);
      $chng = mysql_query("UPDATE users SET `password` = '$newpass'");
      echo "<div class='alert alert-success'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong> Password Changed Succesfully......</strong> </div>";
    }
    else
    {
      echo "<div class='alert alert-error'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong> The Current password you entered is Invalid....</strong> </div>";
    }

  }
  else
  {
    echo "<div class='alert alert-error'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong> The new password's doesn't match.....</strong> </div>";
  }
}
?>




<div id="chngModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel">Change Admin Password</h3>
  </div>
  <div class="modal-body">
    <p>Change Login Password here......</p>
    <h3>Authentication</h3>
    <form class="form-horizontal" method=post>
  <div class="control-group">
    <label class="control-label" for="currpass">Current Password</label>
    <div class="controls">
      <input type="password" required="required" id="currpass" name="currpass">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="newpass">New Password</label>
    <div class="controls">
      <input type="password" required="required" id="newpass" name="newpass">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="cnfrmpass">Confirm Password</label>
    <div class="controls">
      <input type="password" required="required" id="cnfrmpass" name="cnfrmpass">
    </div>

  </div>
<center><button type="submit" class="btn" name="submitted">Submit</button></center>
</form>
    </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>