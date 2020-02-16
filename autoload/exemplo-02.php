<?php

function incluirClasses($nomeClasse)
{
    $file = '.' . DIRECTORY_SEPARATOR . $nomeClasse . '.php';

    if (file_exists($file) === true) {
        require_once $file;
    }
}

function incluirClassesAbstratas($nomeClasse)
{
    $file =
        '.' .
        DIRECTORY_SEPARATOR .
        'abstratas' .
        DIRECTORY_SEPARATOR .
        $nomeClasse .
        '.php';

    if (file_exists($file) === true) {
        require_once $file;
    }
}

spl_autoload_register('incluirClasses');
spl_autoload_register('incluirClassesAbstratas');

$carro = new DelRey();
$carro->trocarMarcha('1');
$carro->acelerar('20');
$carro->trocarMarcha('2');
$carro->acelerar('35');
