
<?php
session_start();
$usuariologado = $_SESSION['usuariologado'];

$pegandoID= $_GET['id'];
       if (empty($usuariologado)) {
            header("Location: login.php");
        } else {
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset='utf-8'>
    
            <title> Conta </title>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link rel='stylesheet' type='text/css' media='screen' href='../../styles/dash.css'>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    
        </head>
        <body>
            
          <nav>
        <div class="logo">
           
            <a href="index.htm"> <img src="../../images/logoS.png" alt="Jogos Pedagógicos Digitais">
            </a>
        </div>
        <ul class="nav-links"> 
                    <a href="#"> Informações</a>
                 </li>

                 <li>
                    <a href="#"> Cadastre-se</a>
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
                    <a href="dash.php?id=<?=$pegandoID?>" class="nav-link2">
                        <img src="../../images/backward-solid.svg" alt="Abrir">
                        <span class="link-text"> Menu </span>
                    </a>
                </li>

            <li class="nav-item">  
                <a href="perfil.php?id=<?=$pegandoID?>" class="nav-link2">
                    <img src="../../images/user-solid.svg" alt="usuario">
                    <span class="link-text"> Perfil </span>
                </a>
            </li>
          
            <li class="nav-item">
                <a href="regras.php?id=<?=$pegandoID?>" class="nav-link2">
                    <img src="../../images/file-contract-solid.svg" alt="Regras">
                    <span class="link-text"> Regras </span>
                    
                </a>
            </li>

            <li class="nav-item">
                <a href="usuario.php?id=<?=$pegandoID?>" class="nav-link2">
                    <img src="../../images/address-card-solid.svg" alt="Jogador">
                    <span class="link-text"> Jogador </span>
                </a>
            </li>

           
            <li class="nav-item">
                <a href="#" class="nav-link2">
                    <img src="../../images/sign-out-alt-solid.svg" alt="Jogador">
                    <span class="link-text"> Sair </span>
                </a>
            </li>       
</ul>
</div>
            
<main> aaaaaaaaaaaaaaaaaaaaaaa
    <p>aaaaaaaaaaaaaaaaaaaaa
    <br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaa</br></p></main>
    <?php } ?>
            <script src='../scripts/nav.js'></script>
        </body>
    </html>
        
