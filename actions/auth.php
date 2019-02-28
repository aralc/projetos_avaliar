<?php
//session_save_path('../session');
//session_start();

include_once('../class/classUsuario.php');
$login = $_POST['email'] ?? null;
$senha = $_POST['password'] ?? null;

$u = new User();

//$retorno =  $u->validate($login, $senha);
$retorno = $u->getdbValidation($login, $senha);
echo $retorno;
if ($retorno == 1)
    {
        //var_dump($retorno);
        
    header('location: ../pages/index.php');
    } else {
        
       header('location: ../pages/login.php');
    }



//$u->destroi();


    

                



?>