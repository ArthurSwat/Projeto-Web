<?php
$id = $_GET["id"];
$con = new mysqli ("localhost","root", "", "bd_receita");
$res = $con-> query("delete  from bd_receita.usuarios where id = $id");

$con -> close();
?>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuário</title>
    <link rel="stylesheet" href="../../../css/aviso.css">
</head>
<body>
    <div class="card">
        <h2>Usuário excluído com sucesso!</h2>
    <p><a href="listar.php">Usuários cadastrados</a></p>
    </div>
    
   
</body>
</html>