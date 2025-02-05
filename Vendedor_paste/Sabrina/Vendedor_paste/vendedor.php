<?php

include '../DB/connect.php';

if(isset($_POST['cadastrar'])){

    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $email=$_POST['email'];
    $fone=$_POST['fone'];
    $senha=$_POST['senha'];
    $conf_senha=$_POST['conf_senha'];


    $sql= "INSERT INTO vendedor (nome,cpf,email,fone) VALUES('$nome','$cpf','$email','$fone')";

    

    $result = mysqli_query($conn,$sql);

    if($result){
        // echo "Dados cadastrados com sucesso!!";
        header('location:listar_vend.php');
    }else{
        die(mysqli_error($conn));

    }
}


?>







<!-- HTML -->

<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>Floricultura</title>
</head>

<body>
    <div class="container my-5">

    <form method="post">

<div class="mb-3">
    <label>Nome</label>
    <input type="text" class="form-control" placeholder="Digite seu Nome" name="nome" autocomplete="off">
    </div>
<div class="mb-3">
    <label>CPF</label>
    <input type="text" class="form-control" placeholder="Digite seu CPF" name="cpf"  autocomplete="off">
    </div>
<div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Digite seu Email" name="email"  autocomplete="off">
    </div>
<div class="mb-3">
    <label>Telefone</label>
    <input type="text" class="form-control" placeholder="Digite seu Telefone" name="fone"  autocomplete="off">
    </div>

<div class="mb-3">
    <label>Senha</label>
    <input type="password" class="form-control" placeholder="Digite sua Senha" name="senha"  autocomplete="off">
    </div>

<div class="mb-3">
    <label>Confirmar Senha</label>
    <input type="password" class="form-control" placeholder="Confirmar Senha" name="conf_senha"  autocomplete="off">
    </div>







    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
    </form>

    
</body>
</html>