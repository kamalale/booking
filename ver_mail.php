
<?php
include('smtp/PHPMailerAutoload.php');

// Define an array of recipient email addresses
$recipients = array(
    $email,
);
$subject = 'New user verified';
$urls = "http://localhost/booking";
$message = '<a href="'.$urls.'">click here</a> to visit website';

// Call smtp_mailer function with the array of recipient email addresses
echo smtp_mailer($recipients, $subject, $message);

function smtp_mailer($recipients, $subject, $msg){
    $mail = new PHPMailer(); 
    $mail->IsSMTP(); 
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; 
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    //$mail->SMTPDebug = 2; 
    $mail->Username = "ranasimar3@gmail.com";
    $mail->Password = "gxvz pjsc shth vtfn";
    $mail->SetFrom("test_smtp@gmail.com", "Media booking");

    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->isHTML(true);                                  // Set email format to HTML

    
    // Add each recipient to the email
    foreach ($recipients as $recipient) {
        $mail->addAddress($recipient);
    }
    
    $mail->SMTPOptions=array('ssl'=>array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self_signed'=>false
    ));
    if(!$mail->Send()){
        return $mail->ErrorInfo;
    }else{
          header("Location: http://localhost/booking");

    }
}
?>
