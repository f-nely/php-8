<?php

$inteiro = 100;
$float = 10.5;
$bool = true;
$string = 'Olá Mundo!';
$array = [10, 12, 14];
$pessoa = new stdClass();
$nulo = null;

var_dump($pessoa);

$variavel;       // antes do PHP 8 - notice
echo $variavel; // depois do PHP 8 - warning