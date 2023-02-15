<?php 
    $query = "SELECT nome, slug, icon FROM tbl_categorias";
    $result = mysqli_query($conection, $query);
    $dados = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach($dados as $categoria) {
        echo "<h4>".$categoria['nome']."</h4>";
        echo "<img src='".$categoria['icon']."' alt='Imagem da categoria'>";
    }
?>