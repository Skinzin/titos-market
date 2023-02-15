<?php
    // Garantir a segurança na entraga de info.
    // Apenas para usuários authen. e validados
    // No PHP e pelo DB.
    session_start(); // Ativar os recursos de seções.
    if($_SESSION["ID_USUARIO"]) {
        //
    } else {
        header("Location: SignIn.php");
    }
?>