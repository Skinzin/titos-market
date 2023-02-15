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
    <title>Tito's Market | Cadastrar Gêneros</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/form.css">
</head>
<body>
    <div class="container">
        <form action="inserir-gender.php" method="POST">
            <a href="index.php">Voltar</a>    
            <label class="labelFloat">
                <input type="text" name="gender" placeholder=" " required>
                <label for="gender">Gênero</label>
            </label>

            <button>Cadastrar/</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Gênero</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    
                ?>
            </tbody>
        </table>

        <?php
            if(isset($_GET["msg"])) {
                ?>
                    <div id="modal">
                        <div>
                <?php
                if($_GET["msg"] == "sucessocad") {
                    ?>
                        <span class="material-symbols-outlined sucess">done</span>
                        <h1>Alteração feita com sucesso!</h1>

                        <a href="#" title="Fechar">
                            <span class="material-symbols-outlined">close</span>
                        </a>
                    <?php
                } else {
                    ?>
                        <span class="material-symbols-outlined error">warning</span>
                        <h1>Erro ao fazer a alteração!</h1>

                        <a href="#" title="Fechar">
                            <span class="material-symbols-outlined">close</span>
                        </a>
                    <?php
                }
                ?>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
    
</body>
</html>