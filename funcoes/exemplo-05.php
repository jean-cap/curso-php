<?php

$a = 10;

function trocaValor($a)
{
    $a = 50;

    return $a;
}

echo $a;

echo '<br>';

echo trocaValor($a);

echo '<br>';

echo $a;