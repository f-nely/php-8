<?php

$nomes = ['joão', 'ana', 'carlos'];

foreach ($nomes as $nome) {
    echo $nome. '<br>';
}

echo '<hr>';

$capitais = [
    'portugal' => 'Lisboa',
    'brasil' => 'Brasília',
    'espanha' => 'Madrid'
];

foreach ($capitais as $key => $value) {
    echo "Para o país {$key} a capital é {$value}.<br>";
}

echo '<hr>';

$arr = [
    'Java' => [
        'Spring Boot',
        'Eclipse'
    ], 
    'Python' => [
        'Django'
    ],
    'PHP' => [
        'CodeIgiter'
    ]
];

echo '<pre>';
print_r($arr);
echo '<br>';

echo 'Sub elements of an array: ' . sizeof($arr) . '<br>';
echo 'All elements of an array: ' . sizeof($arr, 1); 