<?php
session_start();
include_once("conecta.php");
$nome_login = $_SESSION['nome'];
if(isset($nome_login)){
}else{
	$_SESSION['mensagem'] = "Você precisa fazer o login para pesquisar.";
	header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>avaliar</title>
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
        <li><a href="perfil.php">Perfil</a></li>
        
        <li class="active"><a href="avaliar.php">Pesquisar</a></li>
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
	  <h1>PESQUISAR</h1>
	  
  
			<form name="frmBusca" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"">
			<input type="text" name="palavra" placeholder ="Colaborador ou significado"/>
			<input name ="submit" type="submit"  value="Buscar" class="btn btn-success" />
	</form>
	<br>
	
	<?php
	function get_youtube_ID( $link ){
	if( !isset( $link ) || empty( $link ) )
		return;
	preg_match( '/(?:https?:\/\/|www\.|gaming\.|m\.|^)youtu(?:be\.com\/watch\?(?:.*?&(?:amp;)?)?v=|\.be\/)([\w‌​\-]+)(?:&(?:amp;)?[\w\?=]*)?/', $link, $ID );
	$YouTube_ID = isset( $ID[1] ) ? $ID[1] : false;
	return $YouTube_ID;
}
	
	
		isset($_POST['submit']) ? $_POST['submit'] : ""  ;

	{
	if(isset($_POST['submit'])){
	$busca = isset($_POST['palavra']) ? $_POST['palavra'] : ""  ;
	
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	if(!empty($busca)){
	$query_pesquisa = "SELECT * FROM videos WHERE significado LIKE '$busca%' OR email LIKE '$busca%'";
	
	$resultado_pesquisa = mysqli_query($conexao, $query_pesquisa);
	
	
	if(mysqli_num_rows($resultado_pesquisa) <= 0){
		echo "Nenhum usuário encontrado.";
	}else{
		while($rows = mysqli_fetch_assoc($resultado_pesquisa)){
			$link = $rows['link'];
			$youtube_ID = get_youtube_ID( $link );
			
			echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$youtube_ID.'" frameborder="0" allowfullscreen></iframe>';
			
			echo "Email do colaborador: ".$rows['email']." , Significado: ".$rows['significado']."<br>";
			
		}
	}
	}
	}
	}
	?>
	</center>
      <hr>
	  
	  <center>
     <img  width="10%" height="10%" src="img/positivo.png"/>
		<img  width="10%" height="10%" src="img/negativo2.png"/>
	  </center>
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



</body>
</html>