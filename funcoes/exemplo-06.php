<?php

$pessoas = [
    'nome' => 'Jean',
    'idade' => 40
];

var_dump($pessoas);

foreach ($pessoas as $key => &$value) {
    echo "$key = $value <br>";

    if (gettype($value) === 'integer') {
        $value += 10;
    }
}

var_dump($pessoas);
