<?php
class pdoDB{
    protected $con;
    public function connect()
    {
        try
        {
            $this->con = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME,DB_USER,DB_PWD);
            return $this->con;
        }
        catch (PDOException $erro)
        {
            return "ocorreu erro". $erro->getMessage();
        }
        
    }
    
}
?>
            
    
