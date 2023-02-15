<?php
    include_once("../config/conexao.php");

    $gender = $_POST['gender'];
    $insert = mysqli_query($conection, "INSERT INTO tbl_gender(gender) VALUE('$gender')");

    if($insert) {
        echo "Gênero cadastrado com sucesso!";
    } else {
        header("Location: gestao-gender.php");
    }
?>