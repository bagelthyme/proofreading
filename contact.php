

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

// email goes from smtp to smtp, but include user email inside body

try { 
    $mail->SMTPDebug = 2;                                        
    $mail->isSMTP();                                             
    $mail->Host       = 'smtp.properedits.com;'; // smtp server address here                     
    $mail->SMTPAuth   = true;                              
    $mail->Username   = 'submissions';                  
    $mail->Password   = ''; // DON'T FORGET TO ADD THISZ                         
    $mail->SMTPSecure = 'tls';                               
    $mail->Port       = 587;   
  
    $mail->setFrom('submissions@properedits.com', 'Submissions'); // from smtp        
    $mail->addAddress('submissions@properedits.com'); // to smtp
    // $mail->addAddress('receiver2@gfg.com', 'Name'); 
       
    $mail->isHTML(true);                                   
    $mail->Subject = 'Subject'; 
    $mail->Body    = $_POST['message']; 
    // $mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
    $mail->send(); 
    echo "Mail has been sent successfully!"; 
} catch (Exception $e) { 
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
} 

?>