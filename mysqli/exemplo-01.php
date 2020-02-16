<?php
$login = 'jeanonline';
$senha = '222222';

$conn = new mysqli('127.0.0.1', 'root', '3728', 'dbphp7');

if ($conn->connect_errno) {
    echo 'Erro: ' . $conn->connect_errno;
    exit;
}

$stmt = $conn->prepare('INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)');
$stmt->bind_param('ss', $login, $senha);
$stmt->execute();

$login = 'bibi';
$senha = '123456';

$stmt->execute();