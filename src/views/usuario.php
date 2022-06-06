<?php
include("../../BD/conexao.php");
include("../../BD/user/user.php");

$idUser = $_GET['id'];

session_start();
$usuariologado = $_SESSION['usuariologado'];

       if (empty($usuariologado)) {
            header("Location: login.php");
        } else 
        {
        }
$listaImagem = listarImagem($conexao, $idUser);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>

        <title> Usuario </title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='../../styles/usuario3.css'>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://getbootstrap.com.br/docs/4.1/components/progress/" rel="stylesheet" >
        <script src="../scripts/sweetalert2.all.min.js"> </script>
    </head>
    <body>

        <div class="gradient"> </div>
        
      <nav>
    <div class="logo">
       
        <a href="index.htm"> <img src="../../images/logoS.png" alt="Jogos Pedagógicos Digitais">
        </a>
    </div>
    <ul class="nav-links"> 
                <a href="info.htm"> Informações</a>
             </li>

             <li>
                <a href="cadastro.php"> Cadastre-se</a>
             </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
</nav>
     
<div class="navbar">
    <ul class="navbar-nav">

            <li class="menu">
                <a href="dash.php?id=<?=$idUser?>" class="nav-link2">
                    <img src="../../images/backward-solid.svg" alt="Abrir">
                    <span class="link-text"> Menu </span>
                </a>
            </li>

        <li class="nav-item">  
            <a href="perfil.php?id=<?=$idUser?>" class="nav-link2">
                <img src="../../images/user-solid.svg" alt="usuario">
                <span class="link-text"> Perfil </span>
            </a>
        </li>
      
        <li class="nav-item">
            <a href="regras.php?id=<?=$idUser?>" class="nav-link2">
                <img src="../../images/file-contract-solid.svg" alt="Regras">
                <span class="link-text"> Regras </span>
            </a>
        </li>

        <li class="nav-item">
            <a href="usuario.php?id=<?=$idUser?>" class="nav-link2">
                <img src="../../images/address-card-solid.svg" alt="Jogador">
                <span class="link-text"> Jogador </span>
            </a>
        </li>

       
        <li class="nav-item">
            <a href="#" class="nav-link2">
                <img src="../../images/sign-out-alt-solid.svg" alt="Jogador">
                <span class="link-text"> <button onclick="myFunction()">Sair</button>
                    <script>
                        function myFunction() {
                        Swal.fire({
                            title: 'SAIR',
                            text: 'Você realmente deseja sair?',
                            icon: 'error',
                            showCancelButton: true,
                            confirmButtonText: 'SIM!',
                          }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace("file:///C:/wamp/www/siteTcc/siteTcc/src/views/index.htm");
                } 
                });                
                          
                         } 
                </script>
                </span>
            </a>
        </li>       
</ul>
</div>
<div class="player">
    <?php foreach($listaImagem as $imagem){ ?>
        <img class="img" src="../../images/perfil/<?php echo $imagem['tb_usuario_imagem'] ?>">
        <?php }?>
</div>

   <div class="form">
    <br>


    </div>
    <div class="infojogador">
        <div class="regra">
         <h5 >Fases Concluidas:</h5>
        </div>
        <div class="premios">
         <h5 >Total de Premios:</h5>
        </div>
         <div class="pontuacao">
        <h5 >Pontuação:</h5>
        </div>  
        <div class="progre">
            <h5 >Progresso:</h5>
        </div>
        <div class="progress ">
            
        </div>
            
    </div>
    
   
        <script src='../scripts/nav.js'></script>

    </body>
</html>