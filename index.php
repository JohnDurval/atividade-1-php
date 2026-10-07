<?php include "./data/produtos.php"?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>Document</title>
    
</head>

<body>

    <?php include "./view/header.php"?>

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

        <?php include "./view/footer.php"?>

</body>

</html>