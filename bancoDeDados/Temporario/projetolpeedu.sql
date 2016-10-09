-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Out-2016 às 15:57
-- Versão do servidor: 5.7.11-log
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetolpeedu`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE `questoes` (
  `id_questao` int(11) NOT NULL,
  `questao` varchar(5000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`id_questao`, `questao`) VALUES
(1, 'Olá, está na hora conhecermos nosso primeiro comando Linux. Ele se chama mkdir, parece uma junção estranha de letras, mas na verdade é um mnemônico para make directory, que em tradução direta significa "fazer diretório", ou seja, esse comando é responsável por criar um diretório, mas utilizar ele assim não faz sentido, pois seu diretório não teria um nome que o identificasse, então para nomearmos esse diretório precisamos após digitar o comando, digitar um espaço e a partir daí digitar o nome do diretório. Vamos lá, crie o diretório <MeuPrimeiroDiretorio>.'),
(2, 'Pra visualizarmos se realmente conseguimos criar nosso diretório use o comando ls. Esse comando desempenha a função de exibir todos os diretórios e arquivos existentes no diretório atual.'),
(3, 'Assim como é possível caminhar entre as pastas do seus sistemas Windows ou Mac, você também pode fazer isso via terminal usando o comando cd. Utilize o comando cd para acessar a pasta MeuPrimeiroDiretorio, usando cd <Nome do diretório>.'),
(4, 'Nesse momento estamos dentro do diretório MeuPrimeiroDiretório, vamos criar nossa primeira hierarquia de diretórios criando um segundo diretório nesse momento.'),
(5, 'Opa! Parece que já temos um segundo diretório que tal acessarmos ele também? Dica: Use o comando cd ;)'),
(6, 'Quando há uma hierarquia de diretório, o comando cd pode assumir outra função quando adicionamos dois pontos ao lado do comando "..", dessa forma ao inves de acessar uma pasta, iremos voltar um nível da hierarquia.'),
(7, 'Estamos no diretório MeuPrimeiroDiretorio. Que tal desfazermos essa hierarquia de dois diretórios deletando o MeuSegundoDiretorio? Utilize o comando rm <Nome do diretório> para deletar o MeuSegundoDiretorio.'),
(8, 'Agora levando em conta o conhecimento que adquirimos até aqui, vamos realizar nossa primeira junção de comandos! Use o comando ls, depois crie um diretório chamado Hello, acesse o diretório Hello com o comando cd, crie um segundo diretório chamado World, acesse o diretório World, utilize o comando cd, mas apenas ele, e volte para a raiz dos diretórios agora use o comando rm -rf Hello, para deletar o diretório Hello e todos os seus sub-diretórios.'),
(9, 'No linux, existe um comando chamado touch que tem a capacidade de criar arquivos seguindo o esquema: touch <Nome do arquivo>.(extensão). Para entendermos melhor o seu funcionamento que tal criarmos um arquivo? Mas antes vamos deixar as coisas um pouco mais organizadas criando um diretório chamado "Documentos", acesse esse diretório com o comando cd, dentro do diretório crie o arquivo chamado "OlaMundo.txt", use o comando ls para verificar se seu arquivo foi realmente criado, e por fim utilize o comando cd apenas para voltar para o diretório raiz.'),
(10, 'Aproveitando a deixa do diretório Documentos, vamos aprender um novo comando, responsável por mover arquivos entre diretórios. O comando capaz de fazer isso é o mv, que lembra muito a palavra "move" do inglês, mas antes de utilizar ela, precisamos criar um segundo diretório para que o comando mv se faça necessário. Então crie um segundo diretório chamado "Outros Documentos", volte para a raiz com o comando cd apenas, agora temos dois diretórios, sendo um deles (Documentos) com um arquivo dentro. Temos também motivos para utilizar o comando mv! O comando mv funciona da seguinte forma mv <Caminho de origem até o arquivo> <Caminho de destino do arquivo>. Sendo assim mova o arquivo "OlaMundo.txt" que está dentro do diretório "Documentos" para o diretório "Outros Documentos".');

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE `respostas` (
  `id_resposta` int(11) NOT NULL,
  `algoritmo` varchar(5000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `algoritmo_respondido` varchar(5000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `blocos` varchar(5000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id_questao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id_resposta`, `algoritmo`, `algoritmo_respondido`, `blocos`, `id_questao`) VALUES
(1, '() [TEXTO]', '(mkdir) [MeuPrimeiroDiretorio]', 'mkdir', 1),
(2, '()', '(ls)', 'mkdir | ls', 2),
(3, '() [TEXTO]', '(cd) [MeuPrimeiroDiretorio]', 'cd | mkdir | ls', 3),
(4, '() [TEXTO]', '(mkdir) [TEXTO1]', 'mkdir | cd | ls', 4),
(5, '() [TEXTO]', '(cd) [TEXTO1]', 'mkdir | cd | ls', 5),
(6, '() [TEXTO]', '(cd) [..]', 'mkdir | cd', 6),
(7, '() [TEXTO]', '(rm) [MeuSegundoDiretorio]', 'mkdir | cd | ls | rm', 7),
(8, '() [TEXTO] | () [TEXTO] | () [TEXTO] | () [TEXTO] | () () () [TEXTO]', '(mkdir) [Hello] | (cd) [Hello] | (mkdir) [World] | (cd) [World] | (cd) (rm) (-rf) [Hello]', 'mkdir | cd | ls | rmdir | rm | -rf', 8),
(9, '() [TEXTO] | () [TEXTO] | () [TEXTO] | () | ()', '(mkdir) [Documentos] | (cd) [Documentos] | (touch) [OlaMundo.txt] | (ls) | (cd)', 'touch | mkdir | cd | ls | rm', 9),
(10, '() [TEXTO] | () () [TEXTO]', '(mkdir) [Outros Documentos] | (cd) (mv) [Documentos/OlaMundo.txt Outros Documentos]', 'mv | mkdir | cd | ls | touch', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`id_questao`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id_resposta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questoes`
--
ALTER TABLE `questoes`
  MODIFY `id_questao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id_resposta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
