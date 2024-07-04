<!DOCTYPE html>
<html lang="pt-br">
  	
  	<head>
    
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/estilo.css')?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/areaAdmin.css')?>">
		<script  type="text/javascript" src="<?= base_url('assets/js/login.js')?>"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="<?= base_url('assets/css/login.css')?>" />
		<meta name="viewport" content="width=device-width">
		
		<title>Cosmeticando</title>
	
	</head>

	<body onload="AreaSensivel()">
		<section id="tudo">
			<header>
				<a href="<?php echo site_url('home/index')?>"><img class="imgApresentacao"src="<= echo base_url('imagens/logo.png')?>"></a>
				<nav class="navbar">
					<a href= "<?php echo site_url('home/index')?>" class="nav-item-direita">Home</a>
					<div class="input-icon">
						<input type="text" class="input"/>			
						<form>
							<input type="image" class="icon" src="imagens/busca.png">
						</form>
					</div>
					<a href="<?php echo site_url('sobre/index')?>" class="nav-item-centro"> Sobre Nós</a>
					<a href="<?php echo site_url('sobre/contato')?>" class="nav-item-centro">Contato</a>
					<div id="nav-item-Admin">
					 Olá, admin
					</div>	
				</nav>
           </header>
           
               <h2 id="acoesAdmin">Ações</h2>
                <div id="areaBotao">
                    <a href="<?php echo site_url('cadastro/index')?>" id="btnCadastrar">Cadastrar Produto</a>
                    <a href="excluirProduto.html" id="btnExcluir">Excluir Produto</a>
                    <a href=<?php echo site_url('alterar/index')?>>Alterar Produto</a>
                    <a href="<?php echo site_url('buscar/index')?>" id="btnBuscar">Buscar Produto</a>
                </div>
		</section>

		<footer id="rodape"> 
				<a href="sobre.html"><img src="<= echo base_url('imagens/logo.png')?>"></a></li>
			&copy; Copyright Cosmeticando     
   		</footer>
	</body>

</html>


