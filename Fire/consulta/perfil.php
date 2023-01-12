<?php
include_once "../dao/conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Pesquisar</title>		
	</head>
	<body>
	   
    <?php
session_start();
if(!empty($_SESSION['id'])){
	echo $_SESSION['nome']." <br>";
    echo $_SESSION['email']."<br>";
    echo $_SESSION['dataNascimento']."<br>";
    echo $_SESSION['telefone']."<br>";
    echo $_SESSION['cpf']."<br>";
    echo $_SESSION['numeroSeguranca'].",  <br>";
    echo $_SESSION['deficiencia']." <br>";
    echo $_SESSION['alergia']." <br>";
    echo $_SESSION['sangue']." <br>";
    echo $_SESSION['pcd']." <br>";

	

}
?>
	</body>
</html>