<!DOCTYPE html>
<html lang="en">
	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Index</title>
		
		<!-- Bootstrap -->
		<link href="../stylesheet/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../stylesheet/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		
		<!-- importando o css do projeto -->
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
						<li class="componenteDoMenuAtivado"><a href="#">Início</a></li>
						<li><a href="sobre.php">Sobre</a></li>
						<li><a href="guia_jogo.php">Guia do Jogo</a></li>
					</ul>
					
					<!-- parte direita da barra de menu -->
					<ul class="nav navbar-nav navbar-right">
						<li id="li_errorLogin"><label id="lb_errorLogin">*usuário ou senha inválidos*</label></li>
						<!-- links do menu-->
						<?php 
							include_once '../../model/php/loginError.php';
						?>	
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
		
		<!-- Logo grande -->
		<div class="container" id="containerLogo">
			<img src="../imagens/linuxLogo_large.png" id="logoLinux_large" />
		</div>
		
		<div class="textoCentralizado margemTop20px">
		  <h1>Proposta do [LeNux]</h1>
		  <p class="h1">Aprenda as habilidades necessárias para conhecer os comandos do terminal do sistema operacional Linux.</p>
		  <p>&nbsp;</p>
		</div>
		
		<!-- Descrições do sistema -->
		<div class="container margemTop30px">			
			<div class="row">
			
				<div class="col-md-4">			
					<div class="panel panel-default">
					
						<div class="panel-heading panel-heading-corPreta">
						  <h3 class="panel-title">O que é?</h3>
						</div>
					  <div class="panel-body" align="center"><img src="../imagens/piguim.png" alt="" width="250" height="250"/>
                        
                        </div>
					  <div class="panel-body">
					    <h5>É um software com o propósito de auxiliar pessoas com interesse em aprender os comandos do terminal do sistema operacional do Linux. Afim de que, por meio desse software os usuários aprendam diversos comandos e sejam capazes de utilizar o terminal de forma mais fácil, rápida e sem grandes dificuldades. </h5>
					  </div>
						
					</div>
				</div>
				
				<div class="col-md-4">			
					<div class="panel panel-default">
					
						<div class="panel-heading panel-heading-corPreta">
						  <h3 class="panel-title">Qual o objetivo?</h3>
						</div>
						
						<div class="panel-body" style="padding-bottom: 49px">
						  <div class="panel-body" align="center"><img src="../imagens/imagem2.jpg" width="250" height="250" alt=""/></div>
						  <h5>A<span style="text-align: justify">uxiliar usuários do Linux à familiarizar-se com os comandos do terminal de uma forma interativa e bastante simples. O usuário aprenderá se divertindo, fazendo com que a sua curva de aprendizagem seja mais eficaz e menos cansativa.</span></h5>
						</div>
						
					</div>
				</div>
				
				<div class="col-md-4">			
					<div class="panel panel-default">
					
						<div class="panel-heading panel-heading-corPreta">
						  <h3 class="panel-title">Quem é o público alvo?</h3>
						</div>
                        <table width="260" border="0" align="center">
						    <tbody>
						      <tr>
						        <td>
                                <div class="panel-body">
						  
						 			 <img src="../imagens/menino.png" alt="" width="250"/>
                        
                        		</div>
                                </td>
					          </tr>
						      <tr>
						        <td align="center" valign="bottom">
                                	<div class="panel-body">
<p>&nbsp;</p>
                                	  <p>&nbsp;</p>
                                	  <h5 style="text-align: justify">Tem como público alvo usuários do Sistema Operacional Linux, estudantes, professores e afins da área. </h5>
                                	  <p>&nbsp;</p>
                                	</div>
                                </td>
					          </tr>
					        </tbody>
					      </table>
						
						
						
					</div>
				</div>
				
			</div>
		</div>

	</body>
</html>