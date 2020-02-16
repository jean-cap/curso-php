<?php

function __autoload($nomeClasse)
{
    var_dump($nomeClasse);
    require_once './' . $nomeClasse . '.php';
}

$carro = new DelRey();
$carro->trocarMarcha('1');
$carro->acelerar('20');
$carro->trocarMarcha('2');
$carro->acelerar('35');
