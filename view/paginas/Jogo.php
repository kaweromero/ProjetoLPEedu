<!-- Início: Leitura da questão no banco de dados. -->
<?php
	include_once '../../model/php/sessionVerify.php';
	
    error_reporting(0);

    // Requisições recebidas.
    $nome_do_usuario = ucfirst($logado);

    $pontuacao = $_POST['pontuacao'];
    $questao_id = $_POST['questao_id'];

    // Caso os atributos sejam inválidos.
    if (!isset($nome_de_usuario)){
        $nome_de_usuario = "Usuario";
    }
    if (!isset($pontuacao)){
        $pontuacao = 0;
    }
    if (!isset($questao_id)){
        $questao_id = 1;
    }

    // Chama o leitor da questão no banco.
    require_once('../../model/php/script_questoes_jogo.php');

    // Decodificando o JSON dos valores lidos.
    $contents_decode = json_decode($contents);

    // Leitura da questao: Pegando dados do JSON.
    $enunciado = $contents_decode->enunciado;
    $algoritmoString = $contents_decode->algoritmo;
    $algoritmoRespondidoString = $contents_decode->algoritmo_respondido;
    $blocosString = $contents_decode->blocos;

    // Separa o algoritmo e os blocos para o array de linhas.
    $algoritmo = explode(" | ", $algoritmoString);
    $algoritmoRespondido = explode(" | ", $algoritmoRespondidoString);
    $blocos = explode(" | ", $blocosString);
