<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require_once 'phpmailer/Exception.php';
// require_once 'phpmailer/PHPMailer.php';
// require_once 'phpmailer/SMTP.php';

// $mail = new PHPMailer(true);

// $alert = ''; 


// try{
// //   $mail->SMTPDebug = SMTP::DEBUG_SERVER;  // Enable verbose debug output
//   $mail->isSMTP();
//   $mail->Host = 'smtp.gmail.com';
//   $mail->STMPAuth = true;
//   $mail->Username = 'Ayah Imad';
//   $mail->Password = '';
//   $mail->SMTPSecure   = 'tls'; 
//   // $mail->STMPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//   $mail->Port = '587';
//   $mail->EMAIL_HOST_PASSWORD ="";

//   $mail->From = 'fighterforlifeever@gmail.com';
//   $mail->FromName = 'fighterforlifeever@gmail.com';
//   $mail->setFrom('fighterforlifeever@gmail.com');
//   $mail->addAddress('fighterforlifeever@gmail.com');

//   $mail->isHTML(true);
//   $mail->Subject = 'Message Received (Contact Page)';
//   $mail->Body   = '<h3>Name : $name  <br />Email: $email <br>Message : $visitor_message </h3>';
//   $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


//   $mail->send();
//   $alert = '<div class="alert-success">
//                <span>Message Sent! Thank you for contacting us.</span>
//   </div>';
// } catch (Exception $e){
//   $alert = '<div class="alert-error">
//                 <span>'.$e->getMessage().'</span>
//             </div>';
// }

// if(!$mail->send()) 
// {
// echo "Mailer Error: " . $mail->ErrorInfo; 
// } 
// else { echo "Message has been sent successfully"; 
// }
// if(!$mail->send()) 
// { 
// echo "Mailer Error: " . $mail->ErrorInfo; 
// } 
// else 
// { 
// echo "Message has been sent successfully"; 
// }

?>