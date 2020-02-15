<?php

$ts1 = strtotime('2019-01-01');
$ts2 = strtotime('2020-01-01');

$data1 = new DateTime();
$data1->setTimestamp($ts1);

$data2 = new DateTime();
$data2->setTimestamp($ts2);

echo $data1->format('d/m/Y');

echo '<br>';

echo $data2->format('d/m/Y');

echo '<br>Diferença:<br>';

$dif = $data1->diff($data2);

echo $dif->format('%y');