<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Receita</title>
    <link rel="stylesheet" href="../../css/css_tela_add.css">
</head>
<body>
    <div class="container">
        <h1>Adicionar Receita</h1>
        <!--Um formulario, a tag action indica o local para que esses dados irão, já o method post é usado para "esconder" as informações da URL, multipart/form-data é um tipo de codificação usado quando o formulário inclui arquivos para upload. -->
        <form action="inserir.php" method="post" enctype="multipart/form-data">
            <div class="form-grupo">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" rows="5" required></input>
            </div>
            <div class="campo">
                <label for="categoria">Categoria</label>
                <select name="categoria" id="" style="width: auto;">
                    
                    <?php
                      $con = new mysqli ("localhost","root", "", "bd_receita");
                     $res = $con ->query("select * from categorias");

                     while ($linha = $res -> fetch_object()){
                        $id = $linha->id;
                        $nome = $linha->nome;

                        echo "  <option value='$id'-> $nome </option>";
                     }
                
                ?>
                </select>
            </div>
            <div class="form-grupo">
                <label for="ingredientes">
                    Ingredientes
                </label>
                <textarea name="ingredientes" id=""></textarea>
            </div>
            <div class="form-grupo">
                <label for="preparo">
                    Modo de preparo
                </label>
                <textarea name="preparo" id="instructions"></textarea>
            </div>
            <div class="form-grupo">
                <label for="sinopse">Sinopse:</label>
                <textarea id="instructions" name="sinopse" rows="5" required></textarea>
            </div>
            <button type="submit">Adicionar Receita</button>
        </form>
    </div>
</body>
</html>
