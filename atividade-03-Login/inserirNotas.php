<?php
	session_start();	
    include_once("conecta.php");
    	
    $j=0;$i=0;$cadastrado=0;

    for ($i = 0; $i < $_SESSION['qtdAlunos']; $i++){
        if(isset($_POST['nomeAluno'.$i]) && isset($_POST['primeiraNota'.$j++]) && isset($_POST['segundaNota'.$j++]) && isset($_POST['terceiraNota'.$j++])){
            if(!inserirNoBanco($i,$j)){
                break;
                $_SESSION['inserirErro'] = "Erro ao inserir.";
                header("Location: cadastroDeNotas.php");
            }else{
                $cadastrado++;
            }
        }
    }

    function inserirNoBanco($i,$j){
        $aux = $j;
        $nomeAluno = mysqli_real_escape_string($conn, $_POST['nomeAluno'.$i]);
        $aux = $aux - 2;
        $primeiraNota = mysqli_real_escape_string($conn, $_POST['primeiraNota'.$aux]);
        $aux = $aux + 1;
        $segundaNota = mysqli_real_escape_string($conn, $_POST['segundaNota'.$aux]);
        $aux = $aux + 1;
        $terceiraNota = mysqli_real_escape_string($conn, $_POST['terceiraNota'.$aux]);

        $sql = "INSERT INTO alunos(nomeAluno,nota1,nota2,nota3) VALUES('$nomeAluno','$primeiraNota','$segundaNota','$terceiraNota')";
        $resultado_aluno = mysqli_query($conn, $sql);
        $codigoAluno = mysqli_insert_id($conn);
        $codigoTurma = $SESSION['codigoTurma'];
        $sql = "INSERT INTO turmadoaluno(codigoTurma,codigoAluno) VALUES('$codigoTurma,'$codigoAluno')";
        $resultado_turmadoaluno = mysqli_query($conn, $sql);
        if(isset($resultado_aluno) && isset($resultado_turmadoaluno))
            return true;
        else
            return false;
    }
    if($cadastrado!= 0){
        $usuario = $_SESSION['usuario'];
        $sql = "SELECT quantidade FROM notasCadastradas(usuario) WHERE usuario = '$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $sql);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        if(isset($resultado)){
            $qtdNoBanco = $resultado['quantidade'];
            $resto = $qtdNoBanco - $cadastro;
            if($resto==0){
                $sql = "DELETE FROM notasCadastradas where usuario ='$usuario'";
                $resultado_deletaQtd = mysqli_query($conn, $sql);
                if(mysqli_affected_rows($conn)){
                    $_SESSION['inserido'] = "As notas de ".$cadastrado. " alunos foram inseridas!";
                    unset($_SESSION['qtdAlunos']);
                    header("Location: cadastroDeNotas.php");

                }else{
                    $sql = "INSERT INTO notasCadastradas(usuario,quantidade) VALUES('$usuario','$cadastrado')";
                    $resultado_notasCadastradas = mysqli_query($conn, $sql);

                    if(isset($resultado_notasCadastradas)){
                        $_SESSION['inserido'] = "As notas de ".$cadastrado. " alunos foram inseridas!";
                        $_SESSION['qtdAlunos'] -= $cadastro;
                        header("Location: cadastroDeNotas.php");
                    }
                    else{
                        $_SESSION['inserirErro'] = "Erro ao inserir.";
                        header("Location: cadastroDeNotas.php");
                    }
                }
            }
        }//Fazer o else daqui(provavelmente terá que usar uma function() );
             
    }else{
        $_SESSION['inserirErro'] = "Nenhuma seção de alunos preenchida.";
        header("Location: cadastroDeNotas.php");
    }


?>