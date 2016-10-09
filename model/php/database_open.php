<?php

    //error_reporting(0);

    $host 		= "localhost";
    $database 	= "projetolpeedu";
    $user 		= "user";
    $password 	= "user";

    $connection = new mysqli($host, $user, $password, $database);

    if ($connection->connect_error)
    {
        die("A Conexão Falhou: " . $conn->connect_error);
    }

?>