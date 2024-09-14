<meta charset="UTF-8">
<h1>
    Editar os dados do usuário
</h1>

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
<form  method="post" action="alterar.php" >
    
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
</form>