//Abertura: <?php

//Expressões Aritméticas:

echo "Numero 1 : " .$número1 = 1;
echo "<br>";
echo "Número: 2 " . $número2 = 2;
echo "<br>";
/*

+ adição
- subtração
*multiplicação
/ divisão
êxponenciação

*/

echo "<br> Adição: <br>";
echo $numero1 + $número2;

echo "<br> Subtração : <br>";
echo $numero1 -$numero2;

echo "<br> Multiplicação : <br>";
echo $numero1 * $numero2;

echo "<br> Divisão : <br>";
echo $numero1 / $numero2;

echo "<br> Exponenciação : <br>";
echo $numero1 ^ $numero2;

$calculo_adicao = $numero1 + $numero2;
$calculo_multiplicacao = $numero1 + $numero2;
echo "<br>";
echo $calculo_adicao."".$calculo_multiplicacao;

//quanto é 10% de 100

$total      = 100;
$percentual =  10;
$calculo_porcentagem = $total / 100 * $percentual;
echo "<br>";
echo $percentual."% de ".$total." é igual a ".$calculo_porcentagem;
echo "<br>";





//*
== igualdade
!= (diferença) ou <>
! (negação
> maior 
< menor
>= maior ou igual
<= menor ou igual
&& ou and
|| ou or

*/


$idade_marcelo = 28;
$idade_bruno = 27;

//Forma 1

if($idade_marcelo <$idade_bruno){
    echo 'O numero'.$idade_marcelo.'é menor que o número'.$idade_bruno;
}
else if($idade_marcelo != $idade_bruno){
    echo 'O número'.$idade_marcelo.' é diferente ao número'.$idade_bruno;
}
else if($idade_marcelo > $idade_bruno || $idade_marcelo == $idade_bruno) {
    echo '1 - O número '.$idade_marcelo.' é maior ou igual ao número'.$idade_bruno;
}
else if($idade_marcelo >= $idade_bruno){
    echo 'O número'.idade_marcelo. 'é maior ou igual ao número'.$idade_bruno;
}
else if ($idade_marcelo <= $idade_bruno){
    echo 'O número'. $idade_marcelo.' é menor ou igual ao número'.$idade_bruno;
}
else{
    echo 'O número'.$idade_marcelo.' Não é menor que o núemro'.$idade_bruno
}



?>