<?php


function f_rotas($rota)
    {
        $path_route = $_SERVER['PATH_INFO'] ?? '/';
        
        $rota = '/^' . str_replace('/', '\/', $rota) . '$/';
        
        if(preg_match($rota,$path_route,$params))
        {
            return $params;
        }
    }