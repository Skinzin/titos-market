<?php

    include_once("../config/conexao.php");

    if($_GET) {
        $id = $_GET["id"];

        $insert = mysqli_query($conection, "DELETE FROM tbl_status WHERE id = $id");

        if($insert) {
            header("Location: gestao-situacao.php?msg=sucessocad#modal");
        } else {
            header("Location: gestao-situacao.php?msg=errorcad#modal");
        }
    } else {
        header("Location: gestao-situacao.php");
    }
?>