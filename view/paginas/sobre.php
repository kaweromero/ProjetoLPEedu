<!DOCTYPE html>
<html lang="en">
	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Título da página -->
		<title>Sobre</title>
		
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
						<li class="componenteDoMenuAtivado"><a href="#">Sobre</a></li>
						<li><a href="guia_jogo.php">Guia do Jogo</a></li>
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
		
		
		<!-- Descrições do sistema -->
		<div class="container">			
			<div class="row margemTop30px">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Jaquelinne Amorim</h3>
					</div>
					
					<div class="panel-body">
						<div class="col-md-2">			
							<img src="../imagens/perfil_jaquelinne.jpg" class="img-circle">
						</div>
				
						<div class="col-md-8">
						  <h5> Currículo LATTES: http://lattes.cnpq.br/2081300300814499</h5>
						  <h5>E-mail: Amorim.jaquelinne@gmail.com</h5>
						  <h5>Contato: (83) 98883-6188 </h5>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row margemTop30px">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Rodrigo Andrade</h3>
					</div>
					
					<div class="panel-body">
						<div class="col-md-2">			
							<img src="../imagens/perfil_rodrigo.jpg" class="img-circle">
						</div>
				
						<div class="col-md-8">			
							<h5> Currículo LATTES: </h5>
                            <h5>E-mail: diguuhandrade@gmail.comh5>
						    <h5>Contato: (83) 99804-0949 </h5>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row margemTop30px">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Alcinael Fernandes</h3>
					</div>
					
					<div class="panel-body">
						<div class="col-md-2">			
							<img src="../imagens/perfil_alcinael.jpg" class="img-circle">
						</div>
				
						<div class="col-md-8">			
							<h5> Currículo LATTES: http://lattes.cnpq.br/3788437621565540</h5>
                            <h5>E-mail: Alcinael.fernandes@gmail.com</h5>
						    <h5>Contato: (83) 99985-8122 </h5>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row margemTop30px">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Kawe Romero</h3>
					</div>
					
					<div class="panel-body">
						<div class="col-md-2">			
							<img src="../imagens/perfil_kawe.jpg" class="img-circle">
						</div>
				
						<div class="col-md-8">
						  <h5> Currículo LATTES: http://lattes.cnpq.br/4924396663260493 </h5>
						  <h5>E-mail: Kaweromero@gmail.com</h5>
						  <h5>Contato: (83) 99967-2823 </h5>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row margemTop30px">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Adalberto Monteiro</h3>
					</div>
					
					<div class="panel-body">
						<div class="col-md-2">			
							<img src="../imagens/perfil_adalberto.jpg" class="img-circle">
						</div>
				
						<div class="col-md-8">
						  <h5>Currículo LATTES: http://lattes.cnpq.br/0694466357026347 </h5>
						  <p>E-mail: Betinho.fmn@gmail.com</p>
						  <p>Contato: (83) 99304-8230 </p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row margemTop30px">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Daniel Marques</h3>
					</div>
					
					<div class="panel-body">
						<div class="col-md-2">			
							<img src="../imagens/perfil_daniel.jpg" class="img-circle">
						</div>
				
						<div class="col-md-8">
						  <h5> Currículo LATTES: http://lattes.cnpq.br/4103540054940166</h5>
						  <h5>E-mail: Danmarquesvg@gmail.com</h5>
						  <p>Contato: (83) 98666-5185</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row margemTop30px">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Lucas Barbosa</h3>
					</div>
					
					<div class="panel-body">
						<div class="col-md-2">			
							<img src="../imagens/perfil_lucasbarbosa.jpg" class="img-circle">
						</div>
				
						<div class="col-md-8">
						  <h5>Currículo LATTES: </h5>
                          <h5> E-mail: Lucboluc@gmail.com </h5>
                          <h5> Contato: (83) 98796-9794 </h5>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row margemTop30px">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Lucas Milleno</h3>
					</div>
					
					<div class="panel-body">
						<div class="col-md-2">			
							<img src="../imagens/perfil_lucasmilleno.jpg" class="img-circle">
						</div>
				
						<div class="col-md-8">			
						  <h5> Currículo LATTES: http://lattes.cnpq.br/3775515802533130</h5>
						  <h5>E-mail: Lucas.mlima@hotmail.com.br</h5>
						  <p>Contato: (83) 98630-2952</p>
						</div>
					</div>
				</div>
			</div>
            
            <div class="row margemTop30px">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Alisson Santos</h3>
					</div>
					
					<div class="panel-body">
						<div class="col-md-2">			
							<img src="../imagens/perfil_alisson.jpg" class="img-circle">
						</div>
				
						<div class="col-md-8">
						  <h5> Currículo LATTES: http://lattes.cnpq.br/5125531492022780</h5>
						  <h5>E-mail: Alissonssz@hotmail.com</h5>
						  <p>Contato: (83) 99941-5505</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row margemTop30px">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">José Fábio</h3>
					</div>
					
					<div class="panel-body">
						<div class="col-md-2">			
							<img src="../imagens/perfil_josefabio.jpg" class="img-circle">
						</div>
				
						<div class="col-md-8">			
							<h5> Currículo LATTES: http://lattes.cnpq.br/8358991874390574</h5>
						  <h5>E-mail: Fabio.ds@live.com</h5>
						  <p>Contato: (83) 99802-6624</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>

	</body>
</html>