<?php include_once("config/conexao.php") ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-me</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="./styles/form.css">
</head>
<body>

    <div class="container">
        <form action="./inserir-client.php" method="post">
            <h1 class="title">Cadastro</h1>
            <label class="labelFloat">
                <input type="text" name="nome" placeholder=" " required>
                <label for="nome">Nome</label>
            </label>
            <label class="labelFloat">
                <input type="text" name="sobrenome" placeholder=" " required>
                <label for="sobrenome">Sobrenome</label>
            </label>

            <label class="labelFloat">
                <input type="date" name="date" id="">
                <label for="date">Date</label>
            </label>

            <select name="gender">
                <?php 
                    $query = "SELECT * from tbl_gender";
                    $consulta = mysqli_query($conection, $query);
                    $result = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

                    foreach($result as $gender) {
                ?>
                    <option value="<?=$gender["id"];?>"><?=$gender["gender"];?></option>
                <?php } ?>
            </select>

            <div class="newsletter">
                <input type="checkbox" name="newsletter">
                <label for="newsletter">Desejo receber ofertas e novidades por e-mail e SMS.</label>
            </div>


            <button type="submit">Cadastrar</button>
        </form>


        <img src="./public/undraw_fingerprint_login_re_t71l.svg" alt="Imagem de Autenticação">
    </div>
    
</body>
</html>