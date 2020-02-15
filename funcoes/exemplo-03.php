<?php

function ola($texto = 'mundo') {
    return "Olá $texto!<br>";
}

echo ola();
echo ola('universo');