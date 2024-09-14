<?php
$id = $_POST["id"];
$nome = $_POST["nome"];

$senha= $_POST["senha"];

include("conexao.php");
 $con-> query("update bd_receita.usuarios set nome= '$nome' , senha= '$senha' where id=$id");
 echo "Alterado com sucesso!";
 $con->close();

?>