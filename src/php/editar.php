<meta charset="UTF-8">


<?php
$id =$_GET["id"];
include("conexao.php");
$res = $con-> query("select * from bd_receita.usuarios where id=$id");
if($obj= $res->fetch_object()){
    $nome=$obj->nome;
    $email=$obj->email;
    $senha=$obj->senha;
}
$con -> close();
?>
<!--<form  method="post" action="alterar.php" >
    
    <label >
            ID do usuário:
            <br>
            <input type="text" name="id" value="<?php echo $id; ?>">
        </label>
        <br>
        <label for="">
            Nome do usuário:
            <br>
            <input type="text" name="nome" value="<?php echo $nome; ?>">
        </label>
        <br>
        <label for="">
            Email do usuário:
            <br>
            <input type="text" name="email" value="<?php echo $email; ?>">
        </label>
        <br>
        <label for="">
            Senha do usuário:
            <br>
            <input type="text" name="senha" value="<?php echo $senha; ?>">
        </label>
        <br>
        <button>
            Editar
        </button>
</form>-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/criar_conta.css">
    <title>Cadastrar conta</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="" alt="">
        </div>
        <div class="form">
            <form action="../php/alterar.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Editar usuário</h1>
                    </div>
                </div>
                <div class="input-box">
                        <input id="id" type="hidden" name="id"  value="<?php echo $id; ?>" required>
                    </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome de Usuario</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu Nome de Usuario"  value="<?php echo $nome; ?>" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail"  value="<?php echo $email; ?>" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha"   value="<?php echo $senha; ?>"required>
                    </div>
                </div>

                <div class="continue-button">
                    <button><a href="../php/listar.php">Confirmar</a> </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
