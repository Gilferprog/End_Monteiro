<?php
   include_once('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Endereços de Monteiro</title>
</head>

<body>
    <header>
        <h1>Sistema de Cadastramento Ruas de Monteiro-PB</h1>        
    </header>
    <br>   

    <form action="addtbr.php" method="post" name="ruasmt">

    <div class="container-fluid">
        <div class="form col-md-4">
            <label>Rua</label>
            <input class="form-control" type="text" name="rua" maxlength="150" required placeholder="Digite o nome da rua">
        </div>
        
        <div class="form col-md-4">
            <label>Ponto de referência</label>
            <input class="form-control" type="text" name="referencia" maxlength="150" required placeholder="Digite o ponto de referência">
        </div>

        <div class="form col-md-2">
            <label>Bairro</label>
            <input class="form-control" type="text" name="bairro" maxlength="150" required placeholder="Digite o bairro">
        </div>

        <div class="form col-md-2">
            <br>
            <input type="submit" value="Salvar">
        </div>
    </div>
    </form>
    <br><br><br>

    <div class="container-fluid">
    <form method="get" name="formbusca" action="busca.php">
       
          <label>Pesquisa</label>
          <input type="text" name="busca" required style="width: 600px;">
          <input type="submit" value="Pesquisar">
     
   </form>
   
</body>

</html>