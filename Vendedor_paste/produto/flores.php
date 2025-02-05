<?php

include '../DB/connect.php';

if(isset($_POST['cadastrar'])){

    $nome=$_POST['nome'];
    $preco=$_POST['preco'];
    $qtd=$_POST['qtd'];


    

    $sql= "INSERT INTO flor (nome,preco,qtd) VALUES('$nome','$preco','$qtd')";

    

    $result = mysqli_query($conn,$sql);

    if($result){
        // echo "Dados cadastrados com sucesso!!";
        header('location:listar_flor.php');
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
    <input type="text" class="form-control" placeholder="Digite o nome do produto" name="nome" autocomplete="off">
    </div>
<div class="mb-3">
    <label>Preço</label>
    <input type="number" min="0" step="0.01" class="form-control" placeholder="Digite o valor" name="preco"  autocomplete="off">
    </div>
<div class="mb-3">
    <label>Quantidade</label>
    <input  type="number" min="1" step="1" class="form-control" placeholder="Digite a quantidade" name="qtd"  autocomplete="off">
    </div>
<div class="mb-3">
    <label class="form-label">Imagem do Produto:</label>
    <input type="file" class="form-control" name="imagemProduto" accept="image/*" required>
</div>




    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
    </form>

    
</body>
</html>