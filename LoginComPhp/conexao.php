<?php
$conn = new mysqli("localhost", "root", "", "sistema_login");
if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}
?>