<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$email= $_POST["email"];
$senha= $_POST["senha"];

include("conexao.php");
 $con-> query("update bd_receita.usuarios set nome= '$nome' , email= '$email' , senha= '$senha' where id=$id");
 echo "Alterado com sucesso!";
 $con->close();

?>