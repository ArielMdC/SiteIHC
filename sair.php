<?php
session_start();
include_once("conecta.php");
unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email']);

mysqli_close($conexão);
$_SESSION['mensagem'] = "Deslogado com sucesso";

header("Location: login.php");
?>
