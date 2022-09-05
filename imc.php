<?php

$peso = 60;
$altura = 1.63;
$imc = $peso / $altura ** 2;


echo "Seu IMC é de $imc. Você esta com IMC";

if          ($imc < 18.5)    {
    echo "abaixo";
}
else if     ($imc < 24.9) {
    echo "dentro";
}
else {  
    echo "acima";
    }
    echo " do recomendado ";


