<?php
include_once('../class/classMensagens.php');

$titulo = isset($_POST['TitMail']) ? $_POST['TitMail'] : null;
$texto = isset($_POST['TexMail']) ? $_POST['TexMail'] : null;
$forma = isset($_POST['ForMail']) ? $_POST['ForMail'] : 2;
$anexo = isset($_FILES['AneMail']) ? $_FILES['AneMail'] : null;
$cabecalho = isset($_FILES['CabMail']) ? $_FILES['CabMail'] : null;
$rodape = isset($_FILES['RodMail']) ? $_FILES['RodMail'] : null;
//diretorio de imagens 
$dir = '/var/www/html/netmarketing/img/';
//var_dump($anexo);

//guardando imagens

echo $titulo;
var_dump($cabecalho);
if ($anexo <> null)
{
    echo "ok";
    echo 'aniversário';
    move_uploaded_file($anexo['tmp_name'], $dir.$anexo['name']);
}

if ($cabecalho <> null)
{
    echo "ok";
    echo 'aniversário';
    move_uploaded_file($cabecalho['tmp_name'], $dir.$cabecalho['name']);
    
}

if ($rodape <> null)
{
    echo "ok";
    echo 'aniversário';
    move_uploaded_file($rodape['tmp_name'], $dir.$rodape['name']);
}


$msg = new Mensagenm();
$msg->cadastro($titulo, $texto,$forma,$anexo['name'],$cabecalho['name'],$rodape['name']);



?>