<?php

session_start();
include_once("conecta.php");

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$query_login = "SELECT * FROM colaboradores WHERE email = '$email' AND senha = '$senha' LIMIT 1";
	$consulta_sql = mysqli_query($conexao, $query_login);
	$retorno_sql = mysqli_fetch_assoc($consulta_sql);

	if (!empty($email) && !empty($senha)) {

			if (!empty($retorno_sql)) {
				header("Location: perfil.php");
				$_SESSION['nome'] = $retorno_sql['nome'];
				$_SESSION['email'] = $retorno_sql['email'];
				

			} else {

				$_SESSION['mensagem'] = "Email ou senha inválida";
				header("Location: login.php");
			}

	} else {

		$_SESSION['mensagem'] = "Email ou senha inválida";
		header("Location: login.php");

	}



	?>
