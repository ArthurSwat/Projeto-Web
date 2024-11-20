<?php
$nome = $_POST["nome"];
$email= $_POST["email"];
$senha= md5($_POST["senha"]);

include("conexao.php");

$con-> query("insert into bd_receita.usuarios (nome, email, senha, data_registro) values ('$nome', '$email', '$senha',now())");

$con-> close();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuário</title>
    <link rel="stylesheet" href="../../css/aviso.css">
</head>
<body>
    <div class="card">
        <h2>Usuário inserido com sucesso!</h2>
    <p><a href="listar.php">Usuários cadastrados</a></p>
    </div>
    
   
</body>
</html>