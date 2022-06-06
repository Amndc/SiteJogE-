<?php
include("../../BD/conexao.php");
include("../../BD/user/user.php");
session_start();
?>
 
<!DOCTYPE html>
<head>
    <meta charset='utf-8'>
    
    <title> Recuperar senha </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="../../styles/recuperar2.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
    crossorigin="anonymous"></script>
    <link href="../../styles/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
    <script src="../scripts/jquery-3.5.1.min.js"> </script>
    <script src="../scripts/sweetalert2.all.min.js"> </script>

</head>
  <body>
  <nav>
        <div class="logo"> 
           
            <a href="index.htm"> <img src="../../images/logoS.png" alt="Jogos Pedagógicos Digitais">
            </a>
        </div>
        <ul class="nav-links">
                <li>
                    <a href="#"> Informações</a>
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
    <div class="container">
    <div class="form">
           
    <h1 class="a"> Alterar Senha </h1>
            <form method="POST">
                
                <h5> Email:</h5>
                <input class="dados" type="text" name="txtemail" require>
                <br> 
                
                <h5> Seu RA: </h5>
                <div class="ra"> 
                    <input class="dados" type="number" name="txtra" require >
                <br>
                </div>
                
                <h5> Nova senha:</h5>
                <div class="visu"> <input class="dados" type="password" name="txtsenha" id="senha" require>
                <span class="spa"> <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i> </span> 
                <br>   </div>       
                
                <h5> Confirmar senha: </h5>
                <div class="visua2"><input class="dados" type="password" name="txtCsenha" id="Csenha" require>
                <span class="spa"> <i class="fa fa-eye" aria-hidden="true" id="eye2" onclick="toggle2()"></i> </span> 
                </div> 
                <br>         
                <input class="btn"type="submit" name="btncadastrar" value="Alterar">                        
            </form>
        </div>
    </div>
        
         <?php
        if ($_POST) {
           
            $email = $_POST['txtemail'];
            $senha = $_POST['txtsenha'];
            $Csenha = $_POST['txtCsenha']; 
            $ra = $_POST['txtra'];
            
            
            if(verificarConta($conexao, $email, $ra)){
        if( $senha == $Csenha){
            if (recuperarSenha($conexao, $senha, $email)) 
            {
                ?>
                   <script>
                  Swal.fire({
                    title: 'Sucesso!',
                    text: 'Sua senha foi alterada com sucesso! Faça o seu login.',
                    icon: 'success',
                    confirmButtonText: 'Legal!'
                  }).then((result) => {

                if (result.isConfirmed) {
                    window.location.replace("http://localhost/siteTcc/src/views/login.php");
                } 
                });                
                </script>

                <?php              
            }
        }            
            else 
            {
                ?>
                <script>
                Swal.fire({
                    title: 'Atenção!',
                    text: 'As senhas não são iguais!',
                    icon: 'warning',
                    confirmButtonText: 'Ok!'
                  });
                  </script>
         <?php
            } 
        }
        else
        { ?>
            <script>
            Swal.fire({
                title: 'Atenção!',
                text: 'Dados inseridos incorretamente!',
                icon: 'error',
                confirmButtonText: 'Ok!'
              });
              </script> 
              <?php
        }
        }                                             
  ?> 
       <div id="particles-js"> </div>
        <script type="text/javascript" src="../scripts/particles.js"> </script>
        <script type="text/javascript" src="../scripts/app.js"></script>
        <script src='../scripts/nav.js'></script>
        <script type="text/javascript" src='../scripts/eye.js'></script>
  
    </body>
</html>
