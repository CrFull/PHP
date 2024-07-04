<?php
	session_start();	
	//Incluindo a conexão com banco de dados
	include_once("conecta.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['usuario'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		$senha = md5($senha);
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $sql);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		mysqli_close($conn);
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$_SESSION['usuario'] = $resultado['usuario'];
			$_SESSION['usuarioNome'] = $resultado['usuarioNome'];
			$_SESSION['usuarioLogado'] = true;
		    header("Location: menuUsuario.php");
						
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário e/ou senha inválido(s)";
			header("Location: index.php");
		}
			unset($resultado);
			unset($resultado_usuario);
			unset($sql);
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['loginErro'] = "Usuário e/ou senha inválido(s)";
		header("Location: index.php");
	}
?>