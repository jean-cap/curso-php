<?php
$idUsuario = 3;

$conn = new PDO('mysql:dbname=dbphp7;host=localhost', 'root', '3728');

$query = 'DELETE FROM tb_usuarios WHERE idusuario = :ID';

$stmt = $conn->prepare($query);
$stmt->bindParam(':ID', $idUsuario);
$result = $stmt->execute();

if ($result) {
    echo 'Registro excluído com sucesso.';
}