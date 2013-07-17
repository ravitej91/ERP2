<?php
class backup_restore{


		
    // Constructor
 	function __construct($dbhost,$database,$dbUser ,$dbPass ,$tables="*",$dbname ) {
 	   //let me collact all data before we start	
		$this->host = $dbhost;
 		$this->database = $database;
 		$this->user = $dbUser;
 		$this->pass = $dbPass ;
		$this->file = $dbname;
 		$this->tables =$tables;
	    $this->msg='';
	 	}
			
	// Connnect
	private function Connect() {
 		 mysql_connect($this->host, $this->user, $this->pass) or die(mysql_error());
		 mysql_select_db($this->database) or die(mysql_error());
 	}
	
	//Backup
	public function backup(){

		$this->Connect();
    
		//get list of the tables
			if($this->tables == '*')  {
			$this->tables = array();
			$result = mysql_query('SHOW TABLES');
			while($row = mysql_fetch_row($result))
			{
			$this->tables[] = $row[0];
			}
		}
		else  {
			$this->tables = is_array($this->tables) ? $this->tables : explode(',',$this->tables);
		}

        //processs each
			$return="";
		foreach($this->tables as $table)  {
		$result = @mysql_query('SELECT * FROM '.$table);
		$num_fields = @mysql_num_fields($result);    
		$return .= 'DROP TABLE '.$table.';rgmerp';
		$row2 = @mysql_fetch_row(@mysql_query('SHOW CREATE TABLE '.$table));		
	    $return .= "\n\n".$row2[1].";rgmerp\n\n";
	   
    
		while($row = @mysql_fetch_row($result))	{
        $return .= 'INSERT INTO '.$table.' VALUES(';
        for($j=0; $j<$num_fields; $j++) 
        {
          $row[$j] = addslashes($row[$j]);
          if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
          if ($j<($num_fields-1)) { $return.= ','; }
     
	    }
        $return .= ");rgmerp\n";
	}
 
    $return.="\n\n\n";

  }
	
	
	//Lets Write A file
			if (file_exists($this->file)) unlink($this->file);
			$handle = fopen($this->file,'w+');
			fwrite($handle,$return);
			fclose($handle);
  
  //Ohh Wait ,When we create backup. lets save this time in log file
	if (file_exists('backup_log.log')) unlink('backup_log.log');
	$hnd =fopen('backup_log.log','w+');
	fwrite($hnd,date("Y-m-d H:i:s"));
	fclose($hnd);
  
  
  //yeah its all done
	return "<div class='alert alert-success'> <button type='button' class='close' data-dismiss='alert'>&times;</button><i class='icon-ok icon'></i><strong> The database backup Successfully created</strong> </div>";
}

    //Restore
 	public function restore() {
		
			$this->Connect();
 	
			if (file_exists($this->file))
 			$lines = file($this->file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
			else {
			return "File is missing ,Please make backup";
			exit;
			}
			
 			$buffer = '';
 			
			foreach ($lines as $line) {				

 				// Skipping comments 
 				if (substr(ltrim($line), 0, 2) == '--')
 					continue; 							
					
					if (substr($line, -7) != ";rgmerp") {
 					// Add to buffer
 					$buffer .= $line;
 					// Next line
 					continue;
 				}
						
				// Skip lines containing EOL 
 				if (($line = trim($line)) == '')
 					continue;
				else
 					if ($buffer) {
 						$line = $buffer . $line;
 						// reset the buffer
 						$buffer = '';
 					}
 				// clean it 
				$line = trim($line,"rgmerp");
 				$line = substr($line, 0, -1);
				
				//// here we go
				$result = @mysql_query($line); 		
 				////
				
				if (!$result ) {				
				//check why ignoring ?
				//is it encounter with drop table ?
				//and table not in the database(already removed)
				
				if(strstr($line, "DROP TABLE")){
				//Encounter with DROP Table,but table already dropped.Don'nt worry countinue.
				 continue;				
				 }
						 
				 else{				
 				$this->msg =  mysql_error() ;	
				return $this->msg;
					break;
				}
					
 				}
				
 			}
			
			$this->msg ="<div class='alert alert-success'> <button type='button' class='close' data-dismiss='alert'>&times;</button><i class='icon-ok icon'></i><strong> The database RESTORED Successfully</strong></div>";			
			
			
		return $this->msg;
 	}
		

}




?>