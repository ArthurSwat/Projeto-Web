<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/listar.css">
    <title>Listagem de Categorias</title>

    
</head>

<body>
       <table border="1px">
                <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th colspan = "2">Opções</th>
                            
                        </tr>

                </thead>
                <tbody>
                    <?php

                    include("conexao.php");
                    $res = $con-> query("select * from bd_receita.categorias"); //fazendo a consulta;
                    //fetch_object faz com que toda linha vire um objeto, daí, sendo atribuido a variável obj;
                    while($obj= $res -> fetch_object()){
                        //armazenando o id que foi obtido através da variável obj na variável $id;
                        $id= $obj->id;
                        echo "<tr>";
                        echo"<td>";
                        echo $obj->nome;
                        echo"</td>";
                        echo"<td>";
                        echo  $obj->descricao;
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
                        <a href='../../html/criar_categoria.html'>Cadastrar nova Categoria</a>
                        </th>
                        <th colspan='2'>
                        <a href='../html/tela_inicial.html'>Ir para o site</a>
                        </th>
                    </tr>
                </tfoot>
       </table>
</body>