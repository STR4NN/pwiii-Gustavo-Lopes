<?php
include 'conexao.php';

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$email = $_POST['email'];
$email2 = $_POST['email2'];

$sql = "INSERT INTO usuarios (nome, login, senha, email, email2) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $nome, $login, $senha, $email, $email2);
$stmt->execute();

echo "Usuário cadastrado com sucesso.";
?>