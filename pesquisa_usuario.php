<?php
session_start();
include_once("conecta.php");

	$busca = $_POST['palavra'];

	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$query_pesquisa = "SELECT * FROM usuario WHERE nome LIKE '$busca%' OR email LIKE '$busca%'";
	$resultado_pesquisa = mysqli_query($conexao, $query_pesquisa);
	

	if(mysqli_num_rows($resultado_pesquisa) <= 0){
		echo "Nenhum usuário encontrado.";
	}else{
		while($rows = mysqli_fetch_assoc($resultado_pesquisa)){
			
			echo "Nome: ".$rows['nome']." | Email: ".$rows['email']." | Idade: ".$idade."<br>";
		}
	}
?>
