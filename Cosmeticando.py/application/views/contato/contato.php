<html> 
    <head> 
        <meta charset="utf-8"> 
        <title>Contato Cosmeticando</title> 
        <link rel="stylesheet" href="<?= base_url('assets/css/sobre.css')?>"> 
        <link rel="stylesheet" href="<?= base_url('assets/css/contato.css')?>"> 
        <link rel="stylesheet" href="<?= base_url('assets/css/estilo.css')?>"> 
        <link rel="stylesheet" href="<?= base_url('assets/css/login.css')?>"> 
        <script  type="text/javascript" src="<?= base_url('assets/js/login.js')?>"></script>
        <meta name="viewport" content="width=device-width">
    </head> 
    
    <body onload="AreaSensivel()"> 
         <section id="tudo">
            
             <header>
                <a href="<?php echo site_url('home/index')?>"><img class="imgApresentacao"src="<?= base_url('assets/imagens/logo.png')?>"></a>
				<nav class="navbar">
					<a href= "<?php echo site_url('home/index')?>" class="nav-item-direita">Home</a>
					<a href="#vender" class="nav-item-direita"> Vender</a>
					<div class="input-icon">
						<input type="text" class="input"/>			
						<form>
							<input type="image" class="icon" src="<?= base_url('assets/imagens/busca.png')?>">
						</form>
					</div>
					<a href="<?php echo site_url('sobre/index')?>" class="nav-item-centro"> Sobre Nós</a>
					<a href="<?php echo site_url('sobre/contato')?>" class="nav-item-centro">Contato</a>
					<div class="nav-esquerda">
					 <a href="#carrinho" class="nav-item-esquerda" ><img id="imgCarrinho" src="<?= base_url('assets/imagens/carrinho.png')?>"></a>
					 <button class="btnLogin" class="nav-item-esquerda"  onclick="MostrarFormLogin()" style="width:auto;"><bold>Fazer Login</bold></button>
					</div>	
				</nav>
            </header>

             <section class="conteudo">
                <p>
                    A <strong>Comesticando</strong> possui dois donos <strong>João Victor Crivoi Cesar Souza</strong> e <strong>Pedro de Abreu Fonseca</strong>.
                </p>

                <!--Imagem do Centro de Distribuição da Empresa-->
                <div id="areaDeFotosDonos">
                    <figure>  
                        <a href="https://www.facebook.com/joao.crivoi.7" target="blank"><img class="fotoDonos" src="<?= base_url('assets/imagens/joão.jpg')?>"></a> 
                        <div class="legendaFoto">
                            <figcaption>João Victor Crivoi Cesar Souza.</figcaption>    
                        </div>
                    </figure>

                    <figure>  
                        <a  href="https://www.facebook.com/victor.fonseca.735" target="blank"><img class="fotoDonos" src="<?= base_url('assets/imagens/pedro.png')?>"></a>
                        <div class="legendaFoto">
                            <figcaption>Pedro de Abreu Fonseca.</figcaption>    
                        </div>
                    </figure>
                </div>
               

                <p>
                    Ambos atualmente estudam <strong>Informática</strong> no <strong>Instituto Federal do Maranhão(IFMA)</strong>, no campos Monte Castelo.
                </p>

               
                <div>


            </section>
            
             <?= form_open('LoginAdministrador/logar')?>
            <section id="formLogin" class="modal">
			  
               
  
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('formLogin').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="<?= base_url('assets/imagens/logo.png')?>" alt="Logo" id="logoLogin">
                    </div>
              
                      <div class="telaLogin">
                            <label for="uname"><b>E-mail</b></label>
                            <input type="text" class="campoLogin" placeholder="Digite o seu e-mail" name="email"   title="Digite seu e-mail">
              
                            <label for="psw"><b>Senha</b></label>
                          
                              <img src="<?= base_url('assets/imagens/olho.png')?>" id="olho"  onMouseOut="EsconderCampo()" onmousedown="MostrarCampo()" onmouseup="EsconderCampo()" class="olho" title="Clique para revelar o campo">
                          
                             <input type="password" class="campoLogin" placeholder="Digite a sua senha" name = "senha" id="psw" title="Digite sua senha">
                      
                       <div class="centralInline">
                          <button type="submit" class="btnLogin">Login</button>
                       </div>
                        
                      </div>
              
                      <div id="areaRegistro" style="background-color:#f1f1f1">
                          <a href="index.html" id="btnRegistrar">Registrar-se</a>			
                      </div>
  
              <?= form_close()?>
  
              </section>


        </section>

        <footer id="rodape"> 
            <a href="sobre.html"><img src="<?= base_url('assets/imagens/logo.png')?>"></a></li>
        &copy; Copyright Cosmeticando     
       </footer>

    </body> 
</html>