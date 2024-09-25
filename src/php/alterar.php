<?php
$id = $_POST["id"];
$nome = $_POST["nome"];

$senha= $_POST["senha"];

include("conexao.php");
 $con-> query("update bd_receita.usuarios set nome= '$nome' , senha= '$senha' where id=$id");
 echo "Alterado com sucesso!";
 $con->close();

?>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro</title>
    <link rel="stylesheet" href="../css/mensagem.css">
</head>
<body>
    <div class="card">
        <h2>Edição concluída!</h2>
    <p><button><a href="listar.php">Usuários cadastrados</a></button></p>
    </div>
    
   
</body>
</html>