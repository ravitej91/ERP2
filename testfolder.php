<?php
$roll = "receipts/09091a0562";
if(file_exists($roll))
echo "sorry";
else
	mkdir($roll,0777);

?>