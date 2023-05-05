<?php include_once "config.php"?> 

<?php
$id = $_POST['id'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$referencia = $_POST['referencia'];

$sql = "UPDATE tbruas SET rua='$rua',bairro='$bairro',referencia='$referencia' WHERE id='$id'";



if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Cadastro salvo com sucesso!');window.location='index.php?id=$id';</script>";
 
    } else {
    echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
 }
 mysqli_close($conn);


?>