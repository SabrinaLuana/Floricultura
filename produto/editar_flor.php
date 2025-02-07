<?php
include '../DB/connect.php';

$id_flor=$_GET['editarid'];

$sql="SELECT * FROM `flor` where id_flor=$id_flor";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

$nome=$row['nome'];
$preco=$row['preco'];
$qtd=$row['qtd'];






if(isset($_POST['editar'])){

    $nome=$$_POST['nome'];
    $preco=$_POST['preco'];
    $qtd=$_POST['qtd'];
 


    $sql= "UPDATE `flor` set nome='$nome',preco='$preco',qtd='$qtd' where id_flor=$id_flor";

    

    $result = mysqli_query($conn,$sql);

    if($result){
        // echo "Dados atualizados com sucesso!!";
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
    <link rel="stylesheet" href="index.css">

    

    <title>Editar Flor</title>
</head>

<body>
    <div class="container my-5">

    <form method="post">

<div class="mb-3">
    <label>Nome</label>
    <input type="text" class="form-control" placeholder="Digite o nome do produto" name="nome" autocomplete="off" value=<?php echo $nome;?>>
    </div>
<div class="mb-3">
    <label>Preço</label>
    <input type="number" min="0" step="0.01" class="form-control" placeholder="Digite o valor" name="preco"  autocomplete="off" value=<?php echo $preco;?>>
    </div>


<div class="mb-3">
    <label>Quantidade</label>
    <input  type="number" min="1" step="1" class="form-control" placeholder="Digite a quantidade" name="qtd"  autocomplete="off" value=<?php echo $qtd;?>>
    </div>



    <button type="submit" class="btn btn-primary" name="editar">Editar</button>
    </form>

    
</body>
</html>