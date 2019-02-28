<?php 
$usuario = new Usuario();
$usr = $usuario->getUsuarios();


$skl = $usuario->getUsuarioSkills($usr[0]['Id']);
//                    var_dump($skl);

    


?>
   





  <div class="row">
  <div class="col-lg-4">
    <img src="../img/marcos.png" class="rounded" alt="...">
  </div>
	  <div class="col-lg-6">
	  
           <div class="panel panel-default">
           
                 <div class="panel-heading">
                 Perfil <a href="/start/perfil/pdf/"> <button class="btn btn-success" > Exportar para PDF</button></a>
                        </div>
                        
                        
                        <div class="panel-body">
                            <div class="row">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input class="form-control" type='text' readonly name="nomUsu" value="<?php echo $usr[0]['Nome'] ?? '';?>">
										</div>
										<div class="form-group">
                                            <label>Idade</label>
                                            <input class="form-control" type='numeric' readonly name="idaUsu" value="<?php echo $usr[0]['Idade'] ?? '';?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type='email' readonly name="emaUsu" value="<?php echo $usr[0]['Email'] ?? '' ;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Telefone</label>
                                            <input class="form-control" type='numeric' readonly name="emaUsu" value="<?php echo $usr[0]['Celular'] ?? '' ;?>">
                                        </div>
                               </div>
                                     
                                        </div>
                                    
								</div>
                                <!-- /.col-lg-6 (nested) -->
                                    
                <!--   <div id="piechart" style="width: 900px; height: 500px;"></div>-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Habilidades 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Descrição</th>
                                            <th>Pontuação</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php 
                                $skl = $usuario->getUsuarioSkills($usr[0]['Id']);
            //                    var_dump($skl);
                                foreach ($skl as $s)
                                {
                                ?>
                                        <tr>
                                            <td><?php echo $s['Id'] ?? null ;?></td>
                                            <td><?php echo $s['Descricao'] ?? null;?></td>
                                            <td><?php echo $s['Pontuacao'] ?? null; ?></td>
                                            <td><a href="<?php echo 'perfil/delete/'.$s['Id'];?>"><button class="btn btn-warning"> Apagar</button></a></td>
                                        </tr>
                                        
								<?php } ?>                                        
                                    </tbody>
                                </table>
                                
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
  
    
  
<
 
 

                    
                    
                
                </div>
                <!-- /.col-lg-12 -->
                
            
            </div>
            <!-- /.row -->
            
            
                        
           
            
            