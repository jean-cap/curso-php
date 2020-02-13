<?php
/*
 * Precedência de Operadores
 * https://www.php.net/manual/pt_BR/language.operators.precedence.php
 */
echo '10 + 3 / 2 = ';
$resultado = 10 + 3 / 2;

echo $resultado; // => 11.5

echo '<hr>';

echo '(10 + 3) / 2 = ';
$resultado = (10 + 3) / 2;

echo $resultado; // => 6.5

echo '<hr>';

echo '(10 + 3) / 2 > 5 && 10 + 5 < 3';
$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;

var_dump($resultado);

echo '(10 + 3) / 2 > 5 || 10 + 5 < 3';
$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;

var_dump($resultado);