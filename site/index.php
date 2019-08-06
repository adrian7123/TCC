<?php
	include "php/conexao.php";

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Artem</title>      <!-- -->
    
    <meta name="theme-color" content="#152928">
    <meta name="apple-mobile-web-app-status-bar-style" content="#152928">
    <meta name="msapplication-navbutton-color" content="#152928">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="css/estilo.css" >
    <link rel="stylesheet" href="css/screen.css"  >
	    <link rel="stylesheet" href="css/index/corpo.css">
    
    <style type="text/css">
    	
    
    </style>    
</head>
<body>
	<section>
    <header>
      <div class="header" >
      <img class="icon a" src="icon/music.png">
      <h1>Artem</h1>
      <img class="icon b" src="icon/music.png">
      <img class="icon c" src="icon/music.png">
      <img class="icon d" src="icon/music.png">
      </div>

      <div class="linkBox">
        <a  href="cadastro.php">Cadastre-se</a>
        <a  href="login.php">Entrar</a>
      </div>


    </header>
    
      <div class="container">

        <h2>
          Artem trás meios para divulgar seus serviços<br>
          comece a trabalhar agora mesmo!
        </h2>

        <div class="btnBox">
          <button onclick="abrirMain()" class="btn large blue" type="button" name="button">Publique um Contrato</button>
        </div>

      </div>
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
  
    <script src="js/abrirTelas.js"></script>

</body>
</html>