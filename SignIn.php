<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Markert | Login</title>

    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="./styles/form.css">
</head>
<body> 
    <div class="container">
        <form action="validar-usuario.php" method="POST">
            <input type="email" placeholder="Email" name="usuario">
            <input type="password" placeholder="Senha" name="senha">

            <button>Acessar</button>
        </form>

        <a href="SignUp.php">Cadastrar</a>
    </div>
    
</body>
</html>