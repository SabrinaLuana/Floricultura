<?php
include '../DB/connect.php';

$id_cli=$_GET['editarid'];

$sql="SELECT * FROM `cliente` where id_cli=$id_cli";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

$nome=$row['nome'];
$cpf=$row['cpf'];
$email=$row['email'];
$fone=$row['fone'];
$endereco=$row['endereco'];





if(isset($_POST['editar'])){

    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $email=$_POST['email'];
    $fone=$_POST['fone'];
    $endereco=$_POST['endereco'];
    $senha=$_POST['senha'];
    $conf_senha=$_POST['conf_senha'];


    $sql= "UPDATE `cliente` set nome='$nome',cpf='$cpf',email='$email',fone='$fone', endereco='$endereco' where id_cli=$id_cli";

    

    $result = mysqli_query($conn,$sql);

    if($result){
        // echo "Dados atualizados com sucesso!!";
        header('location:listar_cli.php');
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

    <title>Editar</title>
</head>

<body>
    <div class="container my-5">

    <form method="post">

<div class="mb-3">
    <label>Nome</label>
    <input type="text" class="form-control" placeholder="Digite seu Nome" name="nome" autocomplete="off" value=<?php echo $nome;?>>
    </div>
<div class="mb-3">
    <label>CPF</label>
    <input type="text" class="form-control" placeholder="Digite seu CPF" name="cpf"  autocomplete="off" value=<?php echo $cpf;?>>
    </div>
<div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Digite seu Email" name="email"  autocomplete="off" value=<?php echo $email;?>>
    </div>
<div class="mb-3">
    <label>Telefone</label>
    <input type="text" class="form-control" placeholder="Digite seu Telefone" name="fone"  autocomplete="off" value=<?php echo $fone;?>>
    </div>
<div class="mb-3">
    <label>Endereço</label>
    <input type="text" class="form-control" placeholder="Digite seu Endereço" name="endereco" autocomplete="off" value=<?php echo $endereco;?>>
    </div>

<div class="mb-3">
    <label>Senha</label>
    <input type="password" class="form-control" placeholder="Digite sua Senha" name="senha"  autocomplete="off">
    </div>

<div class="mb-3">
    <label>Confirmar Senha</label>
    <input type="password" class="form-control" placeholder="Confirmar Senha" name="conf_senha"  autocomplete="off">
    </div>







    <button type="submit" class="btn btn-primary" name="editar">Editar</button>
    </form>

    
</body>
</html>