<?php
require_once "config.php";
?>
<html>

<head>
<meta http-equiv-"Content-Type" content="text/html, charset-utf-8">
    <title>Sistema de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div id="cadastro">
    <form method="post" action="?go=enviar">
Nome: <input type="text" name="nome" id="nome" class="txt" /> <br /><br />
E-mail: <input type="text" name="email" id="email" class="txt" /> <br /><br />
Telefone: <input type="text" name="telefone" id="telfone" class="txt" /> <br /><br />
Endereço: <input type="text" name="endereco" id="endereco" class="txt" /> <br /><br />
Número: <input type="text" name="numero" id="numero" class="txt" /> <br /><br />
Bairro: <input type="text" name="bairro" id="bairrp" class="txt" /> <br /><br />
Cep: <input type="text" name="cep" id="cep" class="txt" maxlength="9" /> <br /><br />
Ativo <input type="checkbox" name="positivo" value="Sim" />Sim<input type="checkbox" name="negativo" value="Nao" />Não <br /><br />
     
     <input type="submit" name="enviar" value="Enviar" id="btnCad" />
    </form> 
<?php

?>   
</div>
</body>

</html>

<?php
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
            mysql_query("INSERT INTO usuarios (nome, email, telefone, endereco, numero, bairro, cep, positivo, negativo) VALUES ('$nome', '$email', '$telefone', '$endereco', '$numero', '$bairro', '$cep', '$positivo', '$negativo')");
            echo"<scrip>alert ('Cadastro efetuado com sucesso!');</script>";
            header ("location: cadastro.php");
        }
                
    }   
    
}

?>