?>
<!-- Final: Leitura da questão no banco de dados. -->

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo</title>

    <link href="../stylesheet/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="../assets/css/Mockup-MacBook-Pro.css">
    <link rel="stylesheet" href="../assets/css/untitled.css">
    <link rel="stylesheet" href="../assets/css/Bootstrap-Payment-Form.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular-sanitize.js"></script>

    <script>

        var proxima_questao = function(pontuacao, id_questao) {
            var stringForm = "<form action='jogo.php' method='POST'>"
                +"<input type='hidden' name='pontuacao' value='" + pontuacao + "'/>"
                +"<input type='hidden' name='questao_id' value='" + id_questao + "'/></form>";
            var form = $(stringForm);
            $('body').append(form);
            $(form).submit();
        };

        var gerar_relatorio = function(pontuacao, id_etapa, questoes_respondidas) {
            var stringForm = "<form action='avaliacao.php' method='POST'>"
                +"<input type='hidden' name='pontuacao' value='" + pontuacao + "'/>"
                +"<input type='hidden' name='id_etapa' value='" + id_etapa + "'/>"
                +"<input type='hidden' name='questoes_respondidas' value='" + questoes_respondidas + "'/></form>";
            var form = $(stringForm);
            $('body').append(form);
            $(form).submit();
        };

    </script>

    <!-- Início: Parte do script da lógica do jogo. -->
    <script>
        angular.module('Jogo', [])

        // Controle das informações do usuário.
            .controller('InformacoesDoUsuario', function($scope) {

                // Chama os dados lidos pelo banco de dados no PHP.
                $scope.nomeDeUsuario = 'Usuário: ' + '<?php echo $nome_do_usuario ?>'; //esse dado deve ser da sessão mesmo!!!
                $scope.pontuacao = 'Pontuação: ' + '<?php echo $pontuacao; ?>';
            })

            // Controle do conteúdo do jogo.
            .controller('ConteudoDoJogo', ['$scope', '$sce', function($scope, $sce) {

                $scope.gerar_jogo = function(){

                    // Chama os dados lidos pelo banco de dados no PHP.
                    $scope.questao = '<?php echo $enunciado; ?>';
                    $scope.algoritmo = JSON.parse('<?php echo json_encode($algoritmo); ?>');
                    $scope.algoritmo_respondido = JSON.parse('<?php echo json_encode($algoritmoRespondido); ?>');
                    $scope.blocos = JSON.parse('<?php echo json_encode($blocos); ?>');

                    // Define o algoritmo que será construído pelo usuário.
                    $scope.algoritmo_usuario = angular.copy($scope.algoritmo);

                    /* Início: Prepara o código HTML para apresentação na interface do usuário. */

                    $scope.algoritmo_html = '';
                    $scope.algoritmo_numero_html = '';
                    $scope.blocos_html = '';

                    // Criar o código HTML a partir da lista de linhas do algoritmo e dos blocos.
                    for (i=0; i < $scope.algoritmo_usuario.length; i++){
                        $scope.algoritmo_html += '<a href="#" class="list-group-item" ng-click="clique_linha_algoritmo('+i+')"><span> {{ algoritmo_usuario['+i+'] }} </span></a>';
                        $scope.algoritmo_numero_html += '<li class="list-group-item"><span>'+(i+1)+'</span></li>';
                    }
                    for (i=0; i < $scope.blocos.length; i++){
                        $scope.blocos_html += '<a href="#" class="list-group-item" ng-click="clique_linha_bloco('+(i+1)+')"><span> {{ blocos['+i+'] }} </span></a>';
                    }

                    // Converte as strings para código HTML.
                    $scope.algoritmo_html = $sce.trustAsHtml($scope.algoritmo_html);
                    $scope.algoritmo_numero_html = $sce.trustAsHtml($scope.algoritmo_numero_html);
                    $scope.blocos_html = $sce.trustAsHtml($scope.blocos_html);

                    /* Final: Prepara o código HTML para apresentação na interface do usuário. */
                };

                $scope.limpar_jogo = function () {
                    $scope.questao = '';
                    $scope.algoritmo_html = $sce.trustAsHtml('<div></div>');
                    $scope.algoritmo_numero_html = $sce.trustAsHtml('<div></div>');
                    $scope.blocos_html = $sce.trustAsHtml('<div></div>');
                };

                // Inicia o jogo.
                $scope.gerar_jogo();

                // Linhas clicadas na caixa do algoritmo e na caixa de blocos.
                $scope.linha_selecionada_algoritmo = -1;
                $scope.linha_selecionada_bloco = -1;

                // Evento de clique nas linhas do algoritmo.
                $scope.clique_linha_algoritmo = function (linha) {
                    $scope.linha_selecionada_algoritmo = linha; // Substitui a última linha clicada.
                };

                // Evento de clique nas linhas dos blocos.
                $scope.clique_linha_bloco = function (linha) {
                    $scope.linha_selecionada_bloco = linha; // Substitui a última linha clicada.
                };

                // Evento de clique para adicionar um bloco/texto ao algoritmo.
                $scope.clique_adicionar_bloco = function () {

                    // Verifica se o usuário clicou na linha do algoritmo que deseja alterar, e no bloco que deseja adicionar a esta linha.
                    if ($scope.linha_selecionada_algoritmo != -1 && $scope.linha_selecionada_bloco != -1){

                        // Clicou para adicionar uma entrada de texto.
                        if ($scope.linha_selecionada_bloco == 0){
                            // Substitui o primeiro '[Escrever um texto]', pelo texto digitado pelo usuário.
                            $scope.algoritmo_usuario[$scope.linha_selecionada_algoritmo] = $scope.algoritmo_usuario[$scope.linha_selecionada_algoritmo]
                                .replace("[TEXTO]", "["+$scope.entrada_texto+"]");

                            // Clicou para adicionar um bloco.
                        } else {
                            // Substitui o primeiro '()', pelo bloco escolhido pelo usuário.
                            $scope.algoritmo_usuario[$scope.linha_selecionada_algoritmo] = $scope.algoritmo_usuario[$scope.linha_selecionada_algoritmo]
                                .replace("()", "("+$scope.blocos[$scope.linha_selecionada_bloco-1]+")");
                        }

                        // Se ele não clicou em um dos dois, apresenta um alerta explicativo.
                    } else {
                        alert("Você deve selecionar a (linha que deseja alterar), em seguida selecionar o (bloco/texto) que deseja adicionar, para então clicar em (Adicionar)!");
                    }
                };

                // Evento para limpar uma linha do algoritmo.
                $scope.clique_limpar_linha_algoritmo = function () {
                    // Verifica se o usuário clicou em uma linha do algoritmo.
                    if ($scope.linha_selecionada_algoritmo != -1){
                        // Substitui a linha modificada, pela mesma linha sem respostas.
                        $scope.algoritmo_usuario[$scope.linha_selecionada_algoritmo] = $scope.algoritmo[$scope.linha_selecionada_algoritmo];
                    }
                };

                // Evento para adicionar uma resposta ao servidor.
                $scope.clique_enviar_resposta = function () {

                    // Informacoes do jogo.
                    $scope.nomeDeUsuario = '<?php echo $nome_do_usuario ?>';
                    $scope.pontuacao = '<?php echo $pontuacao; ?>';
                    $scope.questao_id = '<?php echo $questao_id; ?>';

                    $scope.erro_cometido = false;
                    $scope.erro_cometido_string = '';

                    // Realiza a correção.
                    for (i=0; i < $scope.algoritmo_usuario.length; i++){
                        if ($scope.algoritmo_usuario[i] != $scope.algoritmo_respondido[i]){
                            $scope.erro_cometido_string += (i+1) + ' |';
                            $scope.erro_cometido = true;
                        }
                    }

                    // Apresenta o feedback.
                    if ($scope.erro_cometido == true){
                        alert("Você cometeu um erro nas linhas: | " + $scope.erro_cometido_string);
                    } else {
                        $scope.pontuacao++;
                        alert("Parabéns, você acertou o algoritmo!");
                    }

                    // Caso o id seja igual a 10. Gera o relatório.
                    if ($scope.questao_id == 10){

                        gerar_relatorio($scope.pontuacao, '1', $scope.questao_id);

                    // Caso contrário, Gera uma nova questão.
                    } else {
                        $scope.questao_id++;
                        proxima_questao($scope.pontuacao, $scope.questao_id);
                    }
                };
            }])

            // Diretiva para atualizar a interface criada com o "ng-bind-html".
            .directive('compile',function($compile, $timeout){
                return{
                    restrict:'A',
                    link: function(scope,elem,attrs){
                        $timeout(function(){
                            $compile(elem.contents())(scope);
                        });
                    }
                }
            });

    </script>
    <!--Final:  Parte do script da lógica do jogo. -->
	
