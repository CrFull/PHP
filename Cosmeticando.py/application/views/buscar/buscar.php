<!DOCTYPE html>
<html lang="pt-br">
  	
  	<head>
    
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/estilo.css')?>">
		<script  type="text/javascript" src="<?= base_url('assets/js/login.js')?>"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="<?= base_url('assets/css/login.css')?>" />
		<meta name="viewport" content="width=device-width">
		
		<title>Cosmeticando</title>
	
	</head>

	<body onload="AreaSensivel()">
		<section id="tudo">
			<header>
				<a href="<?php echo site_url('areaadmin')?>"><img class="imgApresentacao"src="<?= base_url('assets/imagens/logo.png')?>"></a>
		   </header>

		   

		   
						
	<div class="Secao-Cadastro">

			<div class="cadastro" align="center">
				<h1>Buscar Produto</h1>
				<?= form_open('');?>
					<input type="text" name="nome" placeholder="Nome do produto"><br>
					
					<input type="submit" name="btnProduto" value="Buscar Produto" class="btn btn-success"><br><br>
					
				<?= form_close()?>
		</div>

		</div>
			
		</section>

		<footer id="rodape"> 
				<a href="sobre.html"><img src="<?= base_url('assets/imagens/logo.png')?>"></a></li>
			&copy; Copyright Cosmeticando     
   		</footer>
	</body>

</html>


