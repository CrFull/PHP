<?php
	session_start();
	
	unset(
		$_SESSION['usuarioNome'],
		$_SESSION['usuario'],
        $_SESSION['senha'],
		$_SESSION['usuarioLogado'],
		$_SESSION['nomeTurma'],
		$_SESSION['qtdAlunos'],
		$_SESSION['turmaProcessada'],
		$_SESSION['codigoTurma']

	);
	
	$_SESSION['logindeslogado'] = "Deslogado com sucesso";
	//redirecionar o usuario para a página de login
	header("Location: index.php");
?>