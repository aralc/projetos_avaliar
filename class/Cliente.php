<?php

class Cliente{
    
  
   protected $nome;
   protected $bairro;
   protected $uf;
   protected $cep;
   
   public function createCliente($nome,$bairro,$uf,$cep)
    {
      $this->nome = strtoupper($nome);
      $this->uf = strtoupper($uf);
      $this->bairro = strtoupper($bairro);
      $this->cep = $cep;
      
      $db = new pdoDB();
      $sql = $db->connect();
      $prepare = $sql->prepare('insert into tbCliente(Nome,Uf,Bairro,Cep)
                                            values(:Nome,:Uf,:Bairro,:Cep)');
      
      $prepare->bindParam('Nome', $this->nome);
      $prepare->bindParam(':Uf', $this->uf);
      $prepare->bindParam(':Bairro', $this->bairro);
      $prepare->bindParam(':Cep', $this->cep);
      $prepare->execute();
      
      if (count($prepare->rowCount()) == 1)
      {
          $prepare->closeCursor();
          return header('location: /cliente');
          
      } else  
        {
        echo 'error';  
        }
    }
    
    
    public function getAllCliente()
        {
        $db = new pdoDB();
        $sql = $db->connect();
        $prepare = $sql->prepare('select * from tbCliente');
        $prepare->execute();
        
         
        if(count($prepare->rowCount()) >= 1)
        {
            while($row = $prepare->fetch(PDO::FETCH_OBJ))
                {
                $rows[] = $row;
                }
                return $rows;
        } else 
        {
           return null;
        }
        
        //echo $sql->errorInfo();
        
        
       
        }
        
        public function getClienteById($id)
        {
            $db = new pdoDB();
            $sql = $db->connect();
            $prepara = $sql->prepare('select * from tbCliente where id = :id ');
            $prepara->bindParam(':id', $id, PDO::PARAM_INT);
            $prepara->execute();
            
            if (count($prepara->rowCount()) == 1)
                {
                    
                $linha = $prepara->fetch(PDO::FETCH_OBJ);
                return $linha;
                }
                else 
                {
                    return $null;
                }
        }
        
        public function deleteById($id)
        {
            $db = new pdoDB();
            $sql = $db->connect();
            $prepare = $sql->prepare('delete from tbCliente where id = :id');
            $prepare->bindParam(':id', $id, PDO::PARAM_INT);
            $sql->beginTransaction();
            $prepare->execute();
            
            if (count($prepare->rowCount() == 1))
            {
                $sql->commit();
                return header('location: /cliente');
            } else {
                    $sql->rollBack();
                    return header('location: /cliente/error');
                    }
            
            
        }
   
    
    
}
