<?php
include 'conexao.php';
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE login = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    if (password_verify($senha, $user['senha'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: painel.php");
    } else {
        echo "Senha inválida.";
    }
} else {
    echo "Usuário não encontrado.";
}
?>