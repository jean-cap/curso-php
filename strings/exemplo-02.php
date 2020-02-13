<?php
/*
 * Funções para trabalhar com strings
 */
$nome = 'Jean Carlos';

// Retorna a string em letras maiúsculas
$nome = strtoupper($nome);
echo $nome; // => JEAN CARLOS

echo '<br>';

// Retorna a string em letras minúsculas
$nome = strtolower($nome);
echo $nome; // => jean carlos

echo '<br>';

// Retorna a string com a primeira letra da primeira palavra em maiúsculo
$nome = ucfirst($nome);
echo $nome;

echo '<br>';

// Retorna a string com a primeira letra de cada palavra em letra maiúscula
$nome = ucwords($nome);
echo $nome; // => Jean Carlos

echo '<br>';