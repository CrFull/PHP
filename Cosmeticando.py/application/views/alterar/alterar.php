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
				<h1>Alterar Produto</h1>
				<?= form_open('');?>
                <div class="cadastro" align="center">
				<h1>Buscar Produto</h1>
				<?= form_open('');?>
					<input type="text" name="nome" placeholder="Nome do produto"><br>
					
					<input type="submit" name="btnProduto" value="Buscar Produto" class="btn btn-success"><br><br>
					
				<?= form_close()?>
		</div><br><br>
					<input type="text" name="nome" placeholder="Nome do produto"><br>
					
					<input type="number" step="0.01" name="preco" placeholder="Digite o preço do produto"><br>
					
					<input type="text" name="tipo" placeholder="Digite o tipo do produto"><br>
					
					<textarea type="text-area" name="descricao" placeholder="Descrição do produto"></textarea><br>
					

					<h5>Selecione uma imagem:</h5> 
					<input name="arquivo" type="file" /><br>
   					<br />
					
					<input type="submit" name="btnProduto" value="Alterar Produto" class="btn btn-success"><br><br>
					
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


