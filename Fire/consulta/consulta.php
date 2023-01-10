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

	
		
		<h1>Pesquisar Usuário</h1>
		
		<form method="POST" action="">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome"><br><br>
			
			<input name="SendPesqUser" type="submit" value="Pesquisar">
		</form><br><br>
		
		<?php
		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
            $dataNascimento = filter_input(INPUT_POST, 'date' , FILTER_SANITIZE_STRING);
            $telefone = filter_input(INPUT_POST, 'telefone' , FILTER_SANITIZE_STRING);
            $cpf  = filter_input(INPUT_POST, 'cpf' , FILTER_SANITIZE_STRING);
            $numeroSeguranca  = filter_input(INPUT_POST, 'numeroSeguranca' , FILTER_SANITIZE_STRING);
            $alergia  = filter_input(INPUT_POST, 'alergia' , FILTER_SANITIZE_STRING);
            $sangue  = filter_input(INPUT_POST, 'sangue' , FILTER_SANITIZE_STRING);
            $pcd  = filter_input(INPUT_POST, 'pcd' , FILTER_SANITIZE_STRING);
			$result_usuario = "SELECT * FROM tb_usuario WHERE nome LIKE '%$nome%'";
            
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				echo "ID: " . $row_usuario['id'] . "<br>";
				echo "nome: " . $row_usuario['nome'] . "<br>";
				echo "email: " . $row_usuario['email'] . "<br>";
                echo "dataNascimento: " . $row_usuario['dataNascimento'] . "<br>";
                echo "telefone: " . $row_usuario['telefone'] . "<br>";
                echo "cpf: " . $row_usuario['cpf'] . "<br>";
                echo "numeroSeguranca: " . $row_usuario['numeroSeguranca'] . "<br>";
                echo "alergia: " . $row_usuario['alergia'] . "<br>";
                echo "sangue: " . $row_usuario['sangue'] . "<br>";
                echo "pcd: " . $row_usuario['pcd'] . "<br>";
				echo "<a href='../alterar/alterar.php?id=" . $row_usuario['id'] . "'>Editar</a><br>";
				echo "<a href='../dao/apagar.php?id=" . $row_usuario['id'] . "'>Apagar</a><br><hr>";
			}
		}
		?>
	</body>
</html>