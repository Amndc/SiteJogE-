<?php
//cadastro 
function cadastrarUser ($conexao, $nome, $idade, $email, $senha, $ra){
    
    $sql = "Insert into tb_usuario (tb_usuario_nome_c, tb_usuario_idade, tb_usuario_email, tb_usuario_senha, tb_usuario_ra, tb_usuario_imagem) values ('$nome', '$idade','$email', '$senha', '$ra', 'padrao.jpg')";  
    
   return mysqli_query($conexao, $sql);
   
}

function pegarImagem($conexao,$img,$idUser){
    $sql = "update tb_usuario set tb_usuario_imagem='$img' where tb_usuario_id=$idUser";
 
      return mysqli_query($conexao, $sql);
}


//login 
function efetuarLogin($conexao, $email, $senha){
    
    $query = "select * from tb_usuario"
            . " where tb_usuario_email='{$email}' "
            . "and tb_usuario_senha ='{$senha}'";
    
    $resultado = mysqli_query($conexao, $query);
    $usuariologado = mysqli_fetch_assoc($resultado);    
    
    return $usuariologado;
}

function verificarConta($conexao, $email, $ra){
    $query = "select * from tb_usuario"
            . " where tb_usuario_email='{$email}' "
            . "and tb_usuario_ra ='{$ra}'";
    $resultado = mysqli_query($conexao, $query);
    $contaVeriicada = mysqli_fetch_assoc($resultado);    
    
    return $contaVeriicada;
            
}


function pegandoID($conexao, $email, $senha){
//    $query = "select tb_usuario_id from tb_usuario where tb_usuario_email='{$email}' and tb_usuario_senha='{$senha}'";
//    
//    $resultado = mysqli_query($conexao, $query);
//    $ID = mysqli_fetch_assoc($resultado);   
//    return $ID;
    
    $sql = "select tb_usuario_id from tb_usuario where tb_usuario_email='{$email}' and tb_usuario_senha='{$senha}'";

    $lista = array();

    $resultado = mysqli_query($conexao, $sql);

    while ($id = mysqli_fetch_assoc($resultado)) {

        array_push($lista, $id);
    }
    return $lista;
    
    
}

function recuperarSenha($conexao, $senha, $email){
    
    $sql = "update tb_usuario set tb_usuario_senha = '$senha' where tb_usuario_email = '$email'";
    
     return mysqli_query($conexao, $sql);
}

function alterarUser($conexao, $nome, $email, $idade, $idUser) {
    $sql = "update tb_usuario set tb_usuario_nome_c = '$nome', tb_usuario_email= '$email', tb_usuario_idade= $idade where tb_usuario_id= $idUser";
    
    return mysqli_query($conexao, $sql);
}

function usuarioPorID($conexao, $idUser){
   
    $sql = "SELECT tb_usuario_id, tb_usuario_nome_c, tb_usuario_email, tb_usuario_idade FROM tb_usuario   WHERE tb_usuario_id= $idUser";

      $resultado = mysqli_query($conexao, $sql);
      
      $usuario = mysqli_fetch_assoc($resultado);
      
      return $usuario;

}

function ValidaEmail($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
    
}
function listarImagem($conexao, $idUser) {

    $sql = "SELECT tb_usuario_imagem FROM tb_usuario where tb_usuario_id = $idUser";
                   
                   

    $lista = array();

    $resultado = mysqli_query($conexao, $sql);

    while ($imagem = mysqli_fetch_assoc($resultado)) {

        array_push($lista, $imagem);
    }
    return $lista;
}
