<?php 
    include_once("../config/conexao.php");

    if($_GET) {
        $id = $_GET["id"];

        $insert = mysqli_query($conection, "DELETE FROM tbl_gender WHERE id = $id");

        if($insert) {
            header("Location: gestao-gender.php?msg=sucessocad#modal");
        } else {
            header("Location: gestao-gender.php?msg=errorcad#modal");
        }
    } else {
        header("Location: gestao-gender.php");
    }

?>