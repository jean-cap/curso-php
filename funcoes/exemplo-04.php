<?php

function ola() {
    $argumentos = func_get_args();

    print_r($argumentos);
}

ola('Jean', 'Bianca');