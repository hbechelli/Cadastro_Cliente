<?php
require_once "config.php";
require_once "cadastro.html";

if(@$_GET['go'] == 'enviar'){
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $endereco=$_POST['endereco'];
    $numero=$_POST['numero'];
    $bairro=$_POST['bairro'];
    $cep=$_POST['cep'];
    $positivo=$_POST['positivo'];
    $negativo=$_POST['negativo'];
    
if (isset($_POST['positivo'])){
echo $_POST['positivo'];
}
    if (isset($_POST['negativo'])){
echo $_POST['negativo'];
}
    if(empty($nome)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
    }elseif(empty($email)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
    }elseif(empty($telefone)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
    }elseif(empty($endereco)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
    }elseif(empty($numero)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
    }elseif(empty($bairro)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
    }elseif(empty($cep)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
    }else{
        $query1 = mysql_num_rows(mysql_query ("SELECT * FROM usuarios WHERE usuarios = '$email'"));
        if($query1 == 1){
            echo "<script>alert('Usuário já cadastrado.'); history.back();</script>";
        }else{
            mysql_query(INSERT INTO `usuarios` (nome, email, telefone, endereco, numero, bairro, cep, positivo, negativo) VALUES ('$nome', '$email', '$telefone', '$endereco', '$numero', '$bairro', '$cep', '$positivo', '$negativo'));
            echo"<scrip>alert ('Cadastro efetuado com sucesso!');</script>";
            header ("location: cadastro.php");
        }
                
    }   
    
}
?>
