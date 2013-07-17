<?php
		$id ="bb4a85828b1";
		$from = "RGMERP";
		$to = "nagavenky86@gmail.com";
		$sub= urlencode("Just to check");
		$body = urlencode("Hai this is to check and you can also send reply to this mail and if in spam please mark it as safe");
		$adress = "http://run.orangeapi.com/mail/sendMail.xml";
		$response = file_get_contents($adress . "?id=" . $id . "&from=" . $from . "&to=" . $to . "&subject=" . $sub . "&body=" . $body);

// get and display the status response message from the API call
$xml=simplexml_load_string($response);
echo($xml->status->status_code . " - " . $xml->status->status_msg);
?>