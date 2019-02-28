<?php


if (f_rotas('/start'))
    {
    echo f_render('start/start','default');
    } 
    elseif (f_rotas('/start/perfil'))
        {
        echo f_render('start/perfil','default');
        }

