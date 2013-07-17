<?php
if(isset($_REQUEST['usrsubmit']))
{
  if(empty($_REQUEST['usrname']))
    echo "<div class='alert alert-error'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong> UserName must not be empty</strong> </div>";
  else if(empty($_REQUEST['pass']))
    echo "<div class='alert alert-error'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong> Password must not be empty</strong> </div>";
  else
  {
    $usrname = $_REQUEST['usrname'];
    $pass = $_REQUEST['pass'];
    $pass = md5($pass);
    $ins_query = mysql_query("INSERT into `users`(username,password,active) VALUES('$usrname','$pass',1)");
    echo "<div class='alert alert-success'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong> User with name ".$usrname." added successfully</strong> </div>";
  }
}
if(isset($_REQUEST['dct']))
              {
                $name = $_REQUEST['srname'];
                mysql_query("UPDATE `users` SET `active`=0 WHERE `username` = '$name'");
              }
              if(isset($_REQUEST['act']))
              {
                $name = $_REQUEST['srname'];
                mysql_query("UPDATE `users` SET `active`=1 WHERE `username` = '$name'");
              }
              if(isset($_REQUEST['delt']))
              {
                $name = $_REQUEST['srname'];
                mysql_query("DELETE FROM `users` WHERE `username` = '$name'");
              }

?>