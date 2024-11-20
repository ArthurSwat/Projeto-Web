<meta charset="UTF-8">

<?php
$id =$_GET["id"];
include("conexao.php");
$res = $con-> query("select * from bd_receita.receitas where id=$id");
if($obj= $res->fetch_object()){
    $titulo=$obj->titulo;
    $descricao=$obj->descricao;
    $ingredientes=$obj->ingredientes;
    $instrucoes=$obj->instrucoes;
}
$con -> close();
?>
<br>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/editar_receita.css">
    <title>Cadastrar receita</title>
    link
</head>

<body>
    <div class="container">
        <div class="form-image">
        <img src="../img/prato de ovo.avif" alt="">
        </div>
        <div class="form">
            <form action="../receitas_php/alterar.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Editar receita</h1>
                    </div>
                </div>
                <div class="input-box">
                        <input id="id" type="hidden" name="id"  value="<?php echo $id; ?>" required>
                    </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="text">Titulo</label>
                        <input id="nome" type="text" name="titulo"   value="<?php echo $titulo; ?>" required>
                    </div>
                    <div class="input-box">
                        <label for="text">Ingrediente</label>
                        <input id="password" type="password" name="ingredientes" placeholder="Digite sua senha"   value="<?php echo $ingredientes; ?>"required>
                    </div>
                    <div class="input-box">
                        <label for="text">Modo de preparo</label>
                        <input id="n" type="text" name="preparo" placeholder="Digite seu Nome de Usuario"  value="<?php echo $instrucoes; ?>" required>
                    </div>
                    <div class="input-box">
                        <label for="text">Sinopse</label>
                        <input id="nome" type="text" name="sinopse" placeholder="Digite seu Nome de Usuario"  value="<?php echo $descricao; ?>" required>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
