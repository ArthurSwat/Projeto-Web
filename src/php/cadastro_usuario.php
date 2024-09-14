<h1>
    Listagem de usuários
</h1>
<?php
$con = new mysqli ("localhost","root", "", "bd_receita");
$res = $con-> query("select * from bd_receita.usuarios");
echo"<table border =1>";
echo"<thead>";
echo"<tr>";
echo"<th> Nome </th>";
echo"<th> Email </th>";
echo"<th> Senha </th>";


echo"</tr>";
echo"<thead>";
echo"<tbody>";
while($obj= $res -> fetch_object()){
    echo "<tr>";
    echo"<td>";
    echo $obj->nome;
    echo"</td>";
    echo"<td>";
    echo  $obj->email;
    echo"</td>";
    echo"<td>";
    echo $obj->senha;
    echo"</td>";
    echo"<td>";
    echo "<a href='#'> Excluir </a>";
    echo"</td>";
    echo"</tr>";
}
echo"</tbody>";
echo "</table>";
$con ->close();
?>