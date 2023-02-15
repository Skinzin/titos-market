<?php 
    include_once("../config/seguranca.php");

    if($_SESSION["ID_NIVEL"] !== "2") {
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra Categoria</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../styles/global.css">
</head>
<body>
    <header>
        <a href="gestao-categoria.php">Cadastro de Categoria</a>
        <a href="gestao-situacao.php">Cadastrar Situação</a>
        <a href="gestao-gender.php">Cadastrar Gênero</a>
        <a href="gestao-tipo-docs.php">Cadastrar Tipo de Documento</a>
    </header>
    
</body>
</html>