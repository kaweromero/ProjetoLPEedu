<!DOCTYPE html>
<html lang="en">
	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Título da página -->
		<title>Cadastro</title>
		
		<!-- Bootstrap -->
		<link href="../stylesheet/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		
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
						<li><a href="guia_jogo.php">Guia do Jogo</a></li>
					</ul>
					
					<!-- parte direita da barra de menu -->
					<ul class="nav navbar-nav navbar-right">
					
						<!-- links do menu-->
						<li class="componenteDoMenuAtivado"><a href="#">Cadastrar</a></li>
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
		<div class="container margemTop30px" id="containerLogo">
			<img src="../imagens/linuxLogo_large.png" id="logoLinux_large" />
		</div>
		
		<!-- pular linha -->
		<p></p>
		
		<!-- início do panel de cadastro -->
		<div class="container margemTop30px" id="containerPanel">
			<div class="panel panel-default">
				
				<!-- Header do panel de cadastro -->
				<div class="panel-heading panel-heading-corPreta">
					<h4>Cadastro no [LeNux]</h4>
				</div>
				
				<!-- Corpo do panel de cadastro -->
				<div class="panel-body">
				
					<!-- Action é acionado após clicar no botão de CRIAR CONTA -->
					<!-- O sistema direciona para a próxima página a ser chamada -->
					<!-- Início do formulário -->
					<form action="../../model/php/createUser.php" method="post" id= "formCadastro" onsubmit="clearFields();">
						<div class="input-group">
							<span class="input-group-addon" id="nome">Nome</span>
							<input type="text" class="form-control" placeholder="Nome do Usuário" aria-describedby="nome" name="nome" required="">
						</div>
						
						<!-- pular linha -->
						<p></p>
						
						<div class="input-group">
							<span class="input-group-addon" id="email">E-Mail</span>
							<input type="email" class="form-control" placeholder="E-Mail" aria-describedby="email" name="email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
						</div>
						
						<!-- pular linha -->
						<p></p>
						
						<div class="input-group">
							<span class="input-group-addon" id="dataDeNascimento">Data de Nascimento</span>
							<input type="date" class="form-control" placeholder="" aria-describedby="dataDeNascimento" name="dataDeNascimento" id="input_dataNascimento" required="">

							<span class="input-group-addon" id="genero">Gênero</span>
							<select class="form-control" name="genero">
								<option value="feminino">Feminino</option>
								<option value="masculino">Masculino</option>
							</select>
						</div>
						
						<!-- pular linha -->
						<p></p>
						
						<div class="input-group">
							<span class="input-group-addon">Senha</span>
							<input type="password" class="form-control" placeholder="Confirme sua senha" aria-describedby="senha" id="senha1" name="senha1" required=""> 
							
							<span class="input-group-addon">Confirmar Senha</span>
							<input type="password" class="form-control" placeholder="Confirme sua senha" aria-describedby="senha2" id="senha2" name="senha2" required=""> 
						</div>
						
						<!-- pular linha -->
						<p></p>
						
						<div class="btn btn-default image-preview-input">
							<label for="exampleInputFile">Selecionar imagem</label>
							<input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
						</div>
						
						<p></p>
						
						<!-- Botão de Submit -->
						<button type="submit" class="btn btn-primary" formtarget="_blank" onclick="return passwordValidateClick()";>Criar Conta</button>
					
					<!-- fim do formulário -->
					</form>
				
				<!-- fim do corpo do panel de cadastro -->
				</div>
				
			<!-- fim do panel -->	
			</div>
		
		<!-- fim do container -->
		</div>

	</body>
	<script src="../javascript/jquery-3.1.1.min.js"></script>
	<script src="../stylesheet/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script src="../javascript/jquery.maskedinput.js"></script>
	<script src="../javascript/masks.js"></script>
	<script src="../javascript/actionsCadastro.js"></script>
</html>