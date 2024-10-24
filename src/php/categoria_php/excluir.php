<?php
$id = $_GET["id"];
$con = new mysqli ("localhost","root", "", "bd_receita");
$res = $con-> query("delete  from bd_receita.categorias where id = $id");

$con -> close();
?>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Categoria</title>
    <link rel="stylesheet" href="../../css/mensagem.css">
</head>
<body>
    <div class="card">
        <h2>Categoria excluída com sucesso!</h2>
    <p><button><a href="../categoria_php/listar.php">Listagem de Categorias</a></button></p>
    </div>
    
   
</body>
</html>