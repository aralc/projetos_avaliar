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
        elseif (f_rotas('/cliente/delete/(\d)+/deletar')) //(\d) indicai que receber numeros 1 ou mais 
            {
                $id = explode('/',$_SERVER['PATH_INFO']);
                $id_final = end($id);
                $c = new Cliente();
                $c->deleteById($id_final);
            } 
            elseif (f_rotas('/cliente/editar/?(.*)'))
                    {
                        echo f_render('cliente/cliente','default');
                    $id = explode('/',$_SERVER['PATH_INFO']);
                    $id_final = end($id);
                    $c = new Cliente();
                    $cliente = $c->getClienteById($id_final);
                    //var_dump($cliente);
                    
                    } else 
                    {
                        http_response_code(404);
                        echo "pagina não encontrada";
                    }
                
            
        