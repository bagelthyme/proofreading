<?php
echo "<p>making sure the form works so that it can be plugged up to email once ready to go truly live";
foreach ($_POST as $k => $v) {
    echo "<p>{$k} :: {$v}</p>";
}
?>

<!-- PHPMailer script for when there's an actual email to use -->
<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php';

// $mail = new PHPMailer(true);

// email goes from smtp to smtp, but include user email inside body

// try { 
//     $mail->SMTPDebug = 2;                                        
//     $mail->isSMTP();                                             
//     $mail->Host       = 'smtp.gfg.com;'; // smtp server address here                     
//     $mail->SMTPAuth   = true;                              
//     $mail->Username   = 'proof email here';                  
//     $mail->Password   = 'password here';                         
//     $mail->SMTPSecure = 'tls';                               
//     $mail->Port       = 587;   
  
//     $mail->setFrom('set user email', 'set user name'); // from smtp        
//     $mail->addAddress('receiver1@gfg.com'); // to smtp
//     $mail->addAddress('receiver2@gfg.com', 'Name'); 
       
//     $mail->isHTML(true);                                   
//     $mail->Subject = 'Subject'; 
//     $mail->Body    = 'HTML message body in <b>bold</b> '; 
//     $mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
//     $mail->send(); 
//     echo "Mail has been sent successfully!"; 
// } catch (Exception $e) { 
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
// } 

?>