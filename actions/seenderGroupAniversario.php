<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/SMTP.php';
    require '../class/classFuncionarios.php';
    require_once '../class/classDepartamentos.php';
    require_once('../class/classMensagens.php');
try 
    {
           //Server settings
            $mail = new PHPMailer();
            $mail->CharSet = "UTF-8";;
            $mail->SMTPDebug = 1;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = '172.31.2.25'; //antes final 24  // Specify main and backup SMTP servers
            $mail->SMTPAuth = false;                               // Enable SMTP authentication
            //$mail->Username = 'commandcenter@netservice.com.br';                 // SMTP username
            //$mail->Password = '';                           // SMTP password
            $mail->SMTPSecure = 'none';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 25;                                    // TCP port to connect to
            $mail->SMTPOptions = array
                                      (
                                        'ssl' => array
                                                        (
                                                        'verify_peer' => false,
                                                        'verify_peer_name' => false,
                                                        'allow_self_signed' => false
                                                        )
                                        );
     //Busca dados                                       
                    $funcionario = new Funcionario();
                    $fun = $funcionario->getAniDia();
                    var_dump($fun);
                if ($fun == null)
                    {
                     exit;
                    }
                    //Attachments
                   //$mail->addAttachment($anexo);         // Add attachments
                   //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                    $history = new Mensagenm();
                    $forma = 'grupo';
                        if ($forma == 'grupo')
                                {
                                $emailEnvio = 'marketing@netservice.com.br';
                                $emailEnvio .= ',ComunicacaoBrasil@netservice.com';
                                $tipoEnvio = "A";
                                $tipoAlvo = 'G';
                                $tipoMensagem = 'Aniversárantes Grupo';
                             // $mail->setFrom('commandcenter@netservice.com.br', 'marketing@netservice.com.br'); 24
                                $mail->setFrom('marketing@netservice.com.br', 'marketing@netservice.com.br');
                             //$mail->addAddress('marcos.moraes@netservice.com.br','NetService Marketing');     // Add a recipient
         
                       /*producao */
                        $mail->addReplyTo('marketing@netservice.com.br', 'marketing@netservice.com.br');
                        $mail->addCC('marketing@netservice.com.br');
                        $mail->addBCC('ComunicacaoBrasil@netservice.com');
                        /*producao */
         
                /* teste*/
                 //     $mail->addReplyTo('marketing@netservice.com', 'marketing@netservice.com');
                 //$mail->addCC('mthiago.info@gmail.com');
                //'$mail->addBCC('marcos.moraes@netservice.com.br');
                /* teste */

                 $urlCab = 'http://atendimento.netservice.com.br/img/cab_v3.png';
                 $urlRod = 'http://atendimento.netservice.com.br/img/rod_v3.png';
                 $dot = 'http://atendimento.netservice.com.br/img/dot_v3.png';
                $fundo = 'http://atendimento.netservice.com.br/img/bg.png';
                $diaAni = getdate();
                   
                    $mail->Body    = '<img src='.$urlCab.'><br>';
                    $mail->Body   .= '<img src='.$dot.' style="float:left;">'.$diaAni['mday'].'/'.$diaAni['mon'].'</b>';

                    
                    foreach ($fun as $f)
                        {
                        $mail->Body   .= '<p>'.ucwords(strtolower($f['Nome'])).'<br><b>';
                        
                        
                        $bAlt = new Departamnetos();
                        $alternativo = $bAlt->getAlternativos($f['CentroCusto']);
                        echo "teste 12<p>";
                        var_dump($alternativo);
                            if ($alternativo <> null)
                            {
                                echo "teste 123 ";
                                $departamento = $alternativo['Descricao'];
                                echo $alternativo['Descricao'];
                                echo $departamento;
                                
                            } else 
                            {
                                echo "teste 1234";
                                $departamento = $f['DescricaoCentroCusto'];
                                echo $departamento;
                            }
                           
                        
                        $mail->Body   .= ucwords(strtolower($departamento)).'</b><br></div>';
                        //$mail->Body   .= ucwords(strtolower($f['DescricaoCentroCusto'])).'</b><br></div>';
                        
                        }
                        $mail->Body   .= '<br><img src='.$urlRod.'>';
                        $mail->isHTML(true);                                  // Set email format to HTML
                        
                        
                    $mail->Subject = 'Aniversariante do dia  ' . $diaAni['mday'].'/'.$diaAni['mon'];
                        
                        //$mail->Subject = 'Aniversariante do dia  ' . '05'.'/'.'01';
                        
                        
            //      $mail->AltBody = 'Não responder';
                      $mail->send();
                      
                      $history->saveHistory($tipoEnvio, $tipoAlvo,$emailEnvio,$tipoMensagem);
                        echo 'Message has been sent';
                        $mail->clearBCCs();
                        $mail->clearCCs();
            /*      
             header('Location: http://localhost/netmarketing/pages/index.php?pg=email');
             */
         } 
       }   
            catch (Exception $e) 
                {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
                }
        
        //envio individual
        try 
            {
            
                
                
                
                $tipoEnvio = "A";
                $tipoAlvo = 'I';
                $tipoMensagem = 'Aniversárantes individual';
                
                
                
            foreach ($fun as $f)
            {
                $forma = 'indiv';
                echo $f['Email'];
                echo $f['Email2'];
                $email1 =  isset($f['Email']) ? $f['Email'] : 'marcos.moraes@netservice.com.br';

                $email2 = isset($f['Email2']) ? $f['Email2'] : 'marcos.moraes@netservice.com.br';
            
                if ($forma == 'indiv')
                {
                    $mail->setFrom('marketing@netservice.com.br', 'marketing@netservice.com.br');
                    $mail->addReplyTo('marketing@netservice.com', 'marketing@netservice.com');
                /* producao */ 
                    $mail->addAddress($email1,$f['Nome']); //trocar para $email1 = $f['Email'];
                    $mail->addAddress($email2,$f['Nome']);     // $email1 = $f['Email2'];
                /* Producao */                    
                    
                    $emailEnvio = $f['Email'];
                    $emailEnvio .= $f['Email2'];
                    //'$mail->addAddress('bacteriadebits@gmail.com');               // Name is optional
                    //$mail->addCC('rodrigo.dias@netservice.com.br');
                    $mail->addBCC('marcos.moraes@netservice.com.br');
                    echo "teste 123 indiv";
                    
                    //$mail->addBCC('mthiago.info@gmail.com');
                    $urlFundo = 'http://atendimento.netservice.com.br/img/ind_parabens.jpg';
                    $mail->addAttachment($urlFundo);         // Add attachments
                    //$urlRod = 'http://localhost/netmarketing/img/2roda_ver2.png';
            //$dot = 'http://localhost/netmarketing/img/dot.png';
            //$fundo = 'http://localhost/netmarketing/img/bg.png';
            //            echo $dot;
            //$diaAni = getdate();
            //var_dump($diaAni);
            //$urlcom = $url.$file['name'];
            //echo $urlcom;
            //    $imagem = $urlcom;
            $mail->Body    = '<img src='.$urlFundo.'>';
            //$mail->Body   .= '<img src='.$dot.' style="float:left;">'.$diaAni['mday'].'/'.$diaAni['mon'].'</b>';
            /*
            foreach ($fun as $f)
            {
                //      $mail->Body   .= '<div style="background-image:url('.$fundo.')"; Background-repeat: no-repeat;>';
                $mail->Body   .= '<p>'.ucwords(strtolower($f['Nome'])).'<br><b>';
                $mail->Body   .= ucwords(strtolower($f['DescricaoCentroCusto'])).'</b><br></div>';
            }
            */
            //$mail->Body   .= '<br><img src='.$urlRod.'>';
            //$mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject =  $f['Nome'].', desejamos a você um Feliz Aniversário!  ' ;
            //      $mail->AltBody = 'Não responder';
            $mail->send();
            $history->saveHistory($tipoEnvio, $tipoAlvo,$emailEnvio,$tipoMensagem);
            echo 'Message has been sent';
            $mail->clearAllRecipients();
            /*
             header('Location: http://localhost/netmarketing/pages/index.php?pg=email');
             */
            }
        }
}
catch (Exception $e)
{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


?>