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
<link rel="stylesheet" href="../css-receita/criar_conta.css">
<div class="container">
        <div class="card">
            <h2>Criar Conta</h2>
            <form  method="post" action="alterar.php" >
            <div class="input-group">
                    <label for="username">Nome de Usuário</label>
                    <input type="text" id="Usuario" name="nome" value="<?php echo $nome ?>" required>
                </div>
                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="input-group">
                    <label for="Senha">Senha</label>
                    <input type="password" id="Senha" name="senha" value="<?php echo $senha; ?>" required>
                </div>
                <div class="input-group">
                    <label for="confirmar-senha">ID</label>
                    <input type="text" id="confirmar-senha" name="id"   value="<?php echo $id; ?>" required>
                </div>
                <button type="submit" class="btn">Confirmar alterações</button>
            </form>

        </div>
    </div>

