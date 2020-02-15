<?php

setlocale(LC_ALL, 'pt_BR', 'utf-8', 'portuguese');

echo ucwords(strftime('%A, %d de %B de %Y', strtotime('2020-01-01')));