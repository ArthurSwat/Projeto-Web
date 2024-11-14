<?php
$id = $_POST["id"];
$titulo= $_POST["titulo"];
$descricao= $_POST["sinopse"];
$ingredientes= $_POST["ingredientes"];
$instrucoes= $_POST["preparo"];


include("conexao.php");
 $con-> query("update bd_receita.receitas set titulo= '$titulo' , descricao= '$descricao', ingredientes ='$ingredientes', instrucoes='$instrucoes' where id=$id");

 $con->close();

?>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Receita</title>
    <link rel="stylesheet" href="../css/mensagem.css">
</head>
<body>
    <div class="card">
        <h2>Edição concluída!</h2>
    <p><button><a href="listar.php">Listar receitas</a></button></p>
    </div>
    
   
</body>
</html>