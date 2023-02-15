<?php 
    include_once("../config/conexão.php");
    include_once("../config/seguranca.php");

    if($_SESSION["ID_NIVEL"] !== 2) {
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastro de Categoria</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/form.css">

</head>
<body>
    <div class="container">
        <!-- <h4 class="title">Gestão de categorias</h4> -->            
        <?php 
            if(isset($_GET['acao'])) {
                if($_GET['acao'] == "editar") {
                    $queryConsultCategory = "SELECT * FROM tbl_categorias WHERE id =".$_GET["id"]."";
                    $consultCategory = mysqli_query($conection, $queryConsultCategory);
                    $result = mysqli_fetch_all($consultCategory, MYSQLI_ASSOC);
                    foreach($result as $category) {
        ?>
            <form action="editar-categoria.php" method="POST">
                <h4>Editar de categoria</h4>

                <input type="hidden" name="id-category" value="<?=$category["id"]?>">
                <label class="labelFloat">
                    <input type="text" name="name-category" placeholder=" " value="<?=$category['nome'];?>" required>
                    <label for="name-category">Nome da categoria</label>
                </label>
                <label for="" class="labelFloat">
                    <input type="text" name="icon-category" placeholder=" " value="<?=$category['icon'];?>" required>
                    <label for="icon-category">Icone da categoria</label>

                </label>
                <label class="labelFloat">
                    <input type="text" name="slug-category" placeholder=" " value="<?=$category['slug'];?>" required>
                    <label for="slug-category">Slug da categoria</label>
                </label>

                <button type="submit">Salvar</button>
            </form>
        <?php
                    }
                }
            } else {
                ?>
                    <form action="inserir-categoria.php" method="POST">
                        <a href="./index.php">Voltar</a>    

                        <h4>Cadastro de categoria</h4>
                        <label class="labelFloat">
                            <input type="text" name="name-category" placeholder=" " required>
                            <label for="name-category">Nome da categoria</label>
                        </label>
                        <label for="" class="labelFloat">
                            <input type="text" name="icon-category" placeholder=" " required>
                            <label for="icon-category">Icone da categoria</label>

                        </label>
                        <label class="labelFloat">
                            <input type="text" name="slug-category" placeholder=" " required>
                            <label for="slug-category">Slug da categoria</label>
                        </label>


                        <button type="submit">Cadastrar</button>
                    </form>
                <?php
            }
        ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoria</th>
                    <th>Icone</th>
                    <th>Slug</th>
                    <th>Visibilidade</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $consult = mysqli_query($conection, "SELECT * FROM tbl_categorias");
                    $result = mysqli_fetch_all($consult, MYSQLI_ASSOC);

                    foreach($result as $category) {
                        echo "
                            <tr>
                                <td>".$category['id']."</td>
                                <td>".$category['nome']."</td>
                                <td>".$category['icon']."</td>
                                <td>".$category['slug']."</td>
                                <td>".$category['visibility']."</td>
                                <td>".$category['id_status']."</td>
                                <td>
                                    <a href='?acao=editar&id=".$category['id']."'>Editar</a>
                                    <a href='deletar-categoria.php?id=".$category['id']."'>Deletar</a>
                                </td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>

        <?php
            if(isset($_GET["msg"])) {
                ?>
                    <div id="modal">
                        <div>
                <?php
                if($_GET["msg"] == "sucessocad") {
                    ?>
                        <span class="material-symbols-outlined sucess">done</span>
                        <h1>Alteração feita com sucesso!</h1>

                        <a href="#" title="Fechar">
                            <span class="material-symbols-outlined">close</span>
                        </a>
                    <?php
                } else {
                    ?>
                        <span class="material-symbols-outlined error">warning</span>
                        <h1>Erro ao fazer a alteração!</h1>

                        <a href="#" title="Fechar">
                            <span class="material-symbols-outlined">close</span>
                        </a>
                    <?php
                }
                ?>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
</body>
</html>