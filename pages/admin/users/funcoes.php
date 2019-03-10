<?php
function get_data($PagesOnError)
    {
        $user = filter_input(INPUT_POST,'user');
        $email = filter_input(INPUT_POST,'email');
        $grupo = filter_input(INPUT_POST, 'select');
        $senha = filter_input(INPUT_POST,'senha');
        $id = filter_input(INPUT_POST, 'id');
        
        if (is_null($user) || is_null($senha) || is_null($grupo))
        {
            flash('Preencha todos os campos','error');
            header('location:'. $PageOnError);
            die();
        }
        else 
            {
             return $retorno = ['user' => $user,
                                'senha' => $senha,
                                'grupo' => $grupo,
                                'email' => $email,
                                'id' => $id
                                ]; 
            }
    }
        
    