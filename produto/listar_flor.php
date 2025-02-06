<?php
include '../DB/connect.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Flor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    
</head>



<body>
    <div class="container">
            <button class="btn btn-primary my-5"><a href="flores.php" class="text-white">Adicionar flor</a>
            

            </button>
            <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
    <?php

        $sql ="SELECT * FROM flor";

        $result=mysqli_query($conn,$sql);

        if($result){

            while($row=mysqli_fetch_assoc($result)){
                $id_flor=$row['id_flor'];
                $nome=$row['nome'];
                $preco=$row['preco'];
                $qtd=$row['qtd'];




                echo ' <tr>
                <th scope="row">'.$id_flor.'</th>
                <td>'.$nome.'</td>
                <td>'.$preco.'</td>
                <td>'.$qtd.'</td>

                <td>
                    <button class="btn btn-primary">
                        <a href="editar_flor.php?editarid='.$id_flor.'" class="text-white">Editar</a>
                    </button>

                    <button class="btn btn-danger">
                        <a href="deletar_flor.php?deleteid='.$id_flor.'" class="text-white">Deletar</a>
                    </button>
                </td>
                </tr>';
            }
        }

    ?>


    </tbody>
    </table>


    </div>
</body>
</html>
