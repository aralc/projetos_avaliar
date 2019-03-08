<?php

function paginas_get($PageOnError)
    {
    
    
    $titulo = filter_input(INPUT_POST, 'titulo');
    $url = filter_Input(INPUT_POST,'url');
    $categoria = filter_input(INPUT_POST,'select');
    $texto = filter_input(INPUT_POST,'Texto');
    $id = filter_input(INPUT_POST,'id');
    
    
    if (is_null($titulo) or is_null($url))
        {
        flash('Preencha todos os campos','error');
        header('location:'. $PageOnError);
        die();
        } 
        else 
            {
              $retorno = [ "titulo" => $titulo,
                           "url" => $url,
                            "texto" => $texto,
                            "categoria" => $categoria,
                            "id" => $id
                            ];       
              return $retorno;
              //return compact($titulo,$url,$texto,$categoria);
            }
        
        
    }

