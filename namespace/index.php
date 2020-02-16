<?php
require_once 'config.php';

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome('Jean Carlos');
$cad->setEmail('jean-carlos@gmail.com');
$cad->setSenha('123456');

$cad->registrarVenda();

echo '<br><br>';

echo $cad;