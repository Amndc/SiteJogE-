<?php
session_start();
include("../../BD/conexao.php");
include ("../../BD/user/user.php");





if(!empty($_GET['id'])) {
    $idUser2 = $_GET['id'];
    $idUser = intval($idUser2);
    $usuario = usuarioPorID($conexao, $idUser);
}

$usuariologado = $_SESSION['usuariologado'];

$listaImagem = listarImagem($conexao, $idUser);
     

if (empty($usuariologado)) {
            header("Location: login.php");
        }
          
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset='utf-8'>
    
            <title> Perfil </title>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link rel='stylesheet' type='text/css' media='screen' href='../../styles/perfil8.css'>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
            <script src="../scripts/sweetalert2.all.min.js"> </script>
            <script src="../scripts/jquery-3.5.1.min.js"> </script>
        </head>
        <body>
            
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
                    <a href="dash.php?id=<?=$idUser2?>" class="nav-link2">
                        <img src="../../images/backward-solid.svg" alt="Abrir">
                        <span class="link-text"> Menu </span>
                    </a>
                </li>

            <li class="nav-item">  
                <a href="perfil.php?id=<?= $idUser2?>" class="nav-link2">
                    <img src="../../images/user-solid.svg" alt="usuario">
                    <span class="link-text"> Perfil </span>
                </a>
            </li>
          
            <li class="nav-item">
                <a href="regras.php?id=<?= $idUser2?>" class="nav-link2">
                    <img src="../../images/file-contract-solid.svg" alt="Regras">
                    <span class="link-text"> Regras </span>
                </a>
            </li>

            <li class="nav-item">
                <a href="usuario.php?id=<?= $idUser2?>" class="nav-link2">
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
            
<div class="container">
       <div class="form">
        <br>      
            <form method="POST">
                                 
            
               <input class="dados"  name="txtnome" value="<?php echo  $usuario['tb_usuario_nome_c']; ?>"  type="text" name="txtnome" >
            
               <BR>
     

                <div class="email">         
               
                <input  class="txtemail" value="<?php echo  $usuario['tb_usuario_email']; ?>" type="text"  name="txtemail" >
                </div>             
               
                <div class="idade">
                <input class="txtidade" value="<?php echo  $usuario ['tb_usuario_idade']; ?>" type="number"  name="txtidade">
                </div>
                <br>    
                
                <input class="btn" type="submit" name="btncadastrar" value="Alterar">     
                
                
                
                <div class="log">
        <button name="btn1" type="submit"><img class="btn1" id="btn1" src="../../images/icons/bebe.svg"></button>
        <button name="btn2" type="submit"><img class="btn2" id="btn2" src="../../images/icons/garoto.svg"></button>
        <button name="btn3" type="submit"><img class="btn3" id="btn3" src="../../images/icons/menina.svg"></button>
        <button name="btn4" type="submit"><img class="btn4" id="btn4" src="../../images/icons/mulher.svg"></button>
        <button name="btn5" type="submit"><img class="btn5" id="btn5" src="../../images/icons/o-saco-da-escola.svg"></button>
        
    </div>
                
                
     </form>
    </div>
</div>



               

   
        
    <?php
        if(isset($_POST['btn1'])){
            $img = "../../images/icons/bebe.svg";
            pegarImagem($conexao, $img, $idUser); 
            $userImg = $img;
            ?>
            <meta http-equiv="refresh" content="0.8; url=http://localhost//siteTcc/siteTcc/src/views/perfil.php?id=<?=$idUser2?>">
            
        
        
        <?php
            }
        else if(isset($_POST['btn2'])){
            $img = "../../images/icons/garoto.svg";
            pegarImagem($conexao, $img, $idUser);?> 
                 <meta http-equiv="refresh" content="0.8; url=http://localhost/siteTcc/siteTcc/src/views/perfil.php?id=<?=$idUser2?>">
                
                <?php
        }
        else if(isset($_POST['btn3'])){
            $img = "../../images/icons/menina.svg";
            pegarImagem($conexao, $img, $idUser);?> 
                
                 <meta http-equiv="refresh" content="0.8; url=http://localhost/siteTcc/siteTcc/src/views/perfil.php?id=<?=$idUser2?>">
                <?php
        }
        else if(isset($_POST['btn4'])){
             $img = "../../images/icons/mulher.svg";
            pegarImagem($conexao, $img, $idUser)?> 
                 <meta http-equiv="refresh" content="0.8; url=http://localhost/siteTcc/siteTcc/src/views/perfil.php?id=<?=$idUser2?>">
                
                <?php
        }
        else if(isset($_POST['btn5'])){
           $img = "../../images/icons/o-sacosa-escola.svg";
            pegarImagem($conexao, $img, $idUser);?> 
                
                 <meta http-equiv="refresh" content="0.8; url=http://localhost/siteTcc/siteTcc/src/views/perfil.php?id=<?=$idUser2?>">
                <?php
        }
        
    
        else if (isset($_POST['btncadastrar'])) {
            $nome = $_POST['txtnome'];
            $idade = $_POST['txtidade'];
            $email = $_POST['txtemail'];           
?>
        <script>
            locastyle.forms.formDisable('#form', true).
        </script>
         
      <?php
        if(ValidaEmail($email)){
            if (alterarUser($conexao, $nome, $email, $idade, $idUser)) 
            {
              
                ?>
        
                   <script>
                    Swal.fire({
                    title: 'Sucesso!',
                    text: 'Seus dados foram alterados com sucesso.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                  })
                </script>
                    <meta http-equiv="refresh" content="0.8; url=http://localhost//siteTcc/siteTcc/src/views/perfil.php?id=<?=$idUser2?>">
                <?php 
                
        }
                 else 
            {
                ?>
                <script>
                Swal.fire({
                    title: 'Algo deu Errado!',
                    text: 'Confira os dados inseridos e tente novamente!',
                    icon: 'error',
                    confirmButtonText: 'Ok!'
                  });
                  </script>
                  <?php
        }  
        }
       else{
           ?>
           <script>
                Swal.fire({
                    title: 'Email Inválido!',
                    text: 'Digite um email válido!',
                    icon: 'error',
                    confirmButtonText: 'Ok!'
                  });
                  </script>
                  
                  
     <?php  }
        }
        
  ?> 
                  
                   
            <?php foreach($listaImagem as $imagem){ ?>
                  
                  
                  
                <div class="user">
        <img class="img" src="../../images/perfil/<?php echo $imagem['tb_usuario_imagem'] ?>">
   </div>
                  
                  
                  
   <?php }?>
        <script src='../scripts/nav.js'></script>

        </body>
    </html>