<?php
 
$nome = $_POST['nomCli'] ?? null;
$uf = $_POST['ufCli'] ?? null;
$bairro = $_POST['baiCli'] ?? null;
$cep = $_POST['cepCli'] ?? null;




if (f_rotas('/cliente'))
    {
    echo f_render('cliente/cliente','default');
    } 
    elseif (f_rotas('/cliente/gravar'))
        {
        $c = new Cliente();
        $c->createCliente($nome, $bairro, $uf, $cep);
        
        }
        