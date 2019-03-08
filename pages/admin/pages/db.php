<?php

// funções anonimas 
$pages_all = function ()
    {
        $con = new pdoDB();
        $sql = $con->connect();
        $prepare = $sql->prepare('select p.id,p.titulo,p.idCategoria,c.nome 
                                                                        from tbPaginas p
                                                                        inner join tbCategoriaPagina c on
                                                                        p.idCategoria = c.id');
        $prepare->execute();
            if (count($prepare->rowCount()) >= 1)
                {
                //echo 2;
                    while($linha = $prepare->fetch(PDO::FETCH_ASSOC))
                        {
                            $linhas[] = $linha;
                        }
                        $prepare->closeCursor();
                        return $linhas;
                }
                else 
                    {
                    return null;
                    }
        
        
        
    };

    
$pages_one = function ($id)
    {
        $con = new pdoDB();
        $sql = $con->connect();
        $prepare = $sql->prepare('select * from tbPaginas where id = :id');
        $prepare->bindParam('id', $id);
        $prepare->execute();
            if ($prepare->rowCount() == 1)
            {
                $linha = $prepare->fetch(PDO::FETCH_ASSOC);
            }
            else
                {
                //return null;
                die();
                }
        return $linha;                
    };

    
    