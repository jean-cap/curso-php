<?php

function soma(int ...$valores): int
{
    return array_sum($valores);
}

echo soma(2, 8, 5);
