<?php
    include_once("config/conexao.php");


    if($_POST) {
        $id = $_POST["id_client"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];

        $queryDocs = "INSERT INTO tbl_docs(id_usuario, documento, id_tipo_documento) VALUES('$id', '$cpf', 1), ('$id', '$rg', 2)";
        $insertDocs = mysqli_query($conection, $queryDocs);

        if($insertDocs) {
            $queryContatosEmail = "INSERT INTO tbl_contatos_emails(id_usuario, email) VALUES('$id', '$email')";
            $insertEmail = mysqli_query($conection, $queryContatosEmail);

            if($insertEmail) { 
                $queryTel = "INSERT INTO tbl_contatos_tel(id_usuario, numero) VALUES('$id', '$tel')";
                $insertTel =  mysqli_query($conection, $queryTel);

                if($insertTel) {
                    header("Location: index.php");
                } else {
                    header("Location: completar-cadastro.php?client=".$id);
                }
            }
        }
    } else {
        header("Location: SignUp.php");
    }
?>