<?php
/*
 * As variáveis no PHP são representadas por um cifrão ($) seguido pelo nome da variável.
 * Os nomes de variável são case-sensitive.
 * Um nome de variável válido inicia-se com uma letra ou sublinhado,
 * seguido de qualquer número de letras, números ou sublinhados.
 */

// Variáveis válidas:
$nome1 = 'João';
$nome2 = 'Pereira';
$_4share = 1000;

// Declaração de variável em CamelCase e concatenação:
$nomeCompleto = $nome1 . ' ' . $nome2;

echo $nomeCompleto; // => João Pereira

echo '<hr>';

// Destrói uma variável, aceita mais de uma variável
unset($nome1);

// isset verifica se a variável foi definida:
if (isset($nome1)) {
    echo $nome1;
}
