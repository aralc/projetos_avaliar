<?php
include_once('../class/classFuncionarios.php');

$nome = isset($_POST['nomFun']) ? $_POST['nomFun'] : null;
$departamento = isset($_POST['nomDep']) ? $_POST['nomDep'] : null;
$cargo = isset($_POST['nomCar']) ? $_POST['nomCar'] : null;
$data = isset($_POST['datNas']) ? $_POST['datNas'] : null;
$email = isset($_POST['nomEma']) ? $_POST['nomEma'] : null;
/*
echo $nome;
echo $departamento;
echo $cargo;
echo $data;
*/

if (($nome <> null) && ($departamento <> null) && ($cargo <> null) && ($data <> null) && ($email <> null)) 
{
    //$usuario = new User();
    //$usuario->createUsuario($login, $senha, $nome, $email);
    $fun = new Funcionario();
    $fun->createFuncionarioPJ($nome, $cargo, $departamento, $data, $email);
    
    header('location: ../pages/index.php?pg=cadFuncionarios&msg=sucesso');
}
else 
    {
        header('location: ../pages/index.php?pg=cadFuncioanrios&msg=erro');

        //echo $login. $senha. $email .$nome;
    }

    




?>



