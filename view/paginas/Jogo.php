<!-- Início: Leitura da questão no banco de dados. -->
<?php

    //$nome_de_usuario = $_POST['nome_de_usuario'];
    //$pontuacao = $_POST['pontuacao'];
    //$numero_da_questao = $_POST['numero_da_questao'];

    $nome_de_usuario = "Nome do Usuário";
    $pontuacao = "P.: 0000";

    /* Chamando a questao original do dados do banco (abaixo está um exemplo). */
    $questao = "Agora levando em conta o conhecimento que adquirimos até aqui, vamos realizar nossa primeira junção de comandos!".
                "Use o comando ls, depois crie um diretório chamado Hello, acesse o diretório chamado Hello com o comando cd, crie".
                "um segundo diretório chamado World, acesse o diretório World, utilize o comando cd e volte para a raiz dos".
                "diretórios agora use o comando rm -rf Hello, para deletar o diretório Hello e todos os seus sub-diretórios.";
    $algoritmo = array("() [Escrever um texto]",
                "() [Escrever um texto]",
                "() [Escrever um texto]",
                "() [Escrever um texto]",
                "() () () [Hello]");
    $blocos = array("mkdir", "cd", "ls", "rmdir", "rm", "-rf");
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

    <!-- Início: Parte do script da lógica do jogo. -->
    <script>
        angular.module('Jogo', [])

            // Controle das informações do usuário.
            .controller('InformacoesDoUsuario', function($scope) {

                // Chama os dados lidos pelo banco de dados no PHP.
                $scope.nomeDeUsuario = '<?php echo $nome_de_usuario; ?>';
                $scope.pontuacao = '<?php echo $pontuacao; ?>';
            })

            // Controle do conteúdo do jogo.
            .controller('ConteudoDoJogo', ['$scope', '$sce', function($scope, $sce) {

                // Chama os dados lidos pelo banco de dados no PHP.
                $scope.questao = '<?php echo $questao; ?>';
                $scope.algoritmo = JSON.parse('<?php echo json_encode($algoritmo); ?>');
                $scope.blocos = JSON.parse('<?php echo json_encode($blocos); ?>');

                /* Início: Limpa as respostas do algoritmo */

                // Cria um novo algoritmo para a modificação pelo usuário (este será o algoritmo visto e modificado pelo usuário).
                $scope.algoritmo_usuario = limpar_respostas_algoritmo_Completo($scope.algoritmo);

                // Método responsável por remover as respostas do algoritmo completo.
                function limpar_respostas_algoritmo_Completo (algoritmo) {
                    var algoritmo_modificado = angular.copy(algoritmo);
                    for (i=0; i < algoritmo_modificado.length; i++){ // Percorre as linhas do algoritmo.
                        algoritmo_modificado[i] = limpar_respostas_linha_algoritmo(algoritmo_modificado[i]);
                    }
                    return algoritmo_modificado;
                }

                // Método responsável por remover as respostas de uma linha do algoritmo.
                function limpar_respostas_linha_algoritmo (linha) {
                    var linha_modificada = angular.copy(linha);
                    for (j=0; j < $scope.blocos.length; j++){ // Percorre a lista de blocos.
                        // Substitui os blocos de resposta, por campos vazios.
                        linha_modificada = linha_modificada.replace($scope.blocos[j], "");
                    }
                    return linha_modificada;
                }

                /* Final: Limpa as respostas do algoritmo */

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
                                .replace("[Escrever um texto]", "["+$scope.entrada_texto+"]");

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
                        $scope.algoritmo_usuario[$scope.linha_selecionada_algoritmo] = limpar_respostas_linha_algoritmo($scope.algoritmo[$scope.linha_selecionada_algoritmo]);
                    }
                };

                // Evento para adicionar uma resposta ao servidor.
                $scope.clique_enviar_resposta = function () {
                    // Aqui ficará a correção da resposta do usuário.
                    alert("Falta realizar a sua correção!");
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