</head>

<body ng-app="Jogo">
<nav class="navbar navbar-default custom-header">
    <div class="container-fluid" ng-controller="InformacoesDoUsuario">

        <div class="navbar-header">
            <a class="navbar-brand navbar-link" href="#"> <img class="img-circle" src="../imagens/linuxLogo_small.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse">
            <p class="lead navbar-text navbar-right">{{ pontuacao }}</p>
            <p class="lead show navbar-text navbar-righ">{{ nomeDeUsuario }}</p>
        </div>

    </div>
</nav>
<div class="container-fluid" ng-controller="ConteudoDoJogo">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Questão</h3></div>
                <div class="panel-body">
                    <textarea class="input-lg" rows="5" cols="38">{{ questao }}</textarea>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="text-center panel-title">Blocos</h1></div>
                <div class="panel-body">
                    <ul class="list-group">
                        <a href="#" class="list-group-item" ng-click="clique_linha_bloco(0)"><span>Digite um texto: <input type="text" ng-model="entrada_texto"></span></a>
                        <div compile ng-bind-html="blocos_html"></div>
                    </ul>
                </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg" type="button" ng-click="clique_adicionar_bloco()">Adicionar</button>
        </div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Algoritmo</h3></div>
                <div class="panel-body">
                    <div class="col-md-1">
                        <div class="list-group">
                            <ul class="list-group">
                                <div compile ng-bind-html="algoritmo_numero_html"></div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-11">
                        <div class="list-group">
                            <ul class="list-group">
                                <div compile ng-bind-html="algoritmo_html"></div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-default btn-block btn-lg" type="button" ng-click="clique_limpar_linha_algoritmo()">Limpar</button>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-success btn-block btn-lg" type="button" ng-click="clique_enviar_resposta()">Enviar Resposta</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>




