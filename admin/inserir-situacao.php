<?php
    include_once("../config/conexao.php");

    $status = $_POST['status'];
    $query = "INSERT INTO tbl_status(status) VALUE('$status')";
    $insert = mysqli_query($conection, $query);

    if($insert) {
        echo "Situação cadastrada com sucesso!";
    } else {
        header("Location: cadastrar-situacao.php");
    }

?>