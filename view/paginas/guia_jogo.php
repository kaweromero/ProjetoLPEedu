<!DOCTYPE html>
<html lang="en">
	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Título da página -->
		<title>Guia do Jogo</title>
		
		<!-- Bootstrap -->
		<link href="../stylesheet/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../stylesheet/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        
		
		<!-- importando os css do projeto -->
		<link href="../stylesheet/imagens.css" rel="stylesheet">
		<link href="../stylesheet/cores.css" rel="stylesheet">
		<link href="../stylesheet/formatacao.css" rel="stylesheet">
		
			
	</head>
	
	<body class="bodyCor">
		
		<!-- Início da barra de menu -->
		<nav class="navbar navbar-default barraDeMenu">
			<div class="container-fluid">
			
				<div class="navbar-header">
					<a class="navbar-brand" href="#">
						<img src="../imagens/linuxLogo_small.png" id="linuxLogo_small">
					</a>
				</div>
				
				<div id="navbar" class="navbar-collapse collapse">
					<!-- parte esqueda da barra de menu -->
					<ul class="nav navbar-nav">
					
						<!-- links do menu-->
						<li><a href="index.php">Início</a></li>
						<li><a href="sobre.php">Sobre</a></li>
						<li class="componenteDoMenuAtivado"><a href="#">Guia do Jogo</a></li>
					</ul>
					
					<!-- parte direita da barra de menu -->
					<ul class="nav navbar-nav navbar-right">
					
						<!-- links do menu-->
						<li><a href="cadastro.php">Cadastrar</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Entrar<span class="caret"></span></a>
							<ul id="login-dropdown" class="dropdown-menu">
								<li>
									<div class="row">
										<div class="col-md-12">
											<form class="form" role="form" method="post" action="../../model/php/login.php" accept-charset="UTF-8" id="login-nav">
												<div class="form-group">
													<label class="sr-only" for="email">E-mail</label>
													<input type="email" class="form-control" id="email" name="login_email" placeholder="E-mail">
												</div>
												
												<div class="form-group">
													<label class="sr-only" for="senha">Senha</label>
													<input type="password" class="form-control" id="senha" name="login_senha" placeholder="Senha">
													<div class="help-block text-right"><a href="#">Esqueceu a senha?</a></div>
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-primary btn-block">Entrar</button>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox"> mantenha-me conectado
													</label>
												</div>
											</form>
										</div>
										
										<div class="bottom text-center">
											Novo aqui? <a href="cadastro.php"><b>cadastre-se</b></a>
										</div>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- fim da barra de menu -->
		
		
		<!-- Explicação de como jogar -->
		<div class="container">		
        
        	<div class="row margemTop30px">
				<div class="panel panel-default">
					<div class="panel-heading">
					  <h3 class="panel-title">Passo 1</h3>
					</div>
					
					<div class="panel-body">
                    	<!-- Trigger the Modal -->
						<img id="myImg1" class= "imgCursor" src="../imagens/passo1.gif" alt="Passo 1" width="356" height="150">
						<div id="myModal1" class="modal">
                        	<span class="close" onclick="document.getElementById('myModal1').style.display='none'">&times;</span>

                              <!-- Modal Content (The Image) -->
                              <img class="modal-content" id="img01">
                            
                              <!-- Modal Caption (Image Text) -->
                          <div id="caption1"></div>
                        </div>
				
						<div class="col-md-8">
						  <h4>Leia atentamente todo o texto inserido no painel da "Questão", para compreender o que se pede.</h4>
					  </div>
				  </div>
				</div>
			</div>	
            	
			<div class="row margemTop30px">
				<div class="panel panel-default">
					<div class="panel-heading">
					  <h3 class="panel-title">Passo 2</h3>
					</div>
					
					<div class="panel-body">
						<!-- Trigger the Modal -->
						<img id="myImg2" class= "imgCursor" src="../imagens/passo2.gif" alt="Passo 2" width="356" height="150">
						<div id="myModal2" class="modal">
                        	<span class="close2" onclick="document.getElementById('myModal2').style.display='none'">&times;</span>

                              <!-- Modal Content (The Image) -->
                              <img class="modal-content" id="img02">
                            
                              <!-- Modal Caption (Image Text) -->
                          <div id="caption2"></div>
                      </div>
				
						<div class="col-md-8">
						  <h4>No painel de Algoritmo, clique sobre a linha de código que se deseja inserir o comando.</h4>
						</div>
					</div>
				</div>
			</div>	
            
             			<div class="row margemTop30px">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Passo 3</h3>
                                </div>
                                
                                <div class="panel-body">
                                    <!-- Trigger the Modal -->
                                    <img id="myImg3" class= "imgCursor" src="../imagens/passo3.gif" alt="Passo 3" width="356" height="150">
                                    <div id="myModal3" class="modal">
                                        <span class="close3" onclick="document.getElementById('myModal3').style.display='none'">&times;</span>
            
                                          <!-- Modal Content (The Image) -->
                                          <img class="modal-content" id="img03">
                                        
                                          <!-- Modal Caption (Image Text) -->
                                      <div id="caption3"></div>
                                  </div>
                            
                                    <div class="col-md-8">
                                      <h4>Caso seja necessário existe um campo de entrada para digitar informações, e em seguida clicar no botão "Adicionar". Caso contrário, passe para o passo 4.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
            
            <div class="row margemTop30px">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Passo 4</h3>
                                </div>
                                
                                <div class="panel-body">
                                    <!-- Trigger the Modal -->
                                    <img id="myImg4" class= "imgCursor" src="../imagens/passo4.gif" alt="Passo 4" width="356" height="150">
                                    <div id="myModal4" class="modal">
                                        <span class="close4" onclick="document.getElementById('myModal4').style.display='none'">&times;</span>
            
                                          <!-- Modal Content (The Image) -->
                                          <img class="modal-content" id="img04">
                                        
                                          <!-- Modal Caption (Image Text) -->
                                      <div id="caption4"></div>
                                  </div>
                            
                                    <div class="col-md-8">
                                      <h4>Na área de comandos (alternativas de respostas), clique no comando a ser inserido, e em seguida pressione o botão "Adicionar".</h4>
                                    </div>
                              </div>
                            </div>
                        </div>
            </div>
           
      
        <script src="../javascript/modal1.js"></script>
     	<script src="../javascript/modal2.js"></script>
        <script src="../javascript/modal3.js"></script>
        <script src="../javascript/modal4.js"></script>
	</body>
</html>