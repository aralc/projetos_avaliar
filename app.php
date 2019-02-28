<?php
session_save_path(__DIR__.'/session');
session_set_cookie_params(60000,'/', null,false);
session_start();
require __DIR__.'/config.php'; 
require __DIR__.'/src/error.php';
require __DIR__.'/src/rotasResolver.php';
require __DIR__.'/src/render.php';
//require __DIR__.'/src/session.php';
require __DIR__.'/src/database.php';
require __DIR__.'/class/Usuario.php';
require __DIR__.'/vendor/src/Cezpdf.php';












if (f_rotas('/start/?(.*)'))
    {
        require __DIR__.'/pages/route.php';
    }
     elseif(f_rotas('/cliente/?(.*)'))
     {
         require __DIR__.'/pages/routecliente.php';
     }  
        elseif (f_rotas('/?(.*)'))
        {
//         require __DIR__.'/pages/routelogin.php';
      exit(header("location: /start"));
            
        }