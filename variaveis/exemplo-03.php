<?php
/*
 * Tipos de dados básicos
 */

// Strings podem ser criadas com aspas simples ou duplas:
$nome1 = 'Jean';
$nome2 = "Carlos";

// Números inteiros:
$ano = 1995;

// Números de ponto flutuante:
$salario = 5800.55;

// Booleanos:
$bloqueado = false;

/*
 * Tipos de dados compostos
 */

// Array:
$frutas = array('Abacaxi', 'Laranja', 'Manga');
echo $frutas[1]; // => Laranja

// Objeto:
$nascimento = new DateTime();
var_dump($nascimento);

/*
 * Tipos de dados especiais
 */

$arquivo = fopen('exemplo-03.php', 'r');
var_dump($arquivo);

$nulo = null;
var_dump($nulo);
