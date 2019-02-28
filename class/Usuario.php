<?php
class Usuario
{
    
    public function getUsuarios()
    {
        $db = new pdoDB();
        $prepare = $db->connect();
        $sql = $prepare->prepare('select * from tbUsuario');

        $sql->execute();
            
            if (count($sql->rowCount()) >= 1)
            {
               // $linha = $sql->fetch();
             //   var_dump($linha);
                while($linha = $sql->fetch())
                {
                    $linhas[] = $linha;
                }
                $sql->closeCursor();
                return $linhas;
            } 
                else 
                    {
                    return null;
                    }
        
        
    }
    
    public function getUsuarioSkills($id)
    {
        
        $db = new pdoDB();
        $prepare = $db->connect();
        $sql = $prepare->prepare('select u.Nome,s.Id,s.Descricao,s.Pontuacao
                                        from tbSkills s 
                                        inner join tbUsuario u on
                                        s.Id_Usuario = u.Id 
                                        where u.Id = :id_usu');
        $sql->bindParam(":id_usu", $id, PDO::PARAM_INT);        
        $sql->execute();
            if (count($sql->rowCount()>= 1))
            {
                while($linha = $sql->fetch())
                {
                    $linhas[] = $linha;
                }
                $sql->closeCursor();
                return $linhas;
            } else 
            {
                return 'Nenhuma Habilidade Cadastrada';
            }
        
    }
        
    
}