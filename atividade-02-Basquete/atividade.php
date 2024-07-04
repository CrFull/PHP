<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/cssBasquete.css">
  <meta charset="UTF-8"/>
  <title>Basquete de Robôs</title>
</head>
<body>
<div id='main'>
    <?php
        $distancia = $_POST["txtDistancia"];
		$pontos = "PONTOS";
		if($distancia <= 0 || $distancia >2000){
				echo "<p>Distância inválida!</p>";
				echo "<img id='zeroPontos' src=imagens/0pontos.gif>";
		}else if($distancia<=800){
				echo "<img src=imagens/1ponto.gif>";
				$pontos = "PONTO";
		}else if($distancia<=1400){
				echo "<img src=imagens/2pontos.gif>";
		}else{
				echo "<img src=imagens/3pontos.gif>";
		}
		echo "<p id='pontos'>$pontos</p>";
	?>
</div>
	<a href="index.php"><img id ="botao" src="imagens/botaoVoltar.png"></a> 
</body>
</html>

