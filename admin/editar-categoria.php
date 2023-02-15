<?php

    include_once('../config/conexao.php');

    
    if($_POST) {
        $name = $_POST['name-category'];
        $icon = $_POST['icon-category'];
        $slug = $_POST['slug-category'];
        $id = $_POST["id-category"];

        $insert = mysqli_query($conection, "UPDATE tbl_categorias SET nome = '$name', icon = '$icon', slug = '$slug' WHERE id = $id");

        if($insert) {
            header("Location: gestao-categoria.php?msg=sucessocad#modal");
        } else {
            header("Location: gestao-categoria.php?acao=editar&id=$id&msg=errorcad#modal");
        }

    } else {
        header("Location: gestao-categoria.php");
    }
?>