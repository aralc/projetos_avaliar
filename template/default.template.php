<!DOCTYPE html>
<html lang="pt-br" >
	<head>
	    <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1">
    		<meta name="description" content="">
    		<meta name="author" content="">
			   <title> <?php echo AUTHOR .' - ';?> Skills </title>
			    <!-- Bootstrap Core CSS -->
			    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
			    <!-- MetisMenu CSS -->
			    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
			    <!-- Custom CSS -->
			    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
			    <!-- Morris Charts CSS -->
			    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
			    
			    
			    <!-- Custom Fonts -->
			    <link rel="stylesheet" href="/recursos/trix/trix.css" >
			    <link rel="stylesheet" href="/recursos/pnotify/pnotify.custom.min.css" >
    			<link rel="stylesheet" href="/css/style.css" >
    			 
			    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
			        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	</head>
	<body>
	        <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!--  Marcos utilizar  -->
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong> Ultima Atualização </strong>
                                    <span class="pull-right text-muted">
                                        <em>Data</em>
                                    </span>
                                </div>
                                <div> Conteudo </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Veja todo historico</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!--  Marcos utilizar  -->
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Visualização do conteudo</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="?pg=cadUsuario&tp=pf"><i class="fa fa-user fa-fw"></i> Perfil </a>
                        </li>
                        <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a> -->
                        </li>
                        <li class="divider"></li>
                        <li><a href="../actions/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Busca...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        
						
                        
                        
                        <li>
                            <a href="/start/perfil"><i class="fa fa-dashboard fa-fw"></i> Perfil </a>
                        </li>
                        <li>
                            <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Administração </a>
                        </li>
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Skills Especificas <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="#"> CRUD <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                        <a href="/cliente"><i class="fa fa-edit fa-fw"></i> Cadastro de Cliente <span class="fa arrow"></span></a>
                                        </li>
                                    </ul>
                            
                                </li>
                                
                                <li>
                                    <a href="#">WEBSERVICE / API <span class="fa arrow "></span></a>
                                    <ul class="nav nav-third-level">
                                    	<li>
                                    		<a href="#"><i class="fa fa-edit fa-fw"></i> Webservice </a><span class="fa arrow"></span></a>
                                        </li>
                                        <li>
                                    		<a href="#"><i class="fa fa-edit fa-fw"></i> API <span class="fa arrow"></span></a>
                                        </li>
                                    </ul>
                            
                                </li>
                                
                               <li>
                                    <a href="#"> Relatórios ( import/export ) <span class="fa arrow "></span></a>
                                    <ul class="nav nav-third-level">
                                    	<li>
                                    		<a href="#"><i class="fa fa-edit fa-fw"></i> Relatório </a><span class="fa arrow"></span></a>
                                        </li>
                                        <li>
                                    		<a href="#"><i class="fa fa-edit fa-fw"></i> Import e Export <span class="fa arrow"></span></a>
                                        </li>
                                    </ul>
                            
                                </li>
                                <li>
                                <li>
											<a href="#"><i class="fa fa-table fa-fw"></i> Crawller  <span class="fa arrow"></span></a>
                            					<ul class="nav nav-second-level">
                                  					<li>
                                    				<a href="?pg=relHistorico"> Captura de Dados em Página </a>
                                					</li>
                                                    <li>
                                                        <a href="?pg=relFuncionariosAniMes"> Tratamento de Erros </a>
                                                    </li>
                                                     <li>
                                                        <a href="?pg=relFuncionarios1ano"> Cases  </a>
                                                    </li>
                                                     <li>
                                                        <a href="?pg=relFuncionarios"> Funcionarios  </a>
                                                    </li>
					                            </ul>
                                        </li>
                                
                                
                                    <li>
											<a href="#"><i class="fa fa-table fa-fw"></i> Tecnologias / Cases  <span class="fa arrow"></span></a>
                            					<ul class="nav nav-second-level">
                                  					<li>
                                    				<a href="?pg=relHistorico"> Modelagem de Banco de Dados </a>
                                					</li>
                                                    <li>
                                                        <a href="?pg=relFuncionariosAniMes"> Tratamento de Erros </a>
                                                    </li>
                                                     <li>
                                                        <a href="?pg=relFuncionarios1ano"> Cases </a>
                                                    </li>
                                                     <li>
                                                        <a href="?pg=relFuncionarios"> Metodologias  </a>
                                                    </li>
					                            </ul>
                                        </li>
									                                        
                                        
                                        
                                    
                            
                                </li>
                                
                                <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Gŕaficos <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?pg=dash">Gráfico 1</a>
                                </li>
                                <!-- <li>
                                    <a href="?pg=dash">Morris.js Charts</a>
                                </li> -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                
                                
                            </ul>
                            
                        </li>  
                        





                        
                        
                        
                        
                         
                        <li>
                            
                            <!-- /.nav-second-level -->
                        </li>
                         
                    
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Profile Skills</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"> 100 % </div>
                                    <div>Transparencia / Comunicação </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"> 5 </div>
                                    <div>Certificações e Objetivos - 2019</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Novas Tecnologias Alvo - 2019</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Detalhes de Estudo</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
                      
            <?php require $conteudo; ?> 
            
            
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="/recursos/trix/trix.js"> </script>
    <script src="/recursos/pnotify/pnotify.custom.min.js"> </script>
    <script>
    <?php  flash(); // alertas de mensagens ?>
    </script>

</body>

</html>

