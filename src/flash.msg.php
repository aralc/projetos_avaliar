<?php


function flash($message = null, $type = null)
    {
        if($message) 
        {
        //grava mensagem
        $_SESSION['flash'][] = compact('message','type'); // compacte procura variavel com mesmo nome a armazena
        } 
        else 
            {
                //mostra mensagem
                $flash = $_SESSION['flash'] ?? [];
                if(!count($flash))
                    {
                        return ;
                    } 
              foreach($flash as $key => $message)
                {
                  f_render('flash/flash', 'ajax', $message);
                  unset($_SESSION['flash'][$key]);
                }
            }
    }