<?php
  session_start();
  $email_cadastro = $_SESSION['nome'];
  include_once("conecta.php");
  

  $significado_cadastro = $_POST['significado_cadastro'];
  $link_cadastro = $_POST['link_cadastro'];
  $tag_cadastro = $_POST['tag_cadastro']; 
  $foto = $_FILES["foto"];
  $email_cadastro = $_SESSION['email'];

 

  if((!empty($email_cadastro))&& (!empty($significado_cadastro)) && (!empty($link_cadastro)) &&  (!empty($tag_cadastro))){
	   // Largura máxima em pixels
		$largura = 2000;
		// Altura máxima em pixels
		$altura = 20000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 100000;
		
		if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
			$_SESSION['mensagem'] = "Isso não é uma imagem";
            header("Location: perfil.php");
		}
		$dimensoes = getimagesize($foto["tmp_name"]);
		
		if($dimensoes[0] > $largura) {
			$_SESSION['mensagem'] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
			header("Location: perfil.php");
		}
		
		if($dimensoes[1] > $altura) {
			$_SESSION['mensagem'] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
			header("Location: perfil.php");
		}
		
		if($foto["size"] > $tamanho) {
   		 	$_SESSION['mensagem'] = "A imagem deve ter no máximo ".$tamanho." bytes";
			header("Location: perfil.php");
		}
		
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
 
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
 
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "img/" . $nome_imagem;
 
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
		
			
			
          $info_usuario = "INSERT INTO videos VALUES ('$email_cadastro.', '$link_cadastro.', '$significado_cadastro.', '$nome_imagem.', '.tag_cadastro')";
          $resultado_usuario = mysqli_query($conexao, $info_usuario);

          if (!empty($resultado_usuario)) {
            $_SESSION['mensagem'] = "<label style='color: green; font-family: sans-serif;'>Cadastro realizado com sucesso</label><br>";
            header("Location: perfil.php");
          } else {
            $_SESSION['mensagem'] = "Cadastro falhou";
            header("Location: perfil.php");
         }
	
  } else {
	  
	  

      $_SESSION['mensagem'] = "<label style='color: red; font-family: sans-serif;'>Preencha todos os campos do formulário</label><br>";
      header("Location: perfil.php");

  }
 ?>
