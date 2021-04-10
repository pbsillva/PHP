<?php

$a = 10;

function trocaValor(&$a){ //& muda o valor da variavel fora da função, passa o valor por referência.

    $a += 50;
    return $a;
}

echo trocaValor($a);
echo "<br>";
echo $a;

?>