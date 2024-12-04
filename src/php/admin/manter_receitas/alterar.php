<?php
$id = $_POST["id"];
$titulo= $_POST["titulo"];
$descricao= $_POST["sinopse"];
$ingredientes= $_POST["ingredientes"];
$instrucoes= $_POST["preparo"];
$categoria= $_POST["categoria"];


include("conexao.php");
 $con-> query("update bd_receita.receitas set titulo= '$titulo' , descricao= '$descricao', ingredientes ='$ingredientes', instrucoes='$instrucoes', categoria ='$categoria' where id=$id");

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
    <link rel="stylesheet" href="../../../css/aviso.css">
</head>
<body>
    <div class="card">
        <h2>Receita Editada com Sucesso!</h2>
    <p><a href="listar.php">Categorias Cadastradas</a></p>
    </div>
    
   
</body>
</html>