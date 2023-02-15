<?php 
    include_once("../config/conexao.php");

    if($_POST) {
        $id = $_POST['id'];
        $gender = $_POST['gender'];

        $insert = mysqli_query($conection, "UPDATE tbl_gender SET gender = $gender WHERE id = $id");

        if($insert) {
            header("Location: gestao-gender.php?msg=sucessocad#modal");
        } else {
            header("Location: gestao-gender.php?acao=editar&id=$id&msg=errorcad#modal");
        }
    } else {
        header("Location: gestao-gender.php");
    }

?>