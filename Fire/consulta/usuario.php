<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous"/>

    <link rel="stylesheet" href="user2.css">

    
</head>

<body>
    <div class="tudo">
        <div class="sidebar">
           <a href="../visao/visao.php"><div class="sidebar-top">
                <img src="img/flames.png" alt="" width="40px">
                <span class="brand">FireHelpCenter</span><br>
                 
            </div></a>
            
            <div class="sidebar-center">
                <ul class="list">
                   <a href="../consulta/usuario.php"><li class="list-item">
                         <img src="img/man.png" alt="" width="30px">
                        <span class="list-item-text">Perfil</span>
                    </li></a>
                    
                    <li class="list-item">
                       <i class="list-item-icon fas fa-book"></i>
                        <a href="../visao/sobre.php"><span class="list-item-text">Help</span></a>
                    </li>
                    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/phosphor-icons"></script>
                </ul>
            </div>
            
            <div class="sidebar-bottom">
                <div class="color-box dark"></div>
                <div class="color-box night"></div>
                <div class="color-box light"></div>
            </div>

    </div>
    <section id="main_user">
      
        <div class="info">
            <div class="container_icons">
                    <a href="" id="edit"><i class='bx bx-edit icon '></i></a>
               
                </div>
            <h2>Perfil</h2>

           

            <div class="container_info">
    

                <div class="nome" >
                    
                    <span><strong>Nome:</strong> </span>
                    <?php
					echo $_SESSION['nome'];
					?> 
                
                </div>

                <div class="underline"></div>

                <div class="usuario"> 
                    <span><strong>Usuario:</strong></span>
                    <?php 
					echo $_SESSION['usuario'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="email">
                    <span><strong>Email:</strong> </span>
                    <?php
					echo $_SESSION['email'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="senha">
                    <span><strong>Senha:</strong></span>
                    <?php
					echo $_SESSION['senha'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="data">

                    <span><strong>Data de nascimento:</strong> </span>
                    <?php
					echo $_SESSION['dataNascimento'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="telefone">

                    <span><strong>Telefone:</strong> </span>
                    <?php
					echo $_SESSION['telefone'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="cpf">

                    <span><strong>CPF:</strong> </span>
                    <?php
					echo  $_SESSION['cpf'];
					?> 
                </div>

                <div class="underline"></div>

                 <div class="cep">

                    <span><strong>CEP:</strong> </span>
                    <?php
					echo $_SESSION['cep'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="nSegu">

                    <span><strong>Numero de segurança:</strong> </span>
                    <?php
					echo  $_SESSION['numeroSeguranca'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="alergia">

                    <span><strong>Alergia:</strong> </span>
                    <?php
					echo $_SESSION['alergia'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="tipoS">

                    <span><strong>Tipo Sanguineo:</strong> </span>
                    <?php
					echo $_SESSION['sangue'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="pcd"> 
                    <span><strong>PCD:</strong></span>
                    <?php 
					echo $_SESSION['pcd'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="defi">

                    <span><strong>Deficiencia:</strong> </span>
                    <?php
					echo $_SESSION['deficiencia'];
					?> 
                </div>

                <div class="underline"></div>

                

           
            </div>
            
        </div>

        <div class="modification">
            <h2>Change your datas</h2>
            <form action="ModifyUserServlet" method="post">
                <input type="hidden" name="id" id="id" value="">

                <div class="input-data">

                <div class="nome" >
                    
                    <span><strong>Nome:</strong> </span>
                    <?php
					echo $_SESSION['nome'];
					?> 
                
                </div>

                <div class="underline"></div>

                <div class="usuario"> 
                    <span><strong>Usuario:</strong></span>
                    <?php 
					echo $_SESSION['usuario'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="email">
                    <span><strong>Email:</strong> </span>
                    <?php
					echo $_SESSION['email'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="senha">
                    <span><strong>Senha:</strong></span>
                    <?php
					echo $_SESSION['senha'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="data">

                    <span><strong>Data de nascimento:</strong> </span>
                    <?php
					echo $_SESSION['dataNascimento'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="telefone">

                    <span><strong>Telefone:</strong> </span>
                    <?php
					echo $_SESSION['telefone'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="cpf">

                    <span><strong>CPF:</strong> </span>
                    <?php
					echo  $_SESSION['cpf'];
					?> 
                </div>

                <div class="underline"></div>

                 <div class="cep">

                    <span><strong>CEP:</strong> </span>
                    <?php
					echo $_SESSION['cep'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="nSegu">

                    <span><strong>Numero de segurança:</strong> </span>
                    <?php
					echo  $_SESSION['numeroSeguranca'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="alergia">

                    <span><strong>Alergia:</strong> </span>
                    <?php
					echo $_SESSION['alergia'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="tipoS">

                    <span><strong>Tipo Sanguineo:</strong> </span>
                    <?php
					echo $_SESSION['sangue'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="pcd"> 
                    <span><strong>PCD:</strong></span>
                    <?php 
					echo $_SESSION['pcd'];
					?> 
                </div>

                <div class="underline"></div>

                <div class="defi">

                    <span><strong>Deficiencia:</strong> </span>
                    <?php
					echo $_SESSION['deficiencia'];
					?> 
                </div>

                <div class="underline"></div>

                <button class="btn">Modificar</button>

            </form>
            
        </div>

        

    </section>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
