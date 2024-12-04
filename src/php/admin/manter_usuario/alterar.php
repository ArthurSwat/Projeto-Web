<?php
$id = $_POST["id"];
$nome = $_POST["nome"];

$senha= $_POST["senha"];

include("conexao.php");
 $con-> query("update bd_receita.usuarios set nome= '$nome' , senha= '$senha' where id=$id");

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
        <h2>Usuário editado com sucesso!</h2>
    <p><a href="listar.php">Usuários Cadastrados</a></p>
    </div>
    
   
</body>
</html>