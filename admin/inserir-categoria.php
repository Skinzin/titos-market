<?php
    include_once("../config/conexao.php");

    @$name = $_POST['name-category'];
    @$icon = $_POST['icon-category'];
    @$slug = $_POST['slug-category'];

    $query = "INSERT INTO tbl_categorias(nome, icon, slug, id_status) VALUES('$name', '$icon', '$slug', 1)";
    $insertCategory = mysqli_query($conection, $query);

    if($insertCategory) {
        header("Location: gestao-categoria.php?msg=sucessocad#modal");
        // echo "Categoria registrada com sucesso! <a href='gestao-categoria.php'>Voltar</a>";
    } else {
        header("Location: gestao-categoria.php?msg=errorcad#modal");
    }
?>