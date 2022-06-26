<?php

$values = [10, 12, 14, 16];
$names = ['joão', 'ana', 'carlos'];

var_dump($values);
var_dump($names);

foreach ($names as $name) {
    echo "{$name} <br>";
}

$elementos = [
    10 => 1000,
    20 => 2000,
    30 => 3000,
];

$elementos[] = 4000;
// var_dump($elementos);
$valores = [10, 20, 30];
// var_dump($valores);
$valores[1] = 2000;
// var_dump($valores);
$valores[] = 3000;
// var_dump($valores);
array_push($valores, 5000);
var_dump($valores);

// arrays associativos
$dados = [
    'nome' => 'joão',
    'email' => 'joao@email.com',
    'nacionalidade' => 'Portugal',
    'telefone' => '999990000'
];

var_dump($dados);

foreach ($dados as $key => $value) {
    echo "{$key}: {$value} <br>";
}

// arrays multidimensionais
// São arrays, numéricos ou associativos, cujos valores são outros arrays.
$numeros = [
    [10, 20, 30, 40],
    [100, 200, 300, 400],
    [1000, 2000, 3000, 4000],
];

echo $numeros[0][0];
echo '<br>';

$cidades = [
    'portugal' => ['Lisboa', 'Porto', 'Coimbra'],
    'brasil' => ['Brasília', 'Recife', 'Rio de Janeiro'],
    'espanha' => ['Madrid', 'Barcelona', 'Sevilha'],
];

echo $cidades['portugal'][0];