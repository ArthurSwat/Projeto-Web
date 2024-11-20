<meta charset="UTF-8">

<?php
$id =$_GET["id"];
include("conexao.php");
$res = $con-> query("select * from bd_receita.categorias where id=$id");
if($obj= $res->fetch_object()){
    $id=$obj->id;
    $nome=$obj->nome;
    $descricao=$obj->descricao;
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Cadastrar conta</title>
</head>
<body>
    <div class="container">
        <div class="form-image">
        <img src="../img/prato de ovo.avif" alt="">
        </div>
        <div class="form">
            <form action="alterar.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Editar categoria</h1>
                    </div>
                </div>
                <div class="input-box">
                        <input id="id" type="hidden" name="id"  value="<?php echo $id; ?>" required>
                    </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome da Categoria</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu Nome de Usuario"  value="<?php echo $nome; ?>" required>
                    </div>

                    <div class="input-box">
                        <label for="descricao">Descrição</label>
                        <input id="descricao" type="text" name="descricao" placeholder="Digite seu e-mail"  value="<?php echo $descricao; ?>" required>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</body>