<?php
  session_start();
  include_once("conecta.php");

  $nome_cadastro = $_POST['nome_cadastro'];
  $email_cadastro = $_POST['email_cadastro'];
  $maiortitulacao_cadastro = $_POST['maiortitulacao_cadastro'];
  $lattes_cadastro = $_POST['lattes_cadastro']; 
  $senha_cadastro = $_POST['senha_cadastro'];
  $rep_senha_cadastro = $_POST['rep_senha_cadastro'];

  if ($senha_cadastro != $rep_senha_cadastro) {
    $_SESSION['mensagem'] = "As senhas não conferem";
    header("Location: cadastro.php");
    exit();

  }

  if((!empty($nome_cadastro)) && (!empty($maiortitulacao_cadastro)) && (!empty($email_cadastro)) && (!empty($lattes_cadastro))
   && (!empty($senha_cadastro))){


     $verificaUCexistente = mysqli_query($conexao, "SELECT * FROM colaboradores WHERE  email = '$email_cadastro'");

     if(mysqli_num_rows($verificaUCexistente)>0){
      $_SESSION['mensagem'] = "Colaborador existente";
       header("Location: cadastro.php");
       exit();
    }

          $info_usuario = "INSERT INTO colaboradores VALUES ('$nome_cadastro','$maiortitulacao_cadastro', '$email_cadastro', '$lattes_cadastro', '$senha_cadastro')";
          $resultado_usuario = mysqli_query($conexao, $info_usuario);

          if (!empty($resultado_usuario)) {
            $_SESSION['mensagem'] = "<label style='color: green; font-family: sans-serif;'>Cadastro realizado com sucesso</label><br>";
            header("Location: login.php");
          } else {
            $_SESSION['mensagem'] = "Cadastro falhou";
            header("Location: cadastro.php");
          }

  } else {

      $_SESSION['mensagem'] = "Preencha todos os campos do formulário";
      header("Location: cadastro.php");

  }
 ?>
