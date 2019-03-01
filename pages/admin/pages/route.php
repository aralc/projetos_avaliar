<?php
require __DIR__.'/db.php';
require __DIR__.'/../class/classPaginas.php';

if (f_rotas('/admin/create'))
    {
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
        
        header('loaction: /admin');            
        }
        f_render('admin/pages/create', 'admin');
    }
    elseif ($params = f_rotas('/admin/(\d+)/edit')) // (\d+) aceita somente numeros exp reg
        {
            
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
            {
            //echo $_SERVER['REQUEST_METHOD']; exit;
            //var_dump($params);    
            header('location: /admin/view/' .$params[1]);
            }
        f_render('admin/pages/edit','admin');
        }
        elseif ($params = f_rotas('/admin/(\d+)/delete'))
            {
             if ($_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    
                header('location: /admin/view' .$params[1]);
                }
            }
            elseif ($params = f_rotas('/admin/view/?(\d+)')) //(\d+) transforma para item exclusivo, 
            {
              //var_dump($params);exit;
              
                
              $pagina = $pages_one($params[1]);
                
            f_render('admin/pages/view','admin');
            }
            else
                {
                echo "<h1> Ops Paginas não encontrada</h1>";
                http_response_code(404);
                }