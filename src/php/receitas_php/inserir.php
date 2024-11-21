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
$titulo = $_POST["titulo"];
$ingredientes=$_POST["ingredientes"];
$instrucoes=$_POST["preparo"];
$descricao=$_POST["sinopse"];
$categoria= $_POST ["categoria"];
$usuario=2;
include("conexao.php");

$con-> query("insert into receitas ( titulo, descricao, ingredientes, instrucoes, data_publicacao,usuario, categoria) values ('$titulo', '$descricao','$ingredientes','$instrucoes',now(),$usuario, $categoria)");

$con-> close();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Receita</title>
    <link rel="stylesheet" href="../../css/aviso.css">
</head>
<body>
    <div class="card">
        <h2>Receita inserida com sucesso!</h2>
    <p><a href="listar.php">Receitas cadastradas</a></p>
    </div>
    
   
</body>
</html>