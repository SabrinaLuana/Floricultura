<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <?php
        require_once 'flores.php';
        $f1 = new Flores;
        $f1->nome= "Margarida";
        $f1->preço= 24.00;
        var_dump($f1);

        $f1->adicionar();
    
    ?>
    
</body>
</html>