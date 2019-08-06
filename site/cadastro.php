<?php
//	include "php/conexao.php";
	
	//. VARIAVEIS 

	
	

?>
<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Cadastro - Artem</title>      <!-- -->
  
  <meta name="theme-color" content="#152928">
  <meta name="apple-mobile-web-app-status-bar-style" content="#152928">
  <meta name="msapplication-navbutton-color" content="#152928">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  

  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/cadastro/corpo.css"> 
  <link rel="stylesheet" href="css/screen.css"  >

  
</head>
<body>
	<header>
    	<div>
        	<img class="icon a" src="icon/music.png">
        	<h1>Artem</h1>
        	<img class="icon b" src="icon/music.png">
        	<img class="icon c" src="icon/music.png">
           	<img class="icon d" src="icon/music.png">
    	</div>
    	
    	<div class="linkBox">
    	    <div></div>
        	<a  href="login.php">Entrar</a>
    	</div>	
    	
    </header>
	
    <section class="main" >
    <div class="container">
    	<h1 class="gray" >Cadastro</h1>
    	<h3>Por favor preencha os campos abaixo</h3>
    	
    	<br>
    	
    	<form action="" method="post" onsubmit="return valida()" >
    		<!-- Nome  -->
    		<input id="userNome"  class="inputGrande" type="text" name="nome" placeholder="Nome de Usuario">
    	<br><label id="nomes"  class="war " >Por favor informe o nome* </label>
   		 	<br>
    	
   		 	<!-- Especialidades -->
    		<label>Especialidade</label><br>
    		<select class="inputGrande" name="especialidade">
        		<option selected>Músico</option>
      		   	<option>Dançarino</option>
       		 	<option>Pintor</option>
    		</select>
   		 	<br><br>
    	
    		<!-- E-mail -->
    		<input id="userEmail" class="inputGrande" type="email" name="email" placeholder="Email">
    		<br><label id="emails"  class="war " >Por favor informe o E-mail* </label>
    		<br>
    	
    		<!-- Senha -->
    		<div class="senhaBox" >
    			<input id="userSenha"  class="inputMedio" type="password" name="senha" placeholder="Senha">
    		
    			<input id="userConfirmSenha"  class="inputMedio" type="password" name="confirmSenha" placeholder="Confirme a senha">
    		<br><label id="senhas"  class="war " >Dados incorretos</label>
    		</div>
    		
    	
    	
    		<label><input id="userTermo" name="termo"  type="checkbox"> Concordo com os </label> <a class="textBlue" href="Index.html" >termos de uso</a>.
    		<br><label id="termos" class="war " >Confirme os termos de uso para poder avançar</label>
    		<br><br>
    	
    		<input class="btn large blue" type="submit" value="Cadastrar">
   		  	
   		  </form>
    
   		 </div>
   		 <br>
    </section>
    
    <footer>
    <div>
  	 	<h1>Artem</h1>
   		<img class="icon e" src="icon/music.png">
    	</div>
    
    
  	    <hr>
    
    	<div class="subFooter">
   	 		<div class="footerIcon">
    			<a class="icon" href=""><img src="icon/headset.png"><p>Sobre Nós</p></a>
    			<a class="icon" href=""><img src="icon/wallet.png"><p>Segurança</p></a>
   				<a class="icon" href=""><img src="icon/newspaper.png"><p>Contratos</p></a>
    			<a class="icon" href=""><img src="icon/chat.png"><p>Contatos</p></a>
   		    </div>
   	  </div>
    </footer>
  
  
  <script type="text/javascript" src="js/abrirTelas.js" ></script>
  <script type="text/javascript" src="js/TELA.js"></script>
  <script type="text/javascript" src="js/validacao.js"></script>
  
</body>
</html>