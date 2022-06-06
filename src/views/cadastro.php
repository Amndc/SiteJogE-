<?php
include("../../BD/conexao.php");
include("../../BD/user/user.php");
session_start();
?>


<!DOCTYPE html>

<head>
    <meta charset='utf-8'>
    
    <title> Cadastre-se </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
    crossorigin="anonymous"></script>
    <link href="../../styles/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
    <script src="../scripts/jquery-3.5.1.min.js"> </script>
    <script src="../scripts/sweetalert2.all.min.js"> </script>
    <link href="../../styles/cadastrar2.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    
</head>
  <body>
  <nav>
        <div class="logo">           
            <a href="index.htm"> <img src="../../images/logoS.png" alt="Jogos Pedagógicos Digitais">
            </a>
        </div>
              <ul class="nav-links">
                <li>
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
    <div class="container">

       <div class="form">

        <h1> Insira seus dados nos campos abaixo:</h1>
        <br>
       
            <form method="POST">

                <h5>Nome completo:</h5>
                <input class="dados" type="text" required name="txtnome" >
                <br>  

                <div class="email">         
                <h5>E-mail:</h5>
                <input  class="txtemail" type="text" required name="txtemail" >
                </div>                  
                <br>

                <div class="idade">
                <h5>Idade:</h5>
                <input class="txtidade" type="number" required name="txtidade" >
                </div>     
                <br>    

                <h5> senha: </h5>
                <div class="visu"> <input class="dados" type="password" name="txtsenha" id="senha">
                <span class="spa"> <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i> </span> 
                <br> 
                </div>       
                
                <h5> Confirmar senha: </h5>
                <div class="visua2"><input class="dados" type="password" name="txtCsenha" id="Csenha">
                <span class="spa"> <i class="fa fa-eye" aria-hidden="true" id="eye2" onclick="toggle2()"></i> </span> 
                <br>
                </div> 
                
                <h5> Seu RA: </h5>
                <div class="ra"> 
                    <input class="txtra" type="number" name="txtra" require >
                </div>
                <input class=" btn" type="submit" name="btncadastrar" value="Cadastrar">             
            </form>

            <p> Já possui uma conta? <a href="login.php"> Clique aqui </a> para acessar. </p>           

        </div>
    </div>
    
    <?php
    if ($_POST) {
        
        $nome = $_POST['txtnome'];
        $idade = $_POST['txtidade'];            
        $email = $_POST['txtemail'];
        $senha = $_POST['txtsenha'];
        $Csenha = $_POST['txtCsenha'];
        $ra = $_POST['txtra'];
        if(ValidaEmail($email)){
        if($Csenha == $senha){
            
            if (cadastrarUser($conexao, $nome, $idade, $email, $senha,$ra)) 
            { 
                ?>
                <script>
                Swal.fire({
                    title: 'Sucesso!',
                    text: 'Cadastro realizado com sucesso! Faça o seu login.',
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
         <?php } 
        }
        
        else if($Csenha != $senha){  
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
            {    
             ?>
                  <script>
                Swal.fire({
                    title: 'Email inválido!',
                    text: 'Digite um email de verdade!',
                    icon: 'error',
                    confirmButtonText: 'Ok!'
                  });
                  </script>
         <?php
         }
    }?>          
            
       
    <div id="particles-js"> </div>
    <script type="text/javascript" src="../scripts/particles.js"> </script>
    <script type="text/javascript" src="../scripts/app.js"></script>   
    <script type="text/javascript" src='../scripts/nav.js'></script>
    <script type="text/javascript" src='../scripts/eye.js'></script>

    
</body>
</html>