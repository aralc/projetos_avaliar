<?php
//require __DIR__.'/db.php';


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