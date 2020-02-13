<?php
/*
 * Operadores de comparação null coalesce (recurso novo do PHP7)
 */
$a = NULL;
$b = NULL;
$c = 10;

// O PHP não considera os valores nulos e pega o primeiro valor não nullo.
echo $a ?? $b ?? $c;