<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Título da página -->
<title>Pré Jogo</title>

<!-- Bootstrap -->
<link href="../stylesheet/bootstrap-3.3.7-dist/css/bootstrap.min.css"
	rel="stylesheet">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../stylesheet/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<!-- importando os css do projeto -->
<link href="../stylesheet/imagens.css" rel="stylesheet">
<link href="../stylesheet/cores.css" rel="stylesheet">
<link href="../stylesheet/formatacao.css" rel="stylesheet">
<?php 
	include_once '../../model/php/sessionVerify.php';
?>

</head>

<body class="bodyCor">

	<!-- Início da barra de menu -->
	<nav class="navbar navbar-default barraDeMenu">
		<div class="container-fluid">

			<div class="navbar-header">
				<a class="navbar-brand" href="#"> <img
					src="../imagens/linuxLogo_small.png" id="linuxLogo_small">
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
				</ul>
			</div>
		</div>
	</nav>
	<!-- fim da barra de menu -->

	<div class="textoCentralizado margemTop20px">
		<h1>Iniciar Jogo?</h1>
	</div>

	<div class="container margemTop30px tamanho">

		<div class="panel panel-default">
			<div class="panel-body panel-body-corPreta">
				<div class="textoCentralizado" id="teste">
					<h4>Nome do Jogador: <?php echo ucfirst($logado); ?></h4>
					<h4 class="margemTop30px" align="left">Etapa: <?php echo ucfirst($idEtapa); ?></h4>
				</div>
			</div>
		</div>
	</div>

	<div class="container margemTop30px tamanho">
		<div class="btn-group btn-group-justified" role="group"
			aria-label="...">
			<div class="btn-group" role="group">
				<button type="button" class="btn btn-danger" id="btSairJogo">Sair</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" class="btn btn-primary" id="btIniciar">Iniciar</button>
			</div>
		</div>
	</div>
</body>
<script src="../javascript/actionsPreJogo.js"></script>
</html>