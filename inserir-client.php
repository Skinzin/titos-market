<?php 
    include_once("config/conexao.php");


    if($_POST) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $data_nasc = $_POST['date'];
        $gender = $_POST['gender'];
        $newsletter = $_POST['newsletter'];

        $query = "INSERT INTO tbl_clientes(nome, sobrenome, data_nasc, id_genero, newsletter, id_status) VALUES('$nome', '$sobrenome', '$data_nasc', '$gender', '$newsletter', 1)";
        $insert = mysqli_query($conection, $query);
        
        if($insert) {
            $id_client = mysqli_insert_id($conection);
            header("Location: completar-cadastro.php?client=".$id_client);
        } else {
            header("Location: SignUp.php");
        }
        
    } else {
        header("Location: SignUp.php");
    }
?>