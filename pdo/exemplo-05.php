<?php

$conn = new PDO('mysql:dbname=dbphp7;host=localhost', 'root', '3728');

$conn->beginTransaction();

$stmt = $conn->prepare(
    'INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:DSLOGIN, :DSSENHA)'
);

$login = 'rosa';
$senha = '357951';

$stmt->bindParam(':DSLOGIN', $login);
$stmt->bindParam(':DSSENHA', $senha);

$result = $stmt->execute();

// $conn->rollBack();
$conn->commit();

if($result) {
    echo 'Registro inserido com sucesso!';
}
