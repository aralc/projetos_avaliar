<?php



echo "seender";
//echo var_dump($_REQUEST);

//$origem = $_POST['OriMail'];
//$destino = $_POST['DesMail'];
//$titulo = $_POST['TitMail'];
//$texto = $_POST['TexMail'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

try {
    //Server settings
    $mail = new PHPMailer();
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'bacteriadebits@gmail.com';                 // SMTP username
    $mail->Password = 'Senha@123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    
    //Recipients
    $mail->setFrom('marcos.moraes@netservice.com.br', 'Mailer');
    $mail->addAddress('mthiago.info@gmail.com', 'Joe User');     // Add a recipient
    $mail->addAddress('marcos.moraes@netservice.com.br');               // Name is optional
    $mail->addReplyTo('marcos.moraes@netservice.com.br', 'Information');
    $mail->addCC('marcos.moraes@netservice.com.br');
    $mail->addBCC('marcos.moraes@netservice.com.br');
    
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>