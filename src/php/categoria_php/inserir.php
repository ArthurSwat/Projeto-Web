<?php
$nome = $_POST["nome"];
$descricao= $_POST["descricao"];

include("conexao.php");

$con-> query("insert into bd_receita.categorias (nome, descricao) values ('$nome', '$descricao')");

$con-> close();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Categoria</title>
    <link rel="stylesheet" href="../../css/mensagem.css">
</head>
<body>
    <div class="card">
        <h2>Categoria inserida com sucesso!</h2>
    <p><button><a href="listar.php">Categorias Cadastradas</a></button></p>
    </div>
    
   
</body>
</html>