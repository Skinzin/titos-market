<?php
    include_once("../config/conexao.php");

    if($_POST) {
        $id = $_POST["id"];
        $typeDocs = $_POST["docs"];

        $insert = mysqli_query($conection, "UPDATE tbl_tipo_docs SET tipo_doc = $typeDocs WHERE id = $id");
        if($insert) {
            header("Location: gestao-tipo-docs.php?msg=sucessocad#modal");
        } else {
            header("Location: gestao-tipo-docs.php?acao=editar&id=$id&msg=errorcad#modal");
        }

    } else {
        header("Location: gestao-tipo-docs.php");
    }
?>