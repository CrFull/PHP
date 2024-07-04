<?php
	session_start();
	include_once("conecta.php");
    $turma = $_GET['selectTurma'];
    
    $sql = "SELECT qtdAlunos,nomeTurma FROM turmas WHERE codigoTurma = '$turma' LIMIT 1";
	$resultado_turma = mysqli_query($conn, $sql);
	$resultado = mysqli_fetch_assoc($resultado_turma);
	mysqli_close($conn);
  
	if(isset($resultado)){
			$_SESSION['qtdAlunos'] = $resultado['qtdAlunos'];
			$_SESSION['nomeTurma'] = $resultado['nomeTurma'];
			$SESSION['codigoTurma'] = $turma;
            unset($resultado);
			unset($resultado_turma);
		 	$_SESSION['turmaProcessada'] = true;
		    header("Location: cadastroDeNotas.php");
						
		}else{	
			unset($resultado);
			unset($resultado_turma);
			$_SESSION['selecionaTurmaErro'] = "Houve um erro ao consultar";
			header("Location: selecionarTurma.php");
		}
	

?>