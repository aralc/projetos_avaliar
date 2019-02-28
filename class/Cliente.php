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
        
        
        
        while($row = $prepare->fetch(PDO::FETCH_OBJ))
        {
            
            $rows[] = $row;
        }
        
        //echo $sql->errorInfo();
            return $rows;
       
        }
   
    
    
}
