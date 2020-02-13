<?php
/*
 * Variáveis pré-definidas (super globais)
 */

$nome = $_GET['nome'];

// Conversão para inteiro:
$idade = (int) $_GET['idade'];

var_dump($nome);
var_dump($idade);

// Pegando o IP:
$ip = $_SERVER['REMOTE_ADDR'];

var_dump($ip);
