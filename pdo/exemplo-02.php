<?php

$conn = new PDO('mysql:dbname=dbphp7;host=localhost', 'root', '3728');

$stmt = $conn->prepare(
    'INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:DSLOGIN, :DSSENHA)'
);

$login = 'daniela';
$senha = '852369';

$stmt->bindParam(':DSLOGIN', $login);
$stmt->bindParam(':DSSENHA', $senha);

$result = $stmt->execute();

if($result) {
    echo 'Registro inserido com sucesso!';
}
