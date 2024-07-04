<?php
session_start();
if (!isset($_SESSION['usuarioLogado'])) {
  $_SESSION['loginErro'] = "Usuário ou senha Inválido";
  header("Location: index.php");
  session_destroy();
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imagens/ifma.ico">

    <title>Cadastro da Turma</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
    <link href="css/navbar-top-fixed.css" rel="stylesheet">
  </head>

  <body>
    
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <a class="navbar-brand" href="menuUsuario.php"><?php echo "" . $_SESSION['usuarioNome']; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="menuUsuario.php">Home </a>
          </li>
          <li class="nav-item active">
          <a class="btn btn-outline-success navbar-brand" href="cadastroDaTurma.php"style="border-bottom-width:4px;">Cadastrar Turma<span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="selecionarTurma.php">Casdastrar Notas</a>
          </li>
        </ul>
        <form action="logout.php">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sair</button>
        </form>
      </div>
    </nav>

  <div class="jumbotron" >
    <div class="container">
      <div class="py-5 text-center">
        <a href="https://montecastelo.ifma.edu.br/" target="_blank"><img class="d-block mx-auto mb-4" src="imagens/ifma.png" alt="" width="145" height="150"></a>
        <h2>Cadastro da Turma</h2>
        <p class="lead">Preencha o formulário com o Nome da Turma e a Quantidade de Alunos.</p>
        <p class="text-center text-danger">
              <?php 
              if (isset($_SESSION['campoVazio'])) {
               echo $_SESSION['campoVazio'];
               unset($_SESSION['campoVazio']);
               } 
             ?>
           </p>

           <p class="text-center text-danger">
             <?php 
             if (isset($_SESSION['inserirErro'])) {
               echo $_SESSION['inserirErro'];
               unset($_SESSION['inserirErro']);
               } 
              ?>
           </p>

           <p class="text-center text-success">
             <?php 
             if (isset($_SESSION['inserido'])) {
               echo $_SESSION['inserido'];
               unset($_SESSION['inserido']);
               } 
              ?>
           </p>
      </div>
    </div>
    <div class="main">
        <!-- class="col-md-8 order-md-1" -->
        <div>
          <h4 class="mb-3">Dados da Turma</h4>
          
          <form class="needs-validation" novalidate name="frmCadastroDeTurma" method="GET" action="inserirTurma.php">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="Nome da Turma">Nome da turma</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required name="nomeTurma">
                <div class="invalid-feedback">
                   Nome da Turma é requirido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="Quantidade de Alunos">Quantidade de Alunos</label>
                <input type="text" class="form-control" onkeyup="somenteNumeros(this);"  id="lastName" placeholder="" value="" required name="qtdAlunos">
                <div class="invalid-feedback">
                   Quantidade de Alunos é requirida.
                </div>
              </div>
            </div>

            
            <hr class="mb-4">
            <button class="btn btn-success btn-lg btn-block" type="submit" style="background-color: darkgreen;">Salvar</button>

          </form>
        </div>

      </div>
    
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
    <a href="https://montecastelo.ifma.edu.br/" target="_blank"><img class="d-block mx-auto mb-4" src="imagens/ifma.png" alt="" width="145" height="150"></a>
        <p class="mb-1">&copy; 2017-2018</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="privacy.php" target="_blank">Privacy</a></li>
          <li class="list-inline-item"><a href="https://portal.ifma.edu.br/comissao-de-etica/" target="_blank">Terms</a></li>
          <li class="list-inline-item"><a href="https://portal.ifma.edu.br/ouvidoria/" target="_blank"> Support</a></li>
        </ul>
        <p class="mb-5"><a href="#">Back to top</a></p>
        
        
      </footer>
</div>
</div>

      

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();

      function somenteNumeros(num) {
        var er = /[^0-9]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
      }
    </script>
  </body>
</html>