<?php include_once "config.php" ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Resultado , initial-scale=1.0">
    <title>Resultado da Busca</title>
</head>

<body style="background-color: #3399FF;">
    <header>
        <h1>Resultado da Busca</h1>
    </header>

    <div>
        <?php
        $busca = $_GET['busca'];
        $result_nomes = "SELECT * FROM tbruas WHERE rua LIKE '%$busca%'
        or referencia  LIKE '%$busca%'";
        $resultado = mysqli_query($conn, $result_nomes);
        while ($linha = mysqli_fetch_array($resultado)) {
            echo $rua = $linha['rua'];
            echo '<a href=deletar.php?id=' . $linha['id'] . '>Deletar</a> 
        | <a href=editar.php?id=' . $linha['id'] . '>Editar</a> | <a href=pesquisa.php?id=' . $linha['id'] . '>Pesquisar</a>';
            echo '<br>';
        }
        ?>

    </div>

</body>

</html>