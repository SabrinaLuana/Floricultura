<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];

    // Verifica se a imagem foi enviada corretamente
    if (isset($_FILES["imagemProduto"]) && $_FILES["imagemProduto"]["error"] == 0) {
        $imagemNome = $_FILES["imagemProduto"]["name"];
        $imagemTmp = $_FILES["imagemProduto"]["tmp_name"];
        $destino = "uploads/" . $imagemNome;

        // Verifica se a pasta 'uploads' existe e cria se não existir
        if (!file_exists('uploads')) {
            mkdir('uploads', 0777, true);
        }

        if (move_uploaded_file($imagemTmp, $destino)) {
            $sql = "INSERT INTO produtos (nome, preco, descricao, imagemProduto) VALUES ('$nome', '$preco', '$descricao', '$destino')";
            
            if ($conn->query($sql) === TRUE) {
                echo "Produto cadastrado com sucesso!";
            } else {
                echo "Erro ao cadastrar: " . $conn->error;
            }
        } else {
            echo "Erro ao fazer upload da imagem.";
        }
    } else {
        echo "Erro: Nenhuma imagem foi enviada.";
    }
}

$conn->close();
?>
