<?php
$to = 'ranasimar3@gmail.com'; 
$from = 'sender@email.com'; 
$fromName = 'Sender_Name'; 
 
$subject = "Send Text Email with PHP by CodexWorld"; 
 
$message = "First line of text\nSecond line of text"; 
 
// Additional headers 
$headers = 'From: '.$fromName.'<'.$from.'>'; 
 
// Send email 
if(mail($to, $subject, $message, $headers)){ 
   echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.'; 
}