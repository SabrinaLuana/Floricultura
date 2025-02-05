<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nomeProduto"];
    $preco = $_POST["precoProduto"];
    $descricao = $_POST["descricaoProduto"];

    // Lida com o upload da imagem
    if (isset($_FILES["imagemProduto"])) {
        $imagemNome = $_FILES["imagemProduto"]["name"];
        $imagemTmp = $_FILES["imagemProduto"]["tmp_name"];
        $destino = "uploads/" . $imagemNome;

        // Move a imagem para a pasta "uploads"
        if (move_uploaded_file($imagemTmp, $destino)) {
            echo "<div class='container mt-5'>";
            echo "<div class='card' style='width: 18rem;'>";
            echo "<img src='$destino' class='card-img-top' alt='Imagem do Produto'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>$nome</h5>";
            echo "<p class='card-text'>$descricao</p>";
            echo "<p class='fw-bold'>Preço: R$ " . number_format($preco, 2, ',', '.') . "</p>";
            echo "</div></div></div>";
        } else {
            echo "<p>Erro ao enviar a imagem.</p>";
        }
    }
}
?>
