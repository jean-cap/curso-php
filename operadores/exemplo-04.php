<?php
/*
 * Operadores de comparação
 */

$a = 30.0;
$b = 30;

echo '<h1>Operadores de comparação</h1>';

echo 'Valor inicial de $a = ' . $a . '<br>';
echo 'Valor inicial de $b = ' . $b . '<br>';

echo '<br><br>';

// Maior:
echo 'Maior ($a > $b)';
var_dump($a > $b);

// Menor:
echo 'Menor ($a < $b)';
var_dump($a < $b);

// Maior ou igual:
echo 'Maior ou igual ($a >= $b)';
var_dump($a >= $b);

// Menor ou igual:
echo 'Menor ou igual ($a <= $b)';
var_dump($a <= $b);

// Igual:
echo 'Igual ($a == $b)';
var_dump($a == $b);

// Igual e tipo:
echo 'Igual e tipo de dado ($a ===$b)';
var_dump($a === $b);

// Diferente:
echo 'Diferente ($a != $b)';
var_dump($a != $b);

// Diferente e tipo:
echo 'Diferente e tipo ($a !== $b)';
var_dump($a !== $b);