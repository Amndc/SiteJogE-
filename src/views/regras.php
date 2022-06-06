<?php
$pegandoID= $_GET['id'];

?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset='utf-8'>
    
            <title> Regras </title>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link rel='stylesheet' type='text/css' media='screen' href='../../styles/regras2.css'>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
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
                    <a href="info.html"> Informações</a>
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
            
<main class="texto"> 
    
        <div class="titulo">
    <h1 >Regras</h1>
    </div>
    <div class="infor">
    <h2>REGRAS REFERENTES A ÁREA TECNICA DA PLATAFORMA</h2>
    <ul class="re">
    <li> O aluno deverá possuir apenas uma conta para ter acesso a nossa plataforma; </li>
    <li> O aluno não deverá realizar o login na plataforma utilizando o e-mail e senha de outro estudante;  </li>
    <li>   Caso o aluno ou responsável identifique algum problema na plataforma ou dentro de algum dos jogos, ele deverá contactar via e-mail os desenvolvedores do projeto, para que estes realizem as devidas manutenções; </li>
    <li>  O responsável pelo aluno, seja no ambiente domiciliar ou escolar, sempre deverá acompanhá-lo e supervisioná-lo enquanto este se encontrar na plataforma, realizando as atividades propostas;  </li>
    <li>  Após a finalização das atividades, os alunos deverão sair de suas contas para que assim, outros estudantes também possam utilizar a plataforma através de seu próprio login;  </li>
    <li> 	Em caso de dúvida quanto ao funcionamento da plataforma, o responsável poderá entrar em contato via e-mail para relatar suas dúvidas aos desenvolvedores; </li>
</ul>
    </div>
    <div class="regra">
    <h2>REGRAS REFERENTES A ÁREA CONCEITUAL DA PLATAFORMA:</h2>
    <ul class="gra">
        <li>  	O profissional que se encontra na sala de aula, sempre deverá introduzir o assunto que será abordado nos jogos, antes de auxiliar os alunos em sua resolução; </li>
        <li>  	Os alunos deverão realizar as atividades de seu respectivo ano escolar;  </li>
        <li>    Os alunos deverão utilizar a plataforma como um meio de auxílio para os temas que são abordados dentro de seu ano escolar, lembrando que a plataforma não irá substituir a explicação do profissional presente na sala; </li>
        <li>   	O professor presente em sala de aula terá total controle sobre a plataforma, podendo optar por abordar os assuntos presentes nesta em uma ordem diferente da que foi proposta pelos desenvolvedores dos jogos.   </li>
        </ul>
    </div>
</main>
  
            <script src='../scripts/nav.js'></script>
        </body>
    </html>