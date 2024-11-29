<?php
$id =$_GET["id"];


                      $con = new mysqli ("localhost","root", "", "bd_receita");
                     $res = $con ->query("select * from receitas where id = $id");


                     if ($obj = $res->fetch_object()){
                        $id = $obj->id;
                        $titulo = $obj->titulo;
                        $descricao = $obj->descricao;
                        $ingredientes = $obj->ingredientes;
                        $instrucoes = $obj->instrucoes;  
                    }
                   
                ?>


<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mestre Cuca - Receitas</title>
    <link rel="stylesheet" href="../../css/detalhes.css"> <!-- Atualize o caminho do CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>


    <!-- Barra de navegação -->
    <header>
        <div class="container">
            <div class="header-title">
                <h1>Mestre Cuca</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../php/receitas_php/adicionar_receita.php">Receitas</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <!-- Seção principal com banner -->
    <section class="main">
        <div class="container">
            <div class="hero-content">
                <h2>Melhores Receitas Do Mestre Cuca</h2>
                <p>Sabor e Surpresa: Descubra o Inesperado em Cada Prato!</p>
            </div>
        </div>
    </section>


    <!-- Seção de Receitas Especiais -->
    <section class="featured-recipes">
        <div class="container">
            <h2><?=$titulo?></h2>
            <div class="recipe-container">
           
               
                <div class="recipe-content">
                <h3>Descrição da receita</h3>
                <p> <?=$descricao?></p>


                   
                    <h3>Ingredientes para o cuscuz:</h3>
                    <p>
                        <?=nl2br($ingredientes)?>
                   
                    </p>


                    <h3>Modo de Preparo</h3>


                    <p><?=nl2br($instrucoes)?></p>
                   
                </div>
            </div>
        </div>
    </section>


    <!-- Rodapé -->
    <footer>
        <div class="container">
            <p>&copy; 2024 OctoFood - Todos os direitos reservados.</p>
        </div>
    </footer>


</body>
</html>        