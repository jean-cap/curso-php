<?php
/*
 * Funções para trabalhar com strings
 */
$frase = 'A repetição é a mãe da retenção.';

$palavra = 'mãe';

// Pega a posição da palavra buscada na string.
$posicao = strpos($frase, $palavra);

var_dump($posicao); // => int 19

// Pega uma parte da string.
$texto1 = substr($frase, 0, $posicao);

var_dump($texto1); // => string 'A repetição é a ' (length=19)

// Pega uma parte da string. A função strlen(texto) pega o tamanho do texto. 
$texto2 = substr($frase, $posicao + strlen($palavra), strlen($frase));

var_dump($texto2);

$array = explode(' ', $frase);

var_dump($array);

/*
Saída do comando acima:
array (size=7)
  0 => string 'A' (length=1)
  1 => string 'repetição' (length=11)
  2 => string 'é' (length=2)
  3 => string 'a' (length=1)
  4 => string 'mãe' (length=4)
  5 => string 'da' (length=2)
  6 => string 'retenção.' (length=11)
*/