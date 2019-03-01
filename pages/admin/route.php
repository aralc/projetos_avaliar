<?php
if (f_rotas('/admin'))
    {
        
    f_render('admin/pages/index','admin');
    } else 
    {
        echo "Página não encontrada";
        http_response_code(404);
    }

