<?php
$nome = $_POST["nome"];
$email= $_POST["email"];
$senha= md5($_POST["senha"]);

include("conexao.php");
$con-> query("insert into bd_receita.usuarios (nome, email, senha, data_registro) values ('$nome', '$email', '$senha', now())");


$con-> close();

?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário Cadastrado</title>
    <link rel="stylesheet" href="../css/mensagem.css">
</head>
<body>
    <div class="card">
        <h2>Parabéns, o usuário foi cadastrado!</h2>
    <p><button><a href="listar.php">Usuários cadastrados</a></button></p>
    </div>
    
   
</body>
</html>
