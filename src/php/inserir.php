<?php
$nome = $_POST["nome"];
$email= $_POST["email"];
$senha= $_POST["senha"];

include("conexao.php");
$con-> query("insert into bd_receita.usuarios (nome, email, senha) values ('$nome', '$email', '$senha')");


echo "Inserido com sucesso!";
$con-> close();

?>