<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
 
}
.container {
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            height:900px;
        }
        .op {
            margin:10px
        }
h1{
    color: red;
}
.op a{
    text-decoration:none;
    color:aqua;
    border: 1px solid blue;
    margin:30px;
}
    </style>
    <link rel="stylesheet" href="../css/mensagem.css">
</head>
<body>

    
    <div class="card">
        <h1>
            Parabéns, o usuário foi inserido!
        </h1>
        <br>
            <p><button><a href="listar.php">Usuários cadastrados</a></button></p>
    </div>

</body>
</html>
<br>-->



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
    <link rel="stylesheet" href="../css/mensagem.css">
</head>
<body>
    <div class="card">
        <h2>Usuário inserido com sucesso!</h2>
    <p><button><a href="listar.php">Usuários cadastrados</a></button></p>
    </div>
    
   
</body>
</html>