<?php
    session_start();
    if(isset($_SESSION['usuarioLogado'])){
        header("Location: menuUsuario.php");
        die();
    }
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imagens/ifma.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center" style="background-image: url('imagens/menu1.jpg'); 
    background-repeat: no-repeat;
    background-size:100%;
    bottom: 0;
    color: black;
    left: 0;
    overflow: auto;
    padding: 3em;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0; 
    background-size: cover";
    >
    <form class="form-signin" method="POST" action="validaLogin.php">
    <a href="https://montecastelo.ifma.edu.br/" target="_blank"><img class="mb-4" src="imagens/ifma.png" alt="" width="120" height="140"></a>
      <h1 class="h3 mb-3 font-weight-normal">Faça o seu Login</h1>
      <label for="inputEmail" class="sr-only">Usuário</label>
      <input type="text"  class="form-control" placeholder="Usuário" required autofocus name="usuario">
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required name="senha">
      <button class="btn btn-lg btn-success btn-block" id="botaoLogin" type="submit">Logar</button>

       <!-- PHP para exibir a mensagem de erro caso o Login dar errado. A mensagem será exibida logo após botão 'Logar' -->
     <p class="text-center text-danger">
        <?php 
        if(isset($_SESSION['loginErro'])){
          echo $_SESSION['loginErro'];
          unset($_SESSION['loginErro']);
        }?>
      </p>
      <p class="text-center text-success">
        <?php 
        if(isset($_SESSION['logindeslogado'])){
          echo $_SESSION['logindeslogado'];
          unset($_SESSION['logindeslogado']);
        }
        ?>
      </p>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>

    

  

  </body>
</html>
