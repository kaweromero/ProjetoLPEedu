<?php

    error_reporting(0);

    // Abre a base de dados
    require_once("abrir_conexao.php");

    $array_questoes = array();

    /* Realiza a leitura da questão. */

    $table = "enunciado";

    $command = "SELECT enunciado
                FROM $table WHERE idEnunciado='$questao_id';";

    $execution = $connection->query($command);

    $acmSelect = $execution->num_rows;

    if ($acmSelect > 0)
    {
        while($read = $execution->fetch_assoc())
        {
            $array_questoes["enunciado"] = $read["enunciado"];
        }
    }

    /* Faz a leitura da resposta da questao. */

    $table = "questao";

    $command = "SELECT algoritmo,
                       algoritmo_respondido,
                       blocos
                FROM $table WHERE idQuestao='$questao_id';";

    $execution = $connection->query($command);

    $acmSelect = $execution->num_rows;

    if ($acmSelect > 0)
    {
        while($read = $execution->fetch_assoc())
        {
            $array_questoes["algoritmo"] = $read["algoritmo"];
            $array_questoes["algoritmo_respondido"] = $read["algoritmo_respondido"];
            $array_questoes["blocos"] = $read["blocos"];
        }
    }

    //header('Content-Type: application/json');

    // Escreve o array em formato JSON.
    $contents = json_encode($array_questoes, JSON_UNESCAPED_UNICODE);

    // Fecha a base de dados.
    require_once("fechar_conexao.php");

?>