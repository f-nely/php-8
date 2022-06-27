<?php

// no match apenas uma expressão é válida por cada condição.
// e é possível executar a mesma operação para várias condições
$num = 5;
echo match($num) {
    5 => 'parou no 5',
    10 => 'parou no 10',
    15 => 'parou no 15',
    default => 'é um número diferente de 5, 10, 15'
};

echo '<br>';

$num2 = 4;
$opcao = match($num2) {
    2 => 'é 2',
    4, 5, 6 => 'é 4, 5 ou 6',
    default => 'é outro valor'
};

echo $opcao;