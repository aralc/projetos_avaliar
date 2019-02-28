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
    
    public function deleteUsuarioSkills($id)
    {
        $db = new pdoDB();
        $prepare = $db->connect();
        $sql = $prepare->prepare('delete from tbSkills where Id = :id_skill');
        $sql->bindParam(':id_skill', $id,PDO::PARAM_INT);
        $prepare->beginTransaction();
        $sql->execute();
        
        if (count($sql->rowCount()) == 1)
        {
            echo "ok";
            $prepare->commit();
            return header('location: /start/perfil');
        } else 
        {
          echo "error";
          $prepare->rollBack();
        }
        
    }
    
        
    
}