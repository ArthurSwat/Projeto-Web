<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];

include("conexao.php");
 $con-> query("update bd_receita.categorias set nome= '$nome' , descricao= '$descricao' where id=$id");

 $con->close();

?>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoria</title>
    <link rel="stylesheet" href="../../css/mensagem.css">
</head>
<body>
    <div class="card">
        <h2>Edição concluída!</h2>
    <p><button><a href="listar.php">Categoria Editada</a></button></p>
    </div>
    
   
</body>
</html>