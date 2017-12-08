<?php
session_start();

$nome_login = $_SESSION['nome'];
$email_login = $_SESSION['email'];

if(isset($nome_login)){
}else{
	$_SESSION['mensagem'] = "Você precisa fazer o login para ver o seu perfil.";
	header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perfil</title>
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
        <li><a href="index_logado.php">Home</a></li>
        <li class="active"><a href="perfil.php">Perfil</a></li>
        
        <li><a href="avaliar.php">Pesquisar</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li style="color: green;"><?php echo "Logado: ".$nome_login ?>
		<a href="sair.php" class="sair" class="botao_a">Sair</a></li>
		
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
	  <center>
      <h1 >PERFIL</h1>
	  <p ><?php echo "Olá ".$nome_login ?></p>
	 
       
      <form class="form_cadastro" action="perfil_usuario.php" method="post">
			
          <label class="label_form_cad">Significado: </label><input type="text" class="caixa_cadastro" name="significado_cadastro" id="significado" placeholder="" autocomplete="off" onkeyup="return verificaNome();">
          <br><br>
          <label class="label_form_cad">Link: </label><input  type="text" class="caixa_cadastro" id="link" maxlength="100" name="link_cadastro" >
          <br><br>
          <label class="label_form_cad">Tag/referencia: </label><input type="text" class="caixa_cadastro" name="tag_cadastro" id="tag"  autocomplete="off" >
          <br><br>
		  
		  Imagem<input type="file" name="foto">
		  <br><br>
		   <input type="reset" value="Limpar" class="btn btn-danger" onclick="return retornaInicial();">
          <input type="submit" class="btn btn-success" name="botao_login" value="Cadastrar" onclick="return verificaCadastro();">
	   <br><br>
	   </center>
	   <center>
		<p id="msg_js" class="mensagem">
             <?php
                if (isset($_SESSION['mensagem'])) {
                  echo $_SESSION['mensagem'];
                  unset($_SESSION['mensagem']);
                }
            ?>
	  </center>
	  
      <hr>
	  Todos os sinais cadastrados por esse colaborador.
	  

	  
      
    </div>
    <div class="col-sm-2 sidenav">
		<h5 style="font-weight: bold;">Disponíveis para avaliação</h5>
      <div class="well">
        <p><iframe width="100%" height="100%" src="https://www.youtube.com/embed/3iUZju5h5gw?rel=0" frameborder="0" allowfullscreen></iframe></iframe></p>
		<p>Significado: Oi</p>
		<h6>Adicionado por: Incluir Tecnologia</h6>
		<img  width="25%" height="25%" src="img/positivo.png"/>
		<img  width="25%" height="25%" src="img/negativo2.png"/>
      </div>
      <div class="well">
        <p><iframe width="100%" height="100%" src="https://www.youtube.com/embed/_X2i1MXPCkA?rel=0" frameborder="0" allowfullscreen></iframe></p>
		<p>Significado: Obrigada</p>
		<h6>Adicionado por: Incluir Tecnologia</h6>
		<img  width="25%" height="25%" src="img/positivo.png"/>
		<img  width="25%" height="25%" src="img/negativo2.png"/>
      </div>
    </div>
  </div>
</div>



</body>
</html>
