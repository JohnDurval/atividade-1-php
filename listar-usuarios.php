<?php require "./data/conexao.php";
require "./data/auth.php";
$sql = "Select * from usuarios";
$resultado = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/listar.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/produto.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Listar Usuarios|Lojinha</title>
</head>

<body>
    <?php include "./view/header.php" ?>

    <div class="user-container">
        <div class="usuario-btn">
            <h1>Usuarios</h1>
            <a href="./cadastrar-usuarios.php">Criar um usuário <img src="./imagens/icon-adicionar.png" alt="icon de adicionar"></a>
        </div>
        <div class="usuarios">
            <?php while ($usuario = $resultado->fetch_object()): ?>
                <div class="usuario">
               
                    <div class="foto-user">
                        <img src="./imagens/user-cadastrado.png" alt="">
                        <a class="editar-btn" href="editar-usuario.php?id=<?= $usuario->id?>">Editar usuário</a>
                    </div>
                    
                    <p> <span>id:</span> <?= $usuario->id ?></p>
                    <p><span>email:</span> <?= $usuario->email ?></p>
                    <p><span>nome:</span> <?= $usuario->nome ?></p>
                    <p><span>senha:</span> <?= $usuario->senha ?></p>
                    
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php include "./view/footer.php" ?>
</body>

</html>