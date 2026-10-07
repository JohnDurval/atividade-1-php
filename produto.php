<?php include "./data/produtos.php";
$id = $_GET['id'];

$produtoSelecionado = null;

for ($i = 0; $id < count($produtos); $i++) {
    if ($produtos[$i]->id == $id) {
        $produtoSelecionado = $produtos[$i];
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Lojinha | <?= $produtoSelecionado ? $produtoSelecionado->nome : "Produto não encotrado" ?>
    </title>
    <link rel="stylesheet" href="./css/produto.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

<body>

    <?php include "./view/header.php" ?>
    <div class="produtoContainer">
        <div class="imgProduto"><img src="<?= $produtoSelecionado->imagem ?>" alt=""></div>


        <div class="infoProduto">
            <h1><?= $produtoSelecionado->nome ?></h1>
            <h2>R$<?= $produtoSelecionado->preco ?>,00</h2>
            <h3><span>Estoque:</span><?= $produtoSelecionado->estoque ?></h3>
            <p><?= $produtoSelecionado->descricao ?></p>
            <h4>Categoria: <span><?= $produtoSelecionado->categoria ?></span></h4>
            <h5>Marca: <span><?= $produtoSelecionado->marca ?></span></h5>
        </div>

    </div>

    <?php include "./view/footer.php" ?>

</body>

</html>