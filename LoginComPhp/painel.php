<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: frontend/index.html");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Painel do Usuário</title>
    <link rel="stylesheet" href="frontend/style.css">
</head>
<body>
    <form>
        <h3>Bem-vindo ao Painel</h3>
        <p>Login efetuado com sucesso!</p>
        <a href="logout.php">Sair</a>
    </form>
</body>
</html>