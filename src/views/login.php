<?php
include("../../BD/conexao.php");
include("../../BD/user/user.php");
session_start();

 

?>
 

<!DOCTYPE html>
<head>
    <meta charset='utf-8'>
    
    <title> Login </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <link href="../../styles/login.css" rel="stylesheet" type="text/css"/>   
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
           
    <h1 class="a"> Login </h1>
            <form method="POST">
               
            <h5>E-mail:</h5>
                <input class="dados" type="text" name="txtemail">
                <br>            
                
                <h5> Senha: </h5>
                <div class="visu"> <input class="dados" type="password" name="txtsenha" id="senha">
                <span class="spa"> <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i> </span> 
                <br>   </div>
                <p>
                <br>
                <a href="recuperar.php"><h6>Esqueceu sua senha?</h6></a>
                <input class="btn"type="submit" name="btnentrar" value="Entrar">                        
            </form>
        </div>
    </div>
         

 <?php
    if ($_POST) {
       
        $email = $_POST['txtemail'];
        $senha = $_POST['txtsenha'];
        
        $id = pegandoID($conexao,$email, $senha);
        if (efetuarLogin($conexao, $email, $senha)) 
        {
            foreach($id as $IDS){
                
            $_SESSION['usuariologado'] = $email;             
               header("location: http://localhost/siteTcc/src/views/perfil.php?id=$IDS[tb_usuario_id]");
            }
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
?>
      <div id="particles-js"> </div>
      <script type="text/javascript" src="../scripts/particles.js"> </script>
      <script type="text/javascript" src="../scripts/app.js"></script>
      <script src='../scripts/nav.js'></script>
      <script type="text/javascript" src='../scripts/eye.js'></script>
    
</body>
</html>

