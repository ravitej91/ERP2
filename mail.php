<?php
$to       = 'tejasweets@gmail.com';
$subject  = 'Testing sendmail';
$message  = 'Hi,'.$name_mod.' you just received an email using sendmail!';
$headers  = 'From: tejasweets@gmail.com' . "\r\n" .
            'Reply-To: sender@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers)
  ?>