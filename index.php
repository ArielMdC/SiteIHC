<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
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
	  <br>
	  <br>
	  <p> Enquete </p>
	  <div class="well">
        <p>op1</p>
      </div>
	  <div class="well">
        <p>op2</p>
      </div>
    </div>
    <div class="col-sm-8 text-left"> 
	  <center>
      <h1>Central de Libras</h1>
	  </center>
	  <center>
	  <img  width="25%" height="25%" src="img/AteD.png"/> <img  width="25%" height="25%" src="img/EteI.png"/> 
	  <br>
	   <img  width="25%" height="25%" src="img/JteN.png"/> <img  width="25%" height="25%" src="img/OteS.png"/>
	  <br>
		<img  width="25%" height="25%" src="img/TteX.png"/> <img  width="25%" height="25%" src="img/YteZ.png"/>  
	  <h3>Repositório de sinais em Libras.</h3>
	  </center>
      Nosso site visa unir as pessoas em prol dos que precisam, com foco em pessoas com deficiência auditiva, aqui podemos nos unir e compartilhar nossos vídeos de forma com que possamos sempre avançar em direção à integração de todos.
      <hr>
	  <center>
      <h3>Seja um colaborador</h3>
	  </center>
      O nosso papel aqui, como colaboradores, é sempre estar atualizando a página com novos vídeos que sejam úteis para a comunidade. Tenhamos sempre atenção ao postar um vídeo para que ele seja confiável e realmente útil. 
Todos nossos vídeos são colocados para avaliação da comunidade, portanto, devemos dar uma atenção especial para as avaliações, ao gostar de um vídeo, dê sua avaliação positiva, se não gostar, deixe também sua avaliação negativa. O feedback dos usuários é o que nos faz crescer numa comunidade unida em prol da integração.
	  <br>
	  <br>
	  <center>
		<a href="cadastro.php"><input name="botao" class="btn btn-success" value="Tornar-se um colaborador" ></a>
	  </center>
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
	  <div class="well">
        <p>Propaganda</p>
      </div>
	  <div class="well">
        <p>Propaganda</p>
      </div>
      </div>
    </div>
  </div>
</div>



</body>
</html>
