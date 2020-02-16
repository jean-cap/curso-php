<?php

$conn = new PDO('mysql:dbname=dbphp7;host=localhost', 'root', '3728');

$id = 5;
$login = 'bebezao';
$senha = '741852';

$query = 'UPDATE tb_usuarios SET deslogin = :DESLOGIN, dessenha = :DESSENHA WHERE idusuario = :ID';

$stmt = $conn->prepare($query);

$stmt->bindParam(':DESLOGIN', $login);
$stmt->bindParam(':DESSENHA', $senha);
$stmt->bindParam(':ID', $id);

$result = $stmt->execute();

var_dump($result);

if ($result) {
    echo 'Registro alterado com sucesso.';
}