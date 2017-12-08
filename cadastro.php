<?php

  session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro</title>
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
      <div class="div_form_cad">
	 <center>
           <h1 class="titulo_cadastro">Cadastro</h1>
      <form class="form_cadastro" action="cadastra_usuario.php" method="post">
          <label class="label_form_cad">Nome: </label><input type="text" class="caixa_cadastro" name="nome_cadastro" id="nome" placeholder="Ex: Ariel Mota de Carvalho" autocomplete="off" onkeyup="return verificaNome();">
          <br><br>
          <label class="label_form_cad">Maior Titulação: </label><input  type="text" class="caixa_cadastro" id="titulacao" maxlength="1" name="maiortitulacao_cadastro" placeholder="Ex: A">
          <br><br>
          <label class="label_form_cad">Email: </label><input type="email" class="caixa_cadastro" name="email_cadastro" id="email" placeholder="Ex: Lucascx12@gmail.com" autocomplete="off" >
          <br><br>
           <label class="label_form_cad">Lattes: </label><input  type="text" class="caixa_cadastro" id="lattes" maxlength="100" name="lattes_cadastro" placeholder="Ex: http://lattes.cnpq.br/7618571401128973">
          <br><br>
          <label class="label_form_cad">Senha: </label><input type="password" minlength="5" class="caixa_cadastro" name="senha_cadastro" id="senha" placeholder="Senha" maxlength="30">
          <br><br>
          <label class="label_form_cad">Repita: </label><input type="password" minlength="5" class="caixa_cadastro" name="rep_senha_cadastro" id="rep_senha" placeholder="Repita sua senha" maxlength="30">
          <br><br>
          <input type="reset" value="Limpar" class="btn btn-danger" onclick="return retornaInicial();">
          <input type="submit" class="btn btn-success" name="botao_login" value="Cadastrar" onclick="return verificaCadastro();">

        </form><br><br><br>
		
          <p id="msg_js" class="mensagem">
             <?php
                if (isset($_SESSION['mensagem'])) {
                  echo $_SESSION['mensagem'];
                  unset($_SESSION['mensagem']);
                }
            ?>
          </p>
    </div>
	<center>
    <a href="login.php" class="botao_jsc">Já sou cadastrado</a>
	</center>
	</center>
    </div>
	
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">


</body>
</html>
