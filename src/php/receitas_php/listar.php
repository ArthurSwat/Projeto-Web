<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/listar.css">
    <title>Receitas Cadastradas</title>

    
</head>

<body>
       <table border="1px">
                <thead>
                        <tr>
                            <th>Receita</th>
                            <th>Descrição</th>
                            <th>Ingredientes</th>
                            <th>Instruções</th>
                            <th>Publicação</th>
                            <th>Usuario</th>
                            <th>Categoria</th>
                            <th colspan = "2">Opções</th>
                            
                        </tr>

                </thead>
                <tbody>
                    <?php

                    include("conexao.php");
                    $res = $con-> query("SELECT r.*, c.nome as nome_categoria FROM bd_receita.receitas as r inner join categorias as c on r.categoria= c.id"); //fazendo a consulta;
                    //fetch_object faz com que toda linha vire um objeto, daí, sendo atribuido a variável obj;
                    while($obj= $res -> fetch_object()){
                        //armazenando o id que foi obtido através da variável obj na variável $id;
                        $id= $obj->id;
                        echo "<tr>";
                        echo"<td>";
                        echo $obj->titulo;
                        echo"</td>";
                        echo"<td>";
                        echo  $obj->descricao;
                        echo"</td>";
                        echo"<td>";
                        echo $obj -> ingredientes;
                        echo"</td>";
                        echo "<td>";
                        echo $obj -> instrucoes;
                        echo "</td>";
                        echo "<td>";
                        echo $obj -> data_publicacao;
                        echo"</td>";
                        echo "<td>";
                        echo $obj -> usuario;
                        echo"</td>";
                        echo "<td>";
                        echo $obj -> nome_categoria;
                        echo"</td>";
                        echo"<td>";
                        echo "<a href='excluir.php?id=$id'> Excluir </a>";
                        echo"</td>";
                        echo"<td>";
                        echo "<a href='editar.php?id=$id'> Editar </a>";
                        echo"</td>";
                        echo"</tr>";
                    }
                    echo"</tbody>";
                    $con ->close();
                    ?>
                </tbody>

                <tfoot>
                    <tr>
                        <th colspan='2'>
                        <a href='adicionar_receita.php'>Cadastrar nova receita</a>
                        </th>
                        <th colspan='2'>
                        <a href='../../index.html'>Ir para tela principal</a>
                        </th>
                    </tr>
                </tfoot>
       </table>
</body>