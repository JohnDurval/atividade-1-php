<?php
session_start();
require "./data/conexao.php";
$mensagem_erro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    $sql = "SELECT * FROM usuarios WHERE email = ? and senha = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $usuario = $resultado->fetch_object();

    if ($usuario) {
        $_SESSION["usuario_id"] = $usuario->id;
        $_SESSION["usuario_nome"] = $usuario->nome;
        header("Location: /produtos.php");
        exit;
    } else {
        $mensagem_erro = "Credenciais inválidas";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login|Lojinha</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/produto.css">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <?php include("./view/header.php") ?>
    <div class="login-container">
        <div class="login">

            <div class="h1-titulo">
                <h1>Fazer login</h1>
            </div>
            <form method="POST">
                <input placeholder="Digite seu email" type="email" name="email" id="email" required>
                <input placeholder="Digite sua senha" type="password" name="senha" id="senha" required>
                <div class="edits-btn">
                    <button type="submit">Entrar</button>
                    <a href="cadastro.php?">Não possui conta? <span>Cadastre-se</span></a>
                </div>
            </form>

            <?php if ($mensagem_erro): ?>
                <p class="mensagem-erro"> <?= $mensagem_erro ?> </p>
            <?php endif; ?>
        </div>
    </div>
    <?php include("./view/footer.php") ?>
</body>

</html>