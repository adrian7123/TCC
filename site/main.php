<?php
	include "php/conexao.php";
	
	if(!isset($_SESSION['logado'])){
		header('location:cadastro.php');
	}

?>
<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Cadastro - Artem</title>      <!-- -->
  
  <!-- MUDAR A COR DA ABA DO BOWSER-->
  
  <meta name="theme-color" content="#152928">
  <meta name="apple-mobile-web-app-status-bar-style" content="#152928">
  <meta name="msapplication-navbutton-color" content="#152928">
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="css/contrato.css" >
  <link rel="stylesheet" href="css/estilo.css" >
  <link rel="stylesheet" href="css/main/corpo.css">  
  <link rel="stylesheet" href="css/screen.css"  >
  <link rel="stylesheet" href="css/NAV.css" >
  
  <style type="text/css">
  
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
        	<a  href="configuracaoConta.php">Configurações</a>
    	</div>	
    </header>
    
    <div class="navBar" >
    	<ul>
    	<!--	<li><a>como começar?</a></li> -->
    		<li>
    			<form action="pesquisa.html" method="post"> 
    				<input class="inputMedio" type="text" placeholder="O que está Buscando..." >
    				<input class=" blue" type="submit" value="Presquisar" >
    			</form>
    		</li>
    		<li>
    			<img alt="" src=""  >
    			<a href="criarContrato.php" >Criar um Contrato</a>
    		</li>
    		<li>
    			<a>Meus contratos</a>
    		</li>
    	</ul>
    </div>
	
    
    <div class="container">
    	<div onclick="abrirContrato()" class="contrato" >
    		<div class="contHeader" >
    			<h1 class="contNome" >Festa de Aniversário</h1>
    			<h4>por: João N. Santos</h4>
    		</div>
    		<div class="contCenter" >
    			<h3 class="contDesc" >Ela era bruxa, ele era um lobo.
    			Ambos prontos para amar.
    			Ela tão clara, ele tão escuro.
    			Ambos em busca de se encontrar.
    			Ele corria, e ela fugia.
    			A noite ele aparecia com seu uivo dolorido.
    			E ela surgia a iluminar a noite com o luar.
    			A bruxa era vida e o Lobo o destino.
    			Ambos seguiam pro mesmo lugar.
    			Da morte fugiam.
    			Os dois dividiam o mesmo caminho.
    			Eles não tinham medo, nem dor e nem desespero!
    			Tentam fazer de tudo para ficar juntos.</h3>
    		</div>
    		<div class="contFooter" >
    			<h4 class="contData" >Para: 14/07/2019 às 14:00</h4>
    		</div> 	
    	</div>
    	
    	<div class="contrato" >
    	<div class="contHeader" >
    	<h1 class="contNome" >Festa de Aniversário</h1>
    	<h4>por: João N. Santos</h4>
    	</div>
    	<div class="contCenter" >
    	<h3 class="contDesc" >Ela era bruxa, ele era um lobo.
    	Ambos prontos para amar.
    	Ela tão clara, ele tão escuro.
    	Ambos em busca de se encontrar.
    	Ele corria, e ela fugia.
    	A noite ele aparecia com seu uivo dolorido.
    	E ela surgia a iluminar a noite com o luar.
    	A bruxa era vida e o Lobo o destino.
    	Ambos seguiam pro mesmo lugar.
    	Da morte fugiam.
    	Os dois dividiam o mesmo caminho.
    	Eles não tinham medo, nem dor e nem desespero!
    	Tentam fazer de tudo para ficar juntos.</h3>
    	</div>
    	<div class="contFooter" >
    	<h4 class="contData" >Para: 14/07/2019 às 14:00</h4>
    	</div> 	
    	</div>
    	
    	</div>
    	
    </div>
    
   <footer>
   
   </footer>
  
  <script src="js/abrirTelas.js" ></script>
  
</body>
</html>