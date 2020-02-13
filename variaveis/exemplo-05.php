<?php
/*
 * Escopo de variáveis
 */

$nome = 'Jean';

function teste1() {
    echo $nome;
}

function teste2() {
    global $nome;
    echo $nome;
}

teste1(); // => Erro
teste2(); // => 'Jean'