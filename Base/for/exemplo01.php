<?php

for($i=0;$i<=1000;$i+=5){ //$1+=5 pula de 5 em 5

    if($i > 200 && $i < 800) continue; //pula do 200 para o 800

    if($i === 900) break; //para o laço quando chegar no 900

    echo $i . "<br>";
}

?>