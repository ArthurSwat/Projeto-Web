



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/listar.css">
    <title>Listagem das receitas</title>

    
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
    
                    $id_cat = $_GET["id_categoria"];
                    include("conexao.php");
                    $res = $con->query("SELECT * FROM bd_receita.receitas  WHERE categoria = $id_cat");
                    //fetch_object faz com que toda linha vire um objeto, daí, sendo atribuido a variável obj;
                    while($obj= $res -> fetch_object()){
                        //armazenando o id que foi obtido através da variável obj na variável $id;
                      
                        echo "<tr>";
                        echo"<td>";
                        echo $obj->titulo;
                        echo"</td>";
                        echo"<td>";
                        echo  $obj->descricao;
                        echo"</td>";
                        echo"<td>";
                        echo "<a href='listar_receitas_por_categoria.php?id_categoria=" . $obj->id . "'>Detalhe</a>";
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
                        <a href='../../index.html'>Ir para o site</a>
                        </th>
                    </tr>
                </tfoot>
       </table>
</body>