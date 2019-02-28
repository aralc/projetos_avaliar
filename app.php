<?php
require __DIR__.'/config.php'; 
require __DIR__.'/src/error.php';
require __DIR__.'/src/rotasResolver.php';
require __DIR__.'/src/render.php';
require __DIR__.'/src/database.php';
require __DIR__.'/class/Usuario.php';








 




if (f_rotas('/start/?(.*)'))
    {
        require __DIR__.'/pages/route.php';
    }
    elseif (f_rotas('/?(.*)'))
        {
            echo '/';
        }
