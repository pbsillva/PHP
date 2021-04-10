<?php

$json = '[{"nome": "João","idade": 20},{"nome": "Pedro","idade": 24}]';

  $data = json_decode($json, true); //colocar true, senão vira objeto

  var_dump($data);

?>