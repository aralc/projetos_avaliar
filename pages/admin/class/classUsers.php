<?php
class Users
{
    protected $senha;
    protected $email;
    
    public function createUsuer($nome,$grupo,$senha,$email)
    {
        $con = new pdoDB();
        $sql = $con->connect();
                
        $prepare = $sql->prepare('insert into tbUsers(nome,email,senha,idGroup,dt_criado)
                                                values(:nome,:email,:senha,:idg,now())');
        
       $this->senha = md5($senha);
        $this->email = strtolower($email);
        
        $prepare->bindParam(':nome',$nome);
        $prepare->bindParam(':email',$this->email);
        $prepare->bindParam(':senha', $this->senha);
        $prepare->bindparam(':idg',$grupo);
        
        $sql->beginTransaction();
        $prepare->execute();
        
            if (count($prepare->rowCount()) == 1)
                {
                    flash('Usuário criado com sucesso','success');
                    $sql->commit();
                    
                } 
                else 
                {
                    flash('Erro ao criar o usuário','error');
                    $sql->rollBack();
                    
                }

    }
    
    public function getAllUsuers()
    {
        $con = new pdoDB();
        $sql = $con->connect();
        $prepare = $sql->prepare('select * from tbUsers');
        $prepare->execute();
        
        if ($prepare->rowCount() >= 1)
            {
                while($linha = $prepare->fetch(PDO::FETCH_ASSOC))
                {
                    $linhas[] = $linha;
                }
                return $linhas;
            }
            else 
                {
                return null;
                }
            
    }
    
    
    public function getAllApiUsers()
    {
        $con = new pdoDB();
        $sql = $con->connect();
        $prepare = $sql->prepare('select * from tbUsers');
        $prepare->execute();
        
        if ($prepare->rowCount() >= 1)
        {
            while($linha = $prepare->fetch(PDO::FETCH_ASSOC))
            {
                $linhas[] = $linha;
            }
            return json_encode($linhas);
        }
        else
        {
            return null;
        }
        
    }
    
    
    
    
    public function getUserById($id)
    {
     $con = new pdoDB();
     $sql = $con->connect();
     $prepare = $sql->prepare('select * from tbUsers where id = :id');
     $prepare->bindParam(':id',$id);
     $prepare->execute();
     $linha = $prepare->fetch(PDO::FETCH_ASSOC);
     
     return $linha;
     
     
    }
    
    public function updateUser($id,$nome,$senha,$grupo,$email)
    {
        $con = new pdoDB();
        $sql = $con->connect();
        $this->email = strtolower($email);
        $this->senha = md5($senha);
        $prepara = $sql->prepare('update tbUsers set nome = :nome,
                                                    idGroup = :grupo,
                                                    email = :email,
                                                    senha = :senha
                                                    where id = :id');
        $prepara->bindParam(':nome', $nome);
        $prepara->bindParam(':grupo', $grupo);
        $prepara->bindParam('email',$this->email);
        $prepara->bindParam('senha',$this->senha);
        $prepara->bindParam('id',$id);
        
        $sql->beginTransaction();
        $prepara->execute();
            if ($prepara->rowCount() == 1)
            {
                flash('Usuário atualizado com suceso','success');
                $sql->commit();
            }
            else 
                {   
                flash('Erro ao atualizar o usuário','success');
                $sql->rollBack();
                }
    }

    public function deleteUser($id)
    {
     $con = new pdoDB();
     $sql = $con->connect();
     $prepare = $sql->prepare('delete from tbUsers where id = :id ');
     $prepare->bindParam(':id', $id,PDO::PARAM_INT);
     $sql->beginTransaction();
     $prepare->execute();
        
     if ($prepare->rowCount() == 1)
        {
        flash('usuario deletado com sucesso','success');
        $sql->commit();
        
        }
        else 
            {
            flash('erro ao deletar o usuário','danger');
            $sql->rollBack();
            return die();
            }
    }

}