<?php
	include "php/conexao.php";

?>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Cadastro - Artem</title>      <!-- -->
  
  <meta name="theme-color" content="#152928">
  <meta name="apple-mobile-web-app-status-bar-style" content="#152928">
  <meta name="msapplication-navbutton-color" content="#152928">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/login/corpo.css">  
  <link rel="stylesheet" href="css/screen.css"  >
  
  <style type="text/css">
  	form a {
  		margin-left: 13px;
  	}
  </style>
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
        	<a  href="Cadastro.php">Cadastrar-se</a>
    	</div>	
    	
    </header>
	
    <section class="main" >
    <div class="container">
    	<form action="" method="post">
   			<h1 class="gray">Entrar</h1>
    		<h3>Digite seus dados para acessar sua conta.</h3>
    	
    		<input class="inputGrande"  type="email" placeholder="Email" >
    	
    		<br>
    		
    		<input class="inputGrande"  type="password" placeholder="Senha"  >
    		
    		<br>
    		
    		<a class="textBlue small"  href="esqueceuSenha.php" >Esqueceu a senha? </a>
    		<br><br>
    	
    		<input class="btn large blue" type="submit" value="Entrar">
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
  
  <script type="text/javascript" src="js/abrirTelas.js"></script>
  <script type="text/javascript" src="js/TELA.js"></script>
  
</body>
</html>