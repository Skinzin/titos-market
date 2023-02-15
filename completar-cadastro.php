<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completar cadastro</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="./styles/form.css">
</head>
<body>

    <div class="container">
        <form action="inserir-client-data.php" method="POST">
            
            <h1 class="title">Finalizar o cadastro</h1>
            <input type="hidden" name="id_client" value="<?=$_GET['client']?>">
            <label class="labelFloat">
                <input type="text" name="cpf" placeholder=" " required>
                <label for="cpf">CPF</label>
            </label>
            <label class="labelFloat">
                <input type="text" name="rg" placeholder=" " required>
                <label for="rg">RG</label>
            </label>
            <label class="labelFloat">
                <input type="email" name="email" placeholder=" " required>
                <label for="email">E-mail</label>
            </label>
            <label class="labelFloat">
                <input type="text" name="tel" placeholder=" " required>
                <label for="tel">Telefone</label>
            </label>

            <button type="submit">Completar o cadastro</button>

        </form>

        <img src="./public/undraw_fingerprint_login_re_t71l.svg" alt="Imagem de Autenticação">
    </div>
    
</body>
</html>