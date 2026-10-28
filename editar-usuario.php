<?php
require "./data/conexao.php";
$id = $_GET["id"] ?? 0;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    if ($nome == "" || $email == "" || $senha == "") {
        $mensagem_erro = "Preencha todos os campos";
    } else {
        $sql = "UPDATE usuarios SET nome = '$nome' , senha = '$senha' , email = '$email' WHERE id= $id ";
        $conn->query($sql);
        header("Location: listar-usuarios.php");
    }
}

$sql = "SELECT * FROM usuarios WHERE id =$id";
$resultado = $conn->query($sql);
$usuario = $resultado->fetch_object();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/produto.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/editar.css">

    <title>Editar-usuario|Lojinha</title>
</head>

<body>
    <?php include "./view/header.php" ?>
    <div class="editar-container">
        <div class="editar">
            
        <div class="h1-titulo"><h1>EDITAR USUÁRIO</h1></div>
            <form method="POST">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?= $usuario->nome ?>" required>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?= $usuario->email ?>" required>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" value="<?= $usuario->senha ?>" required>
                <div class="edits-btn">
                    <button type="submit">Editar</button>
                    <a href="excluir-usuario.php?id=<?= $usuario->id ?>">Excluir</a>
                </div>
            </form>
        </div>
    </div>
    <?php include "./view/footer.php" ?>
</body>

</html>