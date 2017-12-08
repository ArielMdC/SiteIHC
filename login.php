<?php

  session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
     
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
   
    .row.content {height: 450px}
    
    
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 200%;
    }
    
   
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
   
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="perfil.php">Perfil</a></li>
       
        <li><a href="avaliar.php">Pesquisar</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
       <p><a href="#">Tags: Área tecnológica </a></p>
      <p><a href="#">Tags: Biológica </a></p>
      <p><a href="#">Tags: Humana</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <div class="div_form_login">
	<center>
          <h1 class="titulo">Login</h1>

             <form class="form_cad_login" name="form_login" action="valida.php" method="post" onsubmit="return verificaLogin();">

                <label class="label_form">&nbsp;&nbsp;Email </label><br><input type="text" id="email" class="caixa_login" name="email" autocomplete="off" onkeyup="return verificaEmail();">

               <br><br>
               <label class="label_form">&nbsp;&nbsp;Senha </label><br><input type="password" id="senha" class="caixa_login" name="senha" autocomplete="off" onkeyup="return verificaSenha();">
               <br><br>
                 <p id="mensagemjs" class="mensagem" ></p>
               <input type="submit" name="botao" class="btn btn-success" value="Logar" >
             </form>
	
          <br><br><br><br><br>

          <p class="mensagem">
            <?php
                         if (isset($_SESSION['mensagem'])) {
                           echo $_SESSION['mensagem'];
                           unset($_SESSION['mensagem']);
                         }
            ?>
        </p>
	
      <a href="cadastro.php" class="botao_cadastre">Cadastre-se</a>
	  </center>
    </div>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>Propaganda</p>
      </div>
      <div class="well">
        <p>Propaganda</p>
      </div>
	  <div class="well">
        <p>Propaganda</p>
      </div>
	  <div class="well">
        <p>Propaganda</p>
      </div>
    </div>
  </div>
</div>



</body>
</html>
