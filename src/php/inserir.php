<?php
$nome = $_POST["nome"];
$email= $_POST["email"];
$senha= md5($_POST["senha"]);

include("conexao.php");
$con-> query("insert into bd_receita.usuarios (nome, email, senha) values ('$nome', '$email', '$senha')");


$con-> close();

?>
<br>

<h1>
    Parabéns, o usuário foi inserido!
</h1>
    <a href="listar.php">Ver usuários cadastrados</a>
