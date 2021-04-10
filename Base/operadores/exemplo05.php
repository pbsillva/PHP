<?php

$a = 50;
$b = 35;

var_dump($a <=> $b); //comparacao maior, menor ou igual se A for maior, retorna 1 --------- se B for maior retorna -1 -------------- se forem iguais retorna 0
echo "<br/>";

$aa = 50;
$bb = 50;
var_dump($aa <=> $bb);
echo "<br/>";

$ab = 35;
$ba = 50;
var_dump($ab <=> $ba);
echo "<br/>";

?>