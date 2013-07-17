<?php
require('backup_restore.class.php');
$dbname =  'dbbckup/dbbackup_' . date("d.m.Y_H.i.s") . '_' .'.sql';

$newexport = new backup_restore ('localhost','erp','root','','*',$dbname);


if(isset($_REQUEST['backup'])){

//call of backup function
$export=$newexport -> backup ();
echo $export;
}
if(isset($_REQUEST['restore'])){
$dbres = $_REQUEST['fname'];
$resname = 'dbbckup/'.$dbres;
//echo $resname;
$newimport = new backup_restore ('localhost','erp','root','','*',$resname);
//call of restore function
$message=$newimport -> restore ();
echo $message;
}
if(isset($_REQUEST['delete'])){
  $delname = $_REQUEST['fname'];
if (!is_dir("dbbckup/" . $delname)) {
unlink("dbbckup/" . $delname);
}
echo "<div class='alert alert-info'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong> The BACKUP is deleted</strong> </div>";
}

?>


<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel">DB Restore & Backup</h3>
  </div>
  <div class="modal-body">
    <p>To secure data of the application, you can perform backup of the current database by selecting "BACKUPNOW" button below</p>
    <p>You can also Restore the backups of database previously created</p>
    <ul class="dropdown-menu">
     <li class="divider"></li>
   </ul>
    <h3>Backup</h3>
    <p>Today's date: <?php echo "<b>".date("d.m.Y")."</b>";?></p>
    <p>Backup database for the current DATA</p>
    <form method=post>
      <input type="submit" class="btn btn-primary"  name="backup" value="BackUp Now">
    </form>
    <h3>Restore</h3>
    <table class="table">
      <tr>
        <thead>
          <th>File Name</th>
          <th>Date</th>
          <th>Time</th>
          <th>Restore</th>
          <th>Delete</th>
        </thead>
      </tr>
   <?php
// List the files
$dir = opendir ("./dbbckup"); 
$i=0;
while (false !== ($file = readdir($dir))) { 

  // Print the filenames that have .sql extension
  if (strpos($file,'.sql',1)) { 
    $i++;

  // Get time and date from filename
  $date = substr($file, 9, 10);
  $time = substr($file, 20, 8);

  // Remove the sql extension part in the filename
  $filenameboth = str_replace('.sql', '', $file);
  $currentname = "Backup_".$i;                      
  // Print the cells
    print("<tr>\n");
    print("  <td>" .$currentname."</td>\n");
    print("  <td>" .$date."</td>\n");
    print("  <td>" .$time."</td>\n");
    print("<td><form method=post>
      <input type='hidden' value= '". $file."' name ='fname'>
      <input type='submit' class='btn btn-small btn-primary'  name='restore' value='Restore'>
    </form></td>\n");
    print("<td><form method=post>
      <input type='hidden' value= '". $file."' name = 'fname'>
      <input type='submit' class='btn btn-small btn-warning'  name='delete' value='Delete'>
    </form></td>\n");
    print("</tr>\n");
  } 
} 
?>
</table></div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>