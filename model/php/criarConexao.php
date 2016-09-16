<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bancoprojeto";
$table="projetoLPE";

// Criar conexão
global $conn; 
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf8');


// Checar conexão
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

?>