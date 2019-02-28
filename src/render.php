<?php


function f_render($conteudo,$template,array $data = [])
    {
        $conteudo = __DIR__ . '/../template/' . $conteudo . '.template.php';
        return require __DIR__ . '/../template/' . $template . '.template.php';
    }



