<?php

$conn = new mysqli('127.0.0.1', 'root', '3728', 'dbphp7');

if ($conn->connect_errno) {
    echo 'Erro: ' . $conn->connect_errno;
    exit();
}

$usuarios = array();
$result = $conn->query('SELECT * FROM tb_usuarios ORDER BY deslogin');

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    array_push($usuarios, $row);
}

echo json_encode($usuarios);
