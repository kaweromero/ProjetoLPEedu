<?php
	include_once '../../model/php/sessionVerify.php';

	$nome_do_usuario = ucfirst($logado);
	$pontuacao = $_POST['pontuacao'];
	$id_etapa = $_POST['id_etapa'];
	$questoes_respondidas = $_POST['questoes_respondidas'];

	// Caso os atributos sejam inválidos.
	if (!isset($nome_de_usuario)){
		$nome_de_usuario = "Usuario";
	}
	if (!isset($pontuacao)){
		$pontuacao = 0;
	}
	if (!isset($id_etapa)){
		$id_etapa = 1;
	}
	if (!isset($questoes_respondidas)){
		$questoes_respondidas = 0;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Avaliação</title>

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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular-sanitize.js"></script>

	<script>

		var iniciar_etapa = function(pontuacao, id_questao) {
			var stringForm = "<form action='jogo.php' method='POST'>"
				+"<input type='hidden' name='pontuacao' value='" + pontuacao + "'/>"
				+"<input type='hidden' name='questao_id' value='" + id_questao + "'/></form>";
			var form = $(stringForm);
			$('body').append(form);
			$(form).submit();
		};

	</script>

	<script>

		<!-- Início: Parte do script do resultado da avaliação. -->
		angular.module('Avaliacao', [])

		// Controle das informações do usuário.
			.controller('BarraDeMenu', function($scope) {

				$scope.nomeDoUsuario = 'Usuário: ' + '<?php echo $nome_do_usuario; ?>';
				$scope.pontuacao = 'Pontuação: ' + '<?php echo $pontuacao; ?>';
			})

			.controller('Conteudo', ['$scope', '$sce', function($scope, $sce) {

				// Chama os dados lidos pelo banco de dados no PHP.
				$scope.idEtapa = '<?php echo $id_etapa; ?>';
				$scope.pontuacao = JSON.parse('<?php echo $pontuacao ?>');
				$scope.questoesRespondidas = JSON.parse('<?php echo $questoes_respondidas ?>');

				$scope.desempenhoPositivo = ($scope.pontuacao * 100) / $scope.questoesRespondidas;
				$scope.desempenhoNegativo = (($scope.questoesRespondidas - $scope.pontuacao) * 100) / $scope.questoesRespondidas;

				$scope.desempenhoHtml = '<div class="progress">'
					+'<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="' + $scope.desempenhoPositivo + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + $scope.desempenhoPositivo + '%;">'
					+'<label for="aria-valuenow">' + $scope.desempenhoPositivo + '%</label>'
					+'</div>'
					+'<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="' + $scope.desempenhoNegativo + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + $scope.desempenhoNegativo + '%;">'
					+'<label for="aria-valuenow">' + $scope.desempenhoNegativo + '%</label>'
					+'</div>'
					+'</div>';
				$scope.desempenho_html = $sce.trustAsHtml($scope.desempenhoHtml);

				/*
				 $scope.questoesIncorretasHtml = '<div class="panel-body">' + '<h3>';
				 for (i=0; i < $scope.questoesIncorretas.length; i++){
				 $scope.teste += $scope.questoesIncorretas[i] + " - ";
				 $scope.questoesIncorretasHtml += '<span class="label label-danger" style="margin: 0.5ch">' + $scope.questoesIncorretas[i] + '</span>';
				 }
				 $scope.questoesIncorretasHtml += '</h3>' + '</div>';

				 alert($scope.teste);

				 $scope.questoes_incorretas_html = $sce.trustAsHtml($scope.questoesIncorretasHtml);

				 */

				$scope.clique_reiniciar_jogo = function () {
					iniciar_etapa('0', '1');
				};

				$scope.clique_proxima_etapa = function () {
					iniciar_etapa($scope.pontuacao, '1');
				};
			}]);

	</script>

</head>

<body class="bodyCor" ng-app="Avaliacao">

<!-- Início da barra de menu -->
<nav class="navbar navbar-default barraDeMenu" ng-controller="BarraDeMenu">
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
				<li><a>{{ pontuacao }}</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ nomeDoUsuario }}<span class="caret"></span></a>
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
<div class="container" ng-controller="Conteudo">

	<div class="row">

		<div class="col-md-2">
			<div class="container">
				<img src="../imagens/userIcon.png" alt="" class="img-thumbnail">
			</div>
		</div>

		<div class="col-md-10">

			<div class="container-fluid">

				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Número da Etapa</h3>
					</div>

					<div class="panel-body">
						<h5> {{ idEtapa }} </h5>
					</div>
				</div>

			</div>

			<div class="container-fluid">

				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Desempenho</h3>
					</div>

					<div class="panel-body">
						<div compile ng-bind-html="desempenho_html"></div>
					</div>

				</div>

			</div>

			<!--div class="container-fluid">

				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Questões Incorretas</h3>
					</div>
					<div compile ng-bind-html="questoes_incorretas_html"></div>
				</div>

			</div-->

			<div class="container-fluid">
				<button type="button" class="btn btn-primary" ng-click="clique_reiniciar_jogo()">Refazer esta etapa</button>
				<button type="button" class="btn btn-success" ng-click="clique_proxima_etapa()">Próxima Etapa</button>
			</div>

		</div>
	</div>

</div>

</body>
</html>