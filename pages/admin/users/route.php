<?php
//echo "oi";
require __DIR__.'/funcoes.php';
require __DIR__.'/db.php';
require __DIR__.'/../class/classUsers.php';

if ( f_rotas('/admin/users'))
    {
    $u = new Users();
    $usuarios = $u->getAllUsuers();
    f_render('/admin/users/index', 'admin', ['user' => $usuarios]);
    }
    elseif(f_rotas('/admin/users/create'))
        {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
            $recebe = get_data('/admin/users/create');
            $u = new Users();
            $u->createUsuer($recebe['user'], $recebe['grupo'], $recebe['senha'], $recebe['email']);
            flash('usuário criado com sucesso');
            return header('location: /admin/users');
            
            }
        return f_render('/admin/users/create', 'admin');            
        }
        elseif($params = f_rotas('/admin/users/(\d+)/edit'))
            {
            $u = new Users();
            $usuario = $u->getUserById($params[1]);
            
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $atl = get_data('/admin/users/'.$params[1].'/edit');
                
                var_dump($atl);
                //exit;
                $u->updateUser($atl['id'],$atl['user'], $atl['senha'], $atl['grupo'],$atl['email']);
                return f_render('admin/users//view', 'admin' , ['user' => $u->getUserById($atl['id'])]);
            }
            return f_render('admin/users/create', 'admin',['user' => $usuario] );                
            
            
            }
            elseif($params = f_rotas('/admin/users/(\d+)/view'))
                {
                var_dump($params);
                $u = new Users();
                $usuario = $u->getUserById($params[1]);
                var_dump($usuario);
                return f_render('admin/users/view','admin', ['user' => $usuario]);
                }
                elseif($params = f_rotas('/admin/users/(\d+)/delete'))
                    {
                        $u = new Users();
                        $u->deleteUser($params[1]);
                        return header('location: /admin/users');
                    }
                    else 
                        {
                        echo 'Ops pagina não existente';
                        return http_response_code(404);
                        }



/*
if (f_rotas('/admin/create'))
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $_pagina = new classPaginas();
        
        $post = paginas_get('/admin/create');
        var_dump($post);
        
        $_pagina->createPagina($post['titulo'], $post['url'], $post['texto'], $post['categoria']);
        return header('location: /admin');
    }
    f_render('admin/pages/create', 'admin');
}
elseif ($params = f_rotas('/admin/(\d+)/edit')) // (\d+) aceita somente numeros exp reg
{
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        //echo $_SERVER['REQUEST_METHOD']; exit;
        //var_dump($params);
        $_pagina = new classPaginas();
        $post = paginas_get('/admin/'.$params['1'].'/edit');
        $_pagina->updatePaginas($post['id'], $post['url'], $post['texto'], $post['titulo']);
        
        return header('location: /admin/view/' .$params[1]);
    }
    $pagina = $pages_one($params[1]);
    
    f_render('admin/pages/edit','admin', ['pagina' => $pagina ]);
}
elseif ($params = f_rotas('/admin/(\d+)/delete'))
{
    $_pagina = new classPaginas();
    $_pagina->deletePaginas($params[1]);
    
    return header('location: /admin');
}
elseif ($params = f_rotas('/admin/view/?(\d+)')) //(\d+) transforma para item exclusivo,
{
    //var_dump($params);exit;
    
    
    $pagina = $pages_one($params[1]);
    
    f_render('admin/pages/view','admin',$pagina);
}
else
{
    echo "<h1> Ops Paginas não encontrada</h1>";
    http_response_code(404);
}