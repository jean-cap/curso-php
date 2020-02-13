<?php
/*
 * Operadores de comparação spaceship (recurso novo do PHP7)
 */

$a = 50;
$b = 35;

echo '<h1>Operador de comparação spaceship (novo no PHP7)</h1>';

echo 'Valor inicial de $a = ' . $a . '<br>';
echo 'Valor inicial de $b = ' . $b . '<br>';

echo '<br>';

echo '($a <=> $b)';
var_dump($a <=> $b); // => 1

$a = 40;
$b = 50;

echo '<br><br>';

echo 'Variável $a agora vale ' . $a . '<br>';
echo 'Variável $b agora vale ' . $b . '<br>';

echo '<br>';

echo '($a <=> $b)';
var_dump($a <=> $b);

echo '<br><br>';

$a = 50;
$b = 50;

echo 'Variável $a agora vale ' . $a . '<br>';
echo 'Variável $b agora vale ' . $b . '<br>';

echo '($a <=> $b)';
var_dump($a <=> $b);