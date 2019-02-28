<?php


if (f_rotas('/start'))
    {
    echo f_render('start/perfil','default');
    } 
    elseif (f_rotas('/start/perfil'))
        {
        echo f_render('start/perfil','default');
        }
        elseif (f_rotas('/start/perfil/delete/?(.*)'))
        {
            $id = explode('/', $_SERVER['PATH_INFO']);
            $id_final = end($id);
            
            $skl_delete = new Usuario();
            $skl_delete->deleteUsuarioSkills($id_final);
        }
        elseif (f_rotas('/start/perfil/pdf/?(.*)'))
            {
                $pdf = new Cezpdf();
                $pdf -> selectFont('pdf-php/fonts/Helvetica.afm');
                $var = "Texto, pegar do usuário informações ";
                $pdf -> ezText($var, 20);
                //$pdf -> ezText('Olá Pessoal. Obrigado por estarem acompanhando mais este artigo!', 15, array(justification => 'left', spacing => 3.0));
                //$pdf -> ezText('Acessem o portal da DevMedia Group: www.devmedia.com.br!', 10, array(justification => 'right', spacing => 1.0));
                
                //Gera o PDF
                $pdf -> ezStream();
                
            }

