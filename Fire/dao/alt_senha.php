<?php


include_once 'conexao.php';

$usuario = $_POST["usuario"];
$senha = PASSWORD_HASH($_POST["senha"],PASSWORD_DEFAULT);



$sql = "update usuarios set senha = '$senha' where usuario = '$usuario' ";

if(mysqli_query($conn,$sql)){
$msg = "alterado com sucesso!";

}else{
    $msg = "Error ao alterar";
}

mysqli_close($conn);
echo "<script>alert ('".$msg."');  location.href='../Login/login.php';</script>";


?>