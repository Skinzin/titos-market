<?php 
    include_once("../config/conexão.php");
    include_once("../config/seguranca.php");

    if($_SESSION["ID_NIVEL"] !== 2) {
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market | Cadastro de Tipo de Documentos</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/form.css">
</head>
<body>
    <div class="container">
        <form action="inserir-tipo-docs.php" method="POST">
            <a href="index.php">Voltar</a>    
            <label class="labelFloat">
                <input type="text" name="docs" placeholder=" " required>
                <label for="docs">Tipo de Documento</label>
            </label>

            <button>Cadastrar/</button>
        </form>
    </div>
</body>
</html>