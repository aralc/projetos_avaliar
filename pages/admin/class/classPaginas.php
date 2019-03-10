<?php



class classPaginas   
    {
        protected $titulo;
        protected $conteudo;
        protected $data;
        
        public function createPagina($titulo,$url,$conteudo,$categoria)
            {
                $con = new pdoDB();
                $sql = $con->connect();
                $prepare = $sql->prepare('insert into tbPaginas(titulo,url,texto,idCategoria,dt_criado)  
                                                            values(:titulo,:url,:texto,:idCategoria,now())' );
                $prepare->bindParam(':titulo',$titulo);
                $prepare->bindParam(':url', $url);
                $prepare->bindParam(':texto', $conteudo);
                $prepare->bindParam(':idCategoria',$categoria);
                //$data = now();
                $sql->beginTransaction();
                $prepare->execute();
                
                
                if ($prepare->rowCount() == 1)
                    {
                        
                        flash('Pagina criada com sucesso','success');
                        $sql->commit();
                    }
                    else 
                        {
                        $sql->rollBack();
                        flash('Erro ao criar a pagina','error');
                        }
            }
            
        public function updatePaginas($id,$url,$conteudo,$titulo)
            {
            $con = new pdoDB();
            $sql = $con->connect();
            $prepare = $sql->prepare('update tbPaginas set titulo = :titulo,
                                                            url = :url,
                                                            texto = :texto,
                                                            dt_update = now()
                                                            where id = :id');
            $prepare->bindParam(':titulo', $titulo);
            $prepare->bindParam(':texto',$conteudo);
            $prepare->bindParam(':url',$url);
            $prepare->bindParam(':id',$id);
            echo $id . "<br>";
            echo $titulo . "<br>";
            echo $url . "<br>";
            echo $conteudo ."<br>";
            $sql->beginTransaction();
            $prepare->execute();
                if ($prepare->rowCount() == 1)
                {
                    //echo $prepare->queryString;
//                    var_dump($prepare->errorInfo());
                    flash('Atualizacao efetuada com sucesso ','success');
                    $sql->commit();
                } 
                else 
                    {
                    flash('Erro ao atualizar');
                    $sql->rollBack();
                }
            
            
            }
            
            public function deletePaginas($id)
                {
                $con = new pdoDB();
                $sql = $con->connect();
                $prepare = $sql->prepare('delete from tbPaginas where id = :id');
                
                $prepare->bindParam(':id', $id);
                $sql->beginTransaction();
                $prepare->execute();
                
                    if($prepare->rowCount() == 1 )
                    {
                        flash('Deletado com sucesso','warning');
                        $sql->commit();
                    }
                    else 
                        {
                        flash('Erro ao deletar');
                        $sql->rollBack();
                        }
                }
            
        
        //public function updatePagina($id);
        
        //public function deletePagina($id);
        
        
        
    }