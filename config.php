<?php 
$servidor = "localhost";
$dbusuario = "root";
$dbsenha = "";
$dbname = "enderecomt";
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
$mysql_erro = mysqli_connect_error();
if ($mysql_erro != "") {
    echo $mysql_erro;
}
?>