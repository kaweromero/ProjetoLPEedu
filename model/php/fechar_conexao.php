<?php

    error_reporting(0);

    $host 		= "192.168.1.113";
    $database 	= "projetolpeedu";
    $user 		= "root";
    $password 	= "12345";

    $connection = new mysqli($host, $user, $password, $database);

    if ($connection->connect_error)
    {
        die("A Conexão Falhou: " . $conn->connect_error);
    }

?>