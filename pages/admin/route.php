<?php
/*
 * f_rotas ( funcao de rotas em src )
 * f_render ( funcao para renderização das paginas  
 */

require __DIR__.'/pages/db.php';
require __DIR__.'/pages/funcoes.php';
require __DIR__.'/class/classPaginas.php';


if (f_rotas('/admin'))
    {
    $paginas = $pages_all();
    f_render('admin/pages/index','admin', ['paginas' => $paginas]);
    }
    elseif(f_rotas('/admin/users/?.*'))
        {
        require __DIR__.'/users/route.php';
        }
        elseif(f_rotas('/admin/api/?(.*)+'))
            {
            require __DIR__.'/api/route.php';
            }
            elseif(f_rotas('/admin/?(.*)+'))
                {
                require __DIR__.'/pages/route.php';
                }
        
            
    
    
/*    
    elseif (f_rotas('/admin/create'))
        {
        f_render('admin/pages/create', 'admin');
        } 
        elseif (f_rotas('/admin/(\d)+/edit')) // (\d)+ aceita somente numeros exp reg 
            {
             f_render('admin/pages/edit','admin');
            }
            elseif (f_rotas('/admin/(\d)+/delete'))
                {
                //delete /dele
                header('location: /admin/view');
                }
                elseif (f_rotas('/admin/view/?(\d+)'))
                    {
                    f_render('admin/pages/view','admin');
                    } else 
                        {
                        echo "<h1> Ops Paginas não encontrada</h1>";                            
                        http_response_code(404);
                        }
*/                                        


    
    
            
            
    
    
