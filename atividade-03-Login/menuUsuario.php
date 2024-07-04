<?php
  session_start();
  if(!isset($_SESSION['usuarioLogado'])){
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

    <title>Página do Usuário</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-top-fixed.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <a class="btn btn-outline-success navbar-brand" href="menuUsuario.php"style="border-bottom-width:4px;"><?php echo "". $_SESSION['usuarioNome']; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="menuUsuario.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastroDaTurma.php">Cadastrar Turma</a>
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


    <main role="main"> 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="imagens/menu.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 id="tituloSlide1">Bem vindo a sua página de Usuário,<?php echo "  ". $_SESSION['usuario'];?> !</h1>
                <p class="textoCarousel">Acesse as funcionalidades clicando na navbar acima ou nos próximos slides.  <a class="btn btn-lg btn-success" href="#" role="button">:)</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="imagens/menu.jpg"  alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1 id="tituloSlide2">Cadastre Turmas</h1>
                <p class="textoCarousel">Cadastre as turmas que estão sob seu ministro.</p>
                <p><a class="btn btn-lg btn-success" href="cadastroDaTurma.php" role="button">Ir para Cadastro de turmas</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="imagens/menu.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1 id="tituloSlide3">Cadastre as Notas da Turma</h1>
                <p class="textoCarousel">Selecione a turma sob o seu ministro e depois cadastre as notas de cada aluno.</p>
                <p><a class="btn btn-lg btn-success" href="selecionarTurma.php" role="button">Ir para Seleção de Turmas</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
     
    </main>

    <p class="text-center text-danger">
          <?php 
              if (isset($_SESSION['qtdInvalida'])) {
                echo $_SESSION['qtdInvalida'];
                unset($_SESSION['qtdInvalida']);
               } 
            ?>
       </p>
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
 
      



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
