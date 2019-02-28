<?php
//echo var_dump($_REQUEST);

$origem = isset($_POST['OriMail']) ? $_POST['OriMail'] : null ;
$destino = isset($_POST['DesMail']) ? $_POST['DesMail'] : null ;
$titulo = isset($_POST['TitMail']) ? $_POST['TitMail'] : null ;
$texto = isset($_POST['TexMail']) ? $_POST['TexMail'] : null ;
$forma = isset($_POST['ForMail']) ? $_POST['ForMail'] : 2;


$upload = '/var/www/html/netmarketing/tmp/';

$file = $_FILES['AneMail'];
var_dump($file);
//$uploadfile = $upload . basename($_FILES['AneMail']['name']);
//echo $uploadfile;

move_uploaded_file($file['tmp_name'], $upload.$file['name']);

$anexo = $upload.$file['name'];
echo $anexo;
echo '<pre>';
/*
if (move_uploaded_file('name'], $upload)) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Possível ataque de upload de arquivo!\n";
}

echo 'Aqui está mais informações de debug:';
print_r($_FILES);
*/
print "</pre>";




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

try {
    //Server settings
    $mail = new PHPMailer();
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = '172.31.2.24';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = false;                               // Enable SMTP authentication
    //$mail->Username = 'commandcenter@netservice.com.br';                 // SMTP username
    //$mail->Password = '';                           // SMTP password
    $mail->SMTPSecure = 'none';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to
    
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        )
    );
    
    //Recipients
    $mail->setFrom('commandcenter@netservice.com', 'Mailer');
    $mail->addAddress($destino, $destino);     // Add a recipient
    //$mail->addAddress('marcos.moraes@netservice.com.br');               // Name is optional
    $mail->addReplyTo($origem, 'Information');
    //$mail->addCC('rodrigo.dias@netservice.com.br');
    $mail->addBCC('marcos.moraes@netservice.com.br');
    
    
    
    //Attachments
    $mail->addAttachment($anexo);         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
    if ($forma == 1)
    {
    $url = 'http://localhost/netmarketing/tmp/';
    $urlcom = $url.$file['name'];
    echo $urlcom;
    $imagem = $urlcom;
    $mail->Body    = '<h1> Net Maketing System </h1> <br> <b>'.$texto.'</b><img src='.$imagem.'>';
    } else 
    {
        $mail->Body    = '<h1> Net Maketing System </h1> <br> <b>'.$texto.'</b>';
    }
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Net Maketing Teste ' . $titulo ;
    
                        ;
    
    $mail->AltBody = 'Não responder';
    
    
    
    $mail->send();
    
    echo 'Message has been sent';
    /*
    header('Location: http://localhost/netmarketing/pages/index.php?pg=email');
    */
    
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


?>