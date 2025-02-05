<?php
include '../DB/connect.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    
</head>



<body>
    <div class="container">
            <button class="btn btn-primary my-5"><a href="cliente.php" class="text-white">Adicionar cliente</a>
            

            </button>
            <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Endereço</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
    <?php

        $sql ="SELECT * FROM cliente";

        $result=mysqli_query($conn,$sql);

        if($result){

            while($row=mysqli_fetch_assoc($result)){
                $id_cli=$row['id_cli'];
                $nome=$row['nome'];
                $cpf=$row['cpf'];
                $email=$row['email'];
                $fone=$row['fone'];
                $endereco=$row['endereco'];


                echo ' <tr>
                <th scope="row">'.$id_cli.'</th>
                <td>'.$nome.'</td>
                <td>'.$cpf.'</td>
                <td>'.$email.'</td>
                <td>'.$fone.'</td>
                <td>'.$endereco.'</td>

                <td>
                    <button class="btn btn-primary">
                        <a href="editar_cli.php?editarid='.$id_cli.'" class="text-white">Editar</a>
                    </button>

                    <button class="btn btn-danger">
                        <a href="deletar_cli.php?deleteid='.$id_cli.'" class="text-white">Deletar</a>
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
