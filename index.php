<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sistema de Controle de Clientes</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/crm.png"/>
        	
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="site-bg"></div>
        <div class="site-bg-overlay"></div>

        <!-- TOP HEADER -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p class="phone-info" style="font-weight:bolder">SCC - <a href="#" style="color:aquamarine"> Sistema de Controle de Clientes</a></p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#" ><b>Projeto Prático em Sistemas I</b></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .top-header -->


        <div class="visible-xs visible-sm responsive-menu">
            <a href="#" class="toggle-menu">
                <i class="fa fa-bars"></i> Show Menu
            </a>
            <div class="show-menu">
                <ul class="main-menu">
                    <li>
                        <a class="show-1 active homebutton" href="#"><i class="fa fa-home"></i>Consultas</a>
                    </li>
                    <li>
                        <a class="show-2 aboutbutton" href="#"><i class="fa fa-user"></i>Pessoas</a>
                    </li>
                    <li>
                        <a class="show-3 projectbutton" href="#"><i class="fa fa-camera"></i>Empresas</a>
                    </li>
                    <li>
                        <a class="show-5 contactbutton" href="#"><i class="fa fa-envelope"></i>Tarefas</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container" id="page-content">
            <div class="row">


                
                <div class="col-md-9 col-sm-12 content-holder">
                    <!-- CONTENT -->
                    <div id="menu-container">
                        
                        <!-- <div class="logo-holder logo-top-margin">
                            <a href="#" class="site-brand"><img src="images/crm100.png" alt=""></a>
                        </div>  -->
                        
                        
                        <div id="menu-1" class="homepage home-section text-center">
                            <div class="welcome-text">
                                
                                <form action="#" method="get" class="subscribe-form">
                                    <div class="row">
                                        <fieldset class="col-md-offset-2 col-md-6">
                                            <input name="subscribe-email" type="email" class="email" id="subscribe-email" placeholder="Consultas de Tarefas">
                                        </fieldset>
                                        <fieldset class="col-md-4 button-holder">
                                            <input name="submit" type="submit" class="button default pesquisar" id="submit" value="PESQUISAR">
                                        </fieldset>
                                    </div>
                                    <div class="box-tabela">
                                    	<div class="row">		
                                        	<fieldset class="col-md-12 button-holder">
                                            	  <div class="table-responsive">          
													  <table class="table">
													    <thead>
													      <tr>
													        <th>Tipo</th>
													        <th>Nome</th>
													        <th>Empresa</th>
													        <th>E-mail</th>
													        <th>Endereço</th>
													        <th>Responsável</th>
													        <th>Horário</th>
													      </tr>
													    </thead>
													    <tbody>
													      <tr>
													        <td>Reunião</td>
													        <td>Anna</td>
													        <td>Ford Motors</td>
													        <td>anna@ford.com.br</td>
													        <td>Rua Jandira 157 - Consolação - SP</td>
													        <td>Vendendora Maria</td>
													        <td>20:00</td>
													      </tr>
													    </tbody>
													  </table>
													  </div>
                                        	</fieldset>
                                    	</div>
                                	</div>
                                    <!-- <p class="subscribe-text">Please subscribe your email for latest updates!</p> -->
                                </form>
                            </div>
                        </div>

                        <div id="menu-2" class="content about-section" style="margin-top: -30px;">

                        <?php require_once("banco-pessoa.php");
                              require_once("banco-empresa.php");

                        $origem_contato_pessoa = listaOrigemPessoa($conexao); 
                        $tipo_pessoa = listaTipoPessoa($conexao);

                        $origem_contato_empresa = listaOrigemPessoa($conexao);
                        $setor_empresa = listaSetor($conexao);
                        ?>

                        <form class="contact-form" action="cadastro-pessoa.php" method="post">
                            <div class="box-content">
                            <div class="row">                            		
                             <div class="col-md-6 col-sm-8">
                                <h3 class="widget-title">Cadastro de Pessoas</h3>
                                    <fieldset>
                                        <input type="text" class="form-control transp" id="nomePessoa" name="nomePessoa" placeholder="Nome">
                                    </fieldset> 
                                    <fieldset>
                                        <input type="email" class="form-control transp" id="emailPessoa" name="emailPessoa" placeholder="E-mail">
                                    </fieldset> 
                                    <fieldset>
                                        <input type="text" class="form-control transp" id="empresaPessoa" name="empresaPessoa" placeholder="Empresa que pertence">
                                    </fieldset>
                                    <fieldset>
                                        <input type="text" class="form-control transp" id="cargoPessoa" name="cargoPessoa" placeholder="Cargo">
                                    </fieldset>
                                	<fieldset>
                                        <div class="form-group">
										  <label for="sel1">Origem do Contato</label>
										  <select class="form-control transp" id="sel1" name="origem_id">
										    <?php foreach($origem_contato_pessoa as $origem) :
                                                
                                            ?>
                                                <option value="<?=$origem['id']?>">
                                                    <?=$origem['nome']?>
                                                </option>
                                            <?php endforeach ?>
										  </select>
										</div>
                                    </fieldset>      
                                </div>
                              
                                <div class="col-md-6 col-sm-6">
                                    <h3 class="widget-title">______________________//.</h3>
                                    	<fieldset>
                                            <input type="text" class="form-control transp" id="celularPessoa" name="celularPessoa" placeholder="Celular">
                                        </fieldset>
                                        <fieldset>
                                            <input type="text" class="form-control transp" id="telefonePessoa" name="telefonePessoa" placeholder="Telefone/Ramal">
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-group">
											  <label for="sel1">Tipo de Pessoa</label>
											  <select class="form-control transp" id="sel1" name="tipo_pessoa_id">
											    <?php foreach($tipo_pessoa as $tipo) :
                                            
                                                ?>
                                                    <option value="<?=$tipo['id']?>">
                                                        <?=$tipo['nome']?>
                                                    </option>
                                                <?php endforeach ?>
											  </select>
											</div>
                                        </fieldset> 
                                        <fieldset>
                                            <textarea class="form-control transp" name="descricaoPessoa" id="descricaoPessoa" cols="30" rows="4" placeholder="Outras Informações..	"></textarea>
                                        </fieldset>
                                        <p style="padding-bottom: 20px; background-color:#513754;"></p>   
                                </div>        
                                <div class="col-md-12">       
                                    <center>
                                        <input type="submit" class="buttonSalvar" id="salvarPessoa" value="Salvar">
                                    	<input type="submit" class="buttonEditar" id="editarPessoa" value="Editar">
                                    	<input type="submit" class="buttonDeletar" id="deletarPessoa" value="Deletar">
                                    </center>  
                                </div>
                                
                        	</div> <!-- FECHA ROW -->
                            </div> <!-- FECHA O BOX-CONTENT -->
                            </form>
                        </div>

                        <div id="menu-3" class="content gallery-section" style="margin-top: -30px;">
                         <form class="contact-form" action="cadastro-empresa.php" method="post">
                            <div class="box-content">
                            <div class="row">                            		
                             <div class="col-md-6 col-sm-8">
                                    <h3 class="widget-title">Cadastro de Empresas</h3>
                                            <fieldset>
                                                <input type="text" class="form-control transp" id="nomeEmpresa" name="nomeEmpresa" placeholder="Nome">
                                            </fieldset> 
                                            <fieldset>
                                                <input type="email" class="form-control transp" id="emailEmpresa" name="emailEmpresa" placeholder="E-mail">
                                            </fieldset> 
                                            <fieldset>
                                                <input type="text" class="form-control transp" id="websiteEmpresa" name="websiteEmpresa" placeholder="Website">
                                            </fieldset>
                                            <fieldset>
                                                <input type="text" class="form-control transp" id="cnpjEmpresa" name="cnpjEmpresa" placeholder="CNPJ">
                                            </fieldset>
                                            <fieldset>
                                                <input type="text" class="form-control transp" id="contatoEmpresa" name="contatoEmpresa" placeholder="Contato da Empresa">
                                            </fieldset>
                                        	<fieldset>
                                                <div class="form-group">
												  <label for="sel1">Origem do Contato</label>
												  <select class="form-control transp" id="sel1" name="origem_empresa_id">
												    <?php foreach($origem_contato_empresa as $origem) :
                                                
                                                    ?>
                                                        <option value="<?=$origem['id']?>">
                                                            <?=$origem['nome']?>
                                                        </option>
                                                    <?php endforeach ?>
												  </select>
												</div>
                                            </fieldset> 
                                </div>
                              
                                <div class="col-md-6 col-sm-6">
                                        <h3 class="widget-title">______________________//.</h3>
                                        	<fieldset>
                                                <input type="text" class="form-control transp" id="celularEmpresa" name="celularEmpresa" placeholder="Celular">
                                            </fieldset>
                                            <fieldset>
                                                <input type="text" class="form-control transp" id="telefoneEmpresa" name="telefoneEmpresa" placeholder="Telefone/Ramal">
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-group">
												  <label for="sel1">Categoria</label>
												  <select class="form-control transp" id="sel1">
												    <option>Cliente em Potencial</option>
												    <option>Indefinida</option>
												    <option>Cliente Efetivo</option>
												    <option>Concorrente</option>
												    <option>Fornecedor</option>
												    <option>Parceito</option>
												  </select>
												</div>
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-group">
												  <label for="sel1">Setor</label>
												  <select class="form-control transp" id="sel1" name="setor_id">	
												    <?php foreach($setor_empresa as $setor) :
                                                
                                                    ?>
                                                        <option value="<?=$setor['id']?>">
                                                            <?=$setor['nome']?>
                                                        </option>
                                                    <?php endforeach ?>
												  </select>
												</div>
                                            </fieldset> 
                                            <fieldset>
                                                <textarea class="form-control transp" name="descricaoEmpresa" id="descricaoEmpresa" cols="30" rows="4" placeholder="Outras Informações..	"></textarea>
                                            </fieldset>
                                      	
                                            <p style="padding-bottom: 20px; background-color: #513754;"></p>
                                </div>        
                                <div class="col-md-12">          
                                    <center>
                                        <input type="submit" class="buttonSalvar" id="salvarEmpresa" value="Salvar">
                                    	<input type="submit" class="buttonEditar" id="editarEmpresa" value="Editar">
                                    	<input type="submit" class="buttonDeletar" id="deletarEmpresa" value="Deletar">
                                    </center>   
                                </div>	
                        	</div> <!-- FECHA ROW -->
                            </div> <!-- FECHA O BOX-CONTENT -->
                            </form>
                        </div>

                        <div id="menu-4" class="content contact-section" style="margin-top: -30px">
                        <form class="contact-form" action="cadastro-tarefa.php" method="post">
                            <div class="row">
                            <div class="col-md-12 col-sm-12">		
                                <div class="col-md-6 col-sm-6">
                                    <div class="box-content" >
                                        <h3 class="widget-title">Cadastro de Tarefas</h3>
                                            <fieldset>
                                                <div class="form-group">
												  <label for="sel1">Tipo da Tarefa</label>
												  <select class=" form-control transp" id="sel1">
												    <option>Visita</option>
												    <option>Reunião</option>
												    <option>Proposta</option>
												    <option>Ligação</option>
												    <option>E-mail</option>
												  </select>
												</div>
                                            </fieldset> 
                                            <fieldset>
                                                <textarea name="descricaoTarefa" class="form-control transp" id="descricaoTarefa" cols="30" rows="4" placeholder="O que é feito e qual o próximo passo?	"></textarea>
                                            </fieldset>
                                            <p style="padding-bottom: 23px; background-color: #513754;"></p>
                                    </div>
                            </div>        
                             <div class="col-md-6 col-sm-8">
                                    <div class="box-content">
                                        <h3 class="widget-title">Outras Informações</h3>
                                            <fieldset>
                                                <input type="text" class="form-control transp" id="nomeResponsavel" name="nomeResponsavel" placeholder="Nome do Responsável">
                                            </fieldset> 
                                            <fieldset>
                                                <input type="email" class="form-control transp" id="emailResponsavel" name="emailResponsavel" placeholder="Email">
                                            </fieldset> 
                                            <fieldset>
                                                <input type="text" class="form-control transp" id="empresaResponsavel" name="empresaResponsavel" placeholder="Empresa">
                                            </fieldset>
                                            <fieldset>
                                                <input type="text" class="form-control transp" id="contatoResponsavel" name="contatoResponsavel" placeholder="Contato">
                                            </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="box-content">
                                        <center>
                                            <input type="submit" class="buttonSalvar" id="salvarTarefa" value="Salvar">
                                        	<input type="submit" class="buttonEditar" id="editarTarefa" value="Editar">
                                        	<input type="submit" class="buttonDeletar" id="deletarTarefa" value="Deletar">
                                        </center>
                                    </div>
                                </div>
                            </div>	
                            </div> <!-- FECHA ROW -->
                            </form>
                        </div> <!-- FECHA DIV MENU 4 -->
                    </div>
                </div>

        
                <div class="col-md-3 hidden-sm">
                    
                    <nav id="nav" class="main-navigation hidden-xs hidden-sm">
                        <ul class="main-menu">
                            <li>
                                <a class="show-1 active homebutton" href="#"><i class="fa fa-search"></i>Consultas</a>
                            </li>
                            <li>
                                <a class="show-2 aboutbutton" href="#"><i class="fa fa-user"></i>Pessoas</a>
                            </li>
                            <li>
                                <a class="show-3 projectbutton" href="#"><i class="fa fa-building"></i>Empresas</a>
                            </li>
                            <li>
                                <a class="show-4 contactbutton" href="#"><i class="fa fa-file-text"></i>Tarefas</a>
                 			</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
        <!-- SITE-FOOTER -->
        <div class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p style="color:aquamarine">
                        	DESENVOLVIDO PELO GRUPO 4 - PROJETO PRATICO DE SISTEMAS I
                        
                    <!-- | Design: <a href="http://www.templatemo.com" target="_parent"><span class="green">free templates</span></a> -->
                        </p>
                    </div>
                </div>
            </div>
        </div> <!-- .site-footer -->

        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		<!-- templatemo 439 rectangle -->
    </body>
</html>