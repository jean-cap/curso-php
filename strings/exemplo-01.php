<?php
/*
 * Strings
 */

// As strings podem ser declaradas com aspas simples ou duplas:
$nome1 = "Jean";
$nome2 = 'Carlos';

var_dump($nome1); // => 'Jean' (length=4)
var_dump($nome2); // => 'Carlos' (length=6)

// A diferença é que no caso das aspas duplas, o PHP varre a string procurando variáveis e então resolve
echo "Meu nome é $nome1 $nome2!"; // => Meu nome é Jean Carlos!
