<?php

$notas = [
    10,
     9,
     8,
     7
];
$notasOrdenadas = $notas;
sort(&array: $notasOrdenadas);

echo('Desordenadas:');
var_dump($notas);

echo 'Ordenadas';
var_dump($notasOrdenadas);



?>