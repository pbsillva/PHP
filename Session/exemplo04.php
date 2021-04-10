<?php

session_id('pkf2b8ch168gfp6ofpkvcm7690');

require_once("config.php");

session_regenerate_id(); 

echo session_id();

echo "<br>";

var_dump($_SESSION);

?>