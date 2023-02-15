<?php
    include_once("../config/conexao.php");

    if($_GET) {
        $id = $_GET["id"];
        $insert = mysqli_query($conection, "DELETE FROM tbl_tipo_docs WHERE id = $id");

        if($insert) {
            header("Location: gestao-tipo-docs.php?msg=sucessocad#modal");
        } else {
            header("Location: gestao-tipo-docs.php?msg=errorcad#modal");
        }
    } else {
        header("Location: gestao-gender.php");
    }
?>