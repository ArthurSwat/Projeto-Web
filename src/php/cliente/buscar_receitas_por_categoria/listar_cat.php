

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas - Mestre Cuca</title>
    <style>
        /* Estilos gerais */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:white ;
            color: #333;
        }
        a {
            
            color: inherit;
        }

        /* Barra de navegação */
        header {
            background-color: #de7229;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 36px;
        }
        nav {
            background-color:white;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color:black;
            margin: 0 20px;
            font-size: 18px;
            padding: 10px 20px;
            display: inline-block;
            transition: background-color 0.3s;
        }
        nav a:hover {
            background-color:antiquewhite;
            border-radius: 5px;
        }

        /* Layout principal */
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
        }
        .category-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }
        .category-item {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex-basis: 24%;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .category-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
        }
        .category-item h2 {
            font-size: 22px;
            color: #333;
        }
        .category-item p {
            color: #777;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .category-item {
                flex-basis: 48%;
            }
            .recipe-item {
                width: 48%;
            }
        }
        @media (max-width: 480px) {
            .category-item {
                flex-basis: 100%;
            }
            .recipe-item {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <h1>Mestre Cuca</h1>
        <p>Encontre as melhores receitas para o seu dia a dia!</p>
        </header>
    
 

    <!-- Conteúdo Principal -->
    <div class="container">
        <h2>Categorias</h2>
        <div class="category-list">
            <?php
            include("conexao.php");
            $res = $con->query("SELECT * FROM categorias");

            if ($res) {
                while ($obj = $res->fetch_object()) {
                    echo "<div class='category-item'>";
                    echo "<h2>" . htmlspecialchars($obj->nome) . "</h2>";
                    echo "<p>" . htmlspecialchars($obj->descricao) . "</p>";
                    echo "<a href='listar_receitas.php?id_categoria=" . htmlspecialchars($obj->id) . "'> Ver receitas </a>";
                    echo "</div>";
                }
            } else {
                echo "Erro na consulta SQL: " . $con->error;
            }

            $con->close();
            ?>
        </div>
    </div>
</body>
</html>
