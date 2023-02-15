<?php
    include_once("../config/conexao.php");

    if($_POST) {
        $id = $_POST['id'];
        $status = $_POST["status"];

        $insert = mysqli_query($conecation, "UPDATE tbl_status SET status = $status WHERE id = $id");
        
        if($insert) {
            header("Location: gestao-situcao.php?msg=sucessocad#modal");
        } else {
            header("Location: gestao-situcao.php?acao=editar&id=$id&msg=errorcad#modal");
        }

    } else {
        header("Location: gestao-situcao.php");
    }
?>