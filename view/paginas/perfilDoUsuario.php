<!DOCTYPE html>
<html lang="en">
	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Perfil do usuário</title>
		
		<!-- Bootstrap -->
		<link href="../stylesheet/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="../javascript/jquery-3.1.1.min.js"></script>
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
				
				<div id="navbar" class="navbar-collapse">
					<!-- parte esqueda da barra de menu -->
					<ul class="nav navbar-nav textoBranco">
					
						<!-- links do menu-->
						<li><a href="index.php">Início</a></li>
						<li><a href="sobre.php">Sobre</a></li>
						<li><a href="guia_jogo.php">Guia do Jogo</a></li>
					</ul>
					
					<!-- parte direita da barra de menu -->
					<ul class="nav navbar-nav navbar-right">
					
						<!-- links do menu-->
						<li><a>Pontuação: 100 pontos</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Nome do Usuário<span class="caret"></span></a>
							<ul id="login-dropdown" class="dropdown-menu">
								<li>
									<div class="row">
										<div class="col-md-12">
											<form class="form" role="form" method="post" action="#" accept-charset="UTF-8" id="login-nav">
											
												<div class="form-group">
													<button type="submit" class="btn btn-primary btn-block">Perfil</button>
												</div>
												
												<div class="form-group">
													<button type="submit" class="btn btn-danger btn-block">Sair</button>
												</div>
												
											</form>
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
		
		<!-- início do panel principal -->
		<div class="container">
		
			<div class="row">
				
				<div class="col-md-12">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#home">Perfil</a></li>
						<li><a data-toggle="tab" href="#menu1">Desempenho</a></li>
					</ul>

					<div class="tab-content">
					
						<div id="home" class="tab-pane fade in active">
							<div class="panel panel-default">
								<div class="panel-body">

									<div class="container">
										<div class="row">
											
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
													
												<div class="panel panel-info">
													<div class="panel-heading">
														<h3 class="panel-title">Lucas Milleno</h3>
													</div>
														
													<div class="panel-body">
														<div class="row">
															<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../imagens/perfil_lucasmilleno.jpg" class="img-circle img-responsive"> </div>
                
																<div class=" col-md-9 col-lg-9 "> 
																	<table class="table table-user-information">
																		<tbody>
																			<tr>
																				<td>Data de Nascimento</td>
																				<td>01/12/1990</td>
																			</tr>

																			<tr>
																				<td>Gênero</td>
																				<td>Masculino</td>
																			</tr>
																			
																			<tr>
																				<td>Email</td>
																				<td><a href="mailto:lucas@gmail.com">lucas@gmail.com</a></td>
																			</tr>
																			
																		</tbody>
																	</table>
                  
																	<a href="#" class="btn btn-primary">Editar Perfil</a>
																</div>
															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>
						
						<div id="menu1" class="tab-pane fade">
							<div class="panel panel-default">
								<div class="panel-body">
									
									<div class="container">
										<div class="row">
											
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
													
												<div class="panel panel-info">
													<div class="panel-heading">
														<h3 class="panel-title">Lucas Myllenno</h3>
													</div>
														
													<div class="panel-body">
														<div class="row">
															<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../imagens/perfil_lucasmilleno.jpg" class="img-circle img-responsive"> </div>
                
																<div class=" col-md-9 col-lg-9 "> 
																	<table class="table table-user-information">
																		<tbody>
																			<tr>
																				<td>Nível</td>
																				<td>2</td>
																			</tr>

																			<tr>
																				<td>Quantidade de questões respondidas</td>
																				<td>13</td>
																			</tr>
																			
																			<tr>
																				<td>Porcentagem de Acertos</td>
																				<td>65%</a></td>
																			</tr>
																			
																		</tbody>
																	</table>
																</div>
															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</body>
</html>