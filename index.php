<?php include "./data/produtos.php"?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
    
</head>

<body>

    <div class="produtos">
        <?php foreach ($produtos as $produto): ?>

        <div class="produto">
            <img src="<?= $produto ->imagem ?>" alt="">
            <h2><?= $produto ->nome ?> </h2>
            <p><?= $produto ->descricao ?></p>
            <a href="produto.php?id=<?= $produto ->id ?>">ver mais</a>
        </div>

        <?php endforeach; ?>
    </div>

</body>

</html>