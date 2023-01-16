<?php
include_once "../dao/conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Perfil</title>		
        <link rel="stylesheet" href="estilo.css">
	</head>
	<body>
        
    <div class="tudo">
        <div class="sidebar">
            <div class="sidebar-top">
                <img src="img/flames.png" alt="" width="40px">
                <span class="brand">FireHelpCenter</span><br>
                 
            </div>
            <div class="sidebar-top">
            
                <span class="brand"></span><br>
                 
            </div>
            <div class="sidebar-center">
                <ul class="list">
                   <a href="../consulta/perfil.php"><li class="list-item">
                         <img src="img/man.png" alt="" width="30px">
                        <span class="list-item-text">Perfil</span>
                    </li></a>
                    
                    <li class="list-item">
                       <i class="list-item-icon fas fa-book"></i>
                        <a href="../visao/sobre.php"><span class="list-item-text">Sobre</span></a>
                    </li>
                  
                </ul>
            </div>
            <button class="btn fifth">EMERGÊNCIA</button>
            <div class="sidebar-bottom">
                <div class="color-box dark"></div>
                <div class="color-box night"></div>
                <div class="color-box light"></div>
            </div>
        </div>
	   
    <?php
session_start();
if(!empty($_SESSION['id'])){
	echo '<div class="dados">'.'<spam>Nome</spam> <br>'. $_SESSION['nome']."<br>"."<br>".'</div>';
    echo'<div class="dados">'.'<spam>Email</spam><br>'. $_SESSION['email']."<br>" ."<br>".'</div>';
    echo '<div class="dados">'.'<spam>Data</spam> <br>'.$_SESSION['dataNascimento']."<br>"."<br>".'</div>';
    echo '<div class="dados">'.'<spam>Telefone</spam> <br>'.$_SESSION['telefone']."<br>".'<br> </div>';
    echo '<div class="dados">'.'<spam>CPF</spam><br>'.$_SESSION['cpf']."<br>"."<br>".'</div>';
    echo '<div class="dados">'.'<spam>Numero de Segurança</spam> <br>'.$_SESSION['numeroSeguranca']." <br>"."<br>".'</div>';
    echo '<div class="dados">'.'<spam>Deficiencia</spam> <br>'.$_SESSION['deficiencia']." <br>"."<br>".'</div>';
    echo '<div class="dados">'.'<spam>Alergia</spam> <br>'.$_SESSION['alergia']." <br>"."<br>".'</div>';
    echo '<div class="dados">'.'<spam>Sangue</spam> <br>'.$_SESSION['sangue']." <br>"."<br>".'</div>';
    echo '<div class="dados">'.'<spam>PCD</spam> <br>'.$_SESSION['pcd']."<br>"."<br>".'</div>';

	

}
?>
	</body>
</html>