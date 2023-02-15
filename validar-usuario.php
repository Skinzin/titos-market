<?php
    include_once("config/conexao.php");

    if($_POST) {
        $user = $_POST["usuario"];
        $password = $_POST["senha"];

        $insert = mysqli_query($conection, "SELECT * FROM tbl_acessos WHERE usuario = '$user' AND senha = '$password'");
        $result = mysqli_fetch_all($insert, MYSQLI_ASSOC);

        if($result) {
            session_start();
            $_SESSION["ID_USUARIO"] = $result[0]["id_usuario"];
            $_SESSION["USUARIO"] = $result[0]["usuario"];
            $_SESSION["ID_STATUS"] = $result[0]["id_status"];
            $_SESSION["ID_NIVEL"] = $result[0]["id_nivel"];

            $insertUser = mysqli_query($conection, "SELECT * FROM tbl_clientes WHERE id_client = '".$_SESSION["ID_USUARIO"]."'");
            $resultUser = mysqli_fetch_all($insertUser, MYSQLI_ASSOC);


            $_SESSION["NOME_USUARIO"] = $resultUser[0]["nome"];
            $_SESSION["SOBRENOME_USUARIO"] = $resultUser[0]["sobrenome"];
            header("Location: minha-conta.php");
        } else {
            header("Location: SignIn.php?msg=userinvalid");
        }
    } else {
        header("Location: SignIn.php");
    }
?>