<?php include_once "config.php"?> 

<?php

$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$referencia = $_POST['referencia'];

$sql = "INSERT INTO tbruas(rua,bairro,referencia)VALUES('$rua','$bairro','$referencia')";



if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Cadastro salvo com sucesso!');window.location='index.php?id=$id';</script>";
 
    } else {
    echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
 }
 mysqli_close($conn);


?>