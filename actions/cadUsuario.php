<?php
include_once('../class/classUsuario.php');

$login = isset($_POST['logUsu']) ? $_POST['logUsu'] : null;
$senha = isset($_POST['senUsu']) ? $_POST['senUsu'] : null;
$email = isset($_POST['emaUsu']) ? $_POST['emaUsu'] : null;
$nome = isset($_POST['nomUsu']) ? $_POST['nomUsu'] : null;


$u = new User();
    if($u->getUser($email) <> null)
    {
        echo "teste";
        $u->alterUsuario($login, $senha, $email, $nome);
        
        header('location: ../pages/index.php');
    }
    else 
    {
        


if (($login <> null) && ($senha <> null) && ($email <> null) && ($nome <> null)) 
{
    $usuario = new User();
    $usuario->createUsuario($login, $senha, $nome, $email);
    
    header('location: ../pages/index.php?pg=cadUsuario&msg=sucesso');
}
else 
    {
        header('location: ../pages/index.php?pg=cadUsuario&msg=erro');

        //echo $login. $senha. $email .$nome;
    }

    


    }

?>



