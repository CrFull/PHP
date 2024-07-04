<?php
	session_start();	
	include_once("conecta.php");	

	if((isset($_GET['nomeTurma'])) && (isset($_GET['qtdAlunos']))){
		$nomeTurma = mysqli_real_escape_string($conn, $_GET['nomeTurma']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$qtdAlunos = mysqli_real_escape_string($conn, $_GET['qtdAlunos']);
		$usuario = $_SESSION['usuario'];
		$sql = "INSERT INTO turmas(nomeTurma,qtdAlunos) VALUES('$nomeTurma','$qtdAlunos')";
		$resultado_turma = mysqli_query($conn, $sql);
		$codigoTurma = mysqli_insert_id($conn);
		$sql = "INSERT INTO turmasDoUsuario VALUES('$codigoTurma','$usuario')";
		$resultado_turmasDoUsuario = mysqli_query($conn, $sql);
		mysqli_close($conn);
		
		if(isset($resultado_turma) && isset($resultado_turmasDoUsuario) )
			$_SESSION['inserido'] = "Inserido com sucesso!";
		else	
			$_SESSION['inserirErro'] = "Erro ao inserir.";

			unset($resultado_turma);
			unset($resultado_turmasDoUsuario);
			header("Location: cadastroDaTurma.php");
	}else{
		$_SESSION['campoVazio'] = "Nome da turma e/ou Quantidade de alunos inválido(s).";
		header("Location: cadastroDaTurma.php");
	}
?>