<?php
    include_once("../config/conexao.php");

    $typeDocs = $_POST["docs"];
    $insert = mysqli_query($conection, "INSERT INTO tbl_tipo_docs(tipo_doc) VALUE('$typeDocs')");

    if($insert) {
        echo "Tipo de documento inserido com sucesso!";
    } else {
        header("Location: gestao-tipo-docs.php");
    }

?>