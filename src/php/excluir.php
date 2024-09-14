<?php
$id = $_GET["id"];
$con = new mysqli ("localhost","root", "", "bd_receita");
$res = $con-> query("delete  from bd_receita.usuarios where id = $id");

$con -> close();
echo "Excluido com sucesso!";
?>