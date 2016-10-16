<?php

	require_once('criarConexao.php');	
    setlocale(LC_ALL, 'pt_BR.utf8', 'Portuguese_Brazil');

	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$genero = $_POST['genero'];
	$nascimento = $_POST['dataDeNascimento'];
	$senha = $_POST['senha'];
	
	
	
	$sql = "INSERT INTO $table (nome,email,genero,nascimento,senha) VALUES ('$nome', '$email', '$genero', '$nascimento', '$senha')";
	$result = mysqli_query($conn, $sql);
	
	if ($result === true){		
		echo
			'<script language="javascript" charset="utf-8">
				alert("Cadastro realizado com sucesso!");
			</script> ';		
	} else{
		$msgError = mysqli_error($conn);
		echo 
			'<script language="javascript" charset="utf-8">
				alert("Erro: '.$msgError.'");
			</script> ';

	}	
	mysqli_close($conn);
	
?>