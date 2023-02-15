<?php include_once("config/conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

            font-family: "Roboto", sans-serif;
        }

        body {
            background-color: #1e1e1e
        }

        header {
            width: 100%;
        }

        nav {
            display: flex;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .account {
            margin-left: auto;
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="#">Ínicio</a>
            <a href="./" title="Minha conta" class="account">
                <span class="material-symbols-outlined">account_circle</span>
            </a>
            <a href="./" title="Carrinho">
                <span class="material-symbols-outlined">shopping_cart</span>
            </a>
        </nav>
    </header>

    <main>

        <div id="categorias">
            <?php include_once('includes/vitrine-categorias.php')?>
        </div>
        <div id="top-categorias"></div>
        <div id="banners"></div>
        <div id="top-mercados"></div>
        <div id="mercados"></div>
        <!-- <div id="promocoes-produtos"></div> -->

        <h3>Produtos em promoção</h3>
    </main>
    
</body>
</html>