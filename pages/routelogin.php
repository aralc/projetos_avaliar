<?php


if (f_rotas('/login'))
    {
    echo f_render('start/login','d1');
    }
    else 
        {
        echo 'pagina nao encontrada';
        }

