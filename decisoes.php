<?php

$idade = 17;
$numerodepessoas = 1;

    echo "Você só pode entrar se tiver a partir de 18 anos. ou " . PHP_EOL;
    echo "a partir de 16 anos acompanhado" . PHP_EOL;

if (idade >= 18) {
    echo "Você tem .$idade . anos" . PHP_EOL;
    echo "Pode entrar sozinho";
} else if ($idade >= 16 && $numerodepessoas > 1) {
    echo "Você tem $idade anos, esta acompanhado (a), então pode entrar.";
} else {    
    echo "Você só tem $idade anos. Você não pode entrar";
    echo PHP_EOL . "É uma pena";
}
    
  
echo PHP_EOL;
echo "Adeus!";


/*
if (idade < 18 ||) {
    echo "Você tem .$idade . anos" . PHP_EOL;
    echo 'Você não pode entrar';

}


/*
if (idade >= 18 && $nome == 'Vinicius') {
    echo "Você tem .$idade . anos" . PHP_EOL;
    echo 'Pode entrar';

}


&& and 
|| ou or
and
or

*/

?